<?php 
namespace TYPO3\Eel\FlowQuery;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "TYPO3.Eel".             *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\Eel\Exception;
use TYPO3\Flow\Annotations as Flow;

/**
 * FlowQuery is jQuery for PHP, a selector and traversal engine for object sets.
 *
 * It is specifically implemented for being used inside Eel, the Embedded Expression
 * Language for Flow.
 *
 * Essentially, a FlowQuery object is a container for an *ordered set* of objects
 * of a certain type. On this container, *operations* can be applied (like
 * filter(), children(), ...).
 *
 * All of these operations work on a *set*, that is, an operation usually expands
 * or shrinks the set of objects.
 *
 * An operation normally returns a new FlowQuery instance with the operation applied,
 * but there are also some operations like is(...) or count(), which return simple
 * types like boolean or numbers. We call these operations *final operations*.
 *
 * Internal Workings
 * =================
 *
 * To allow for optimization, calling operations are not immediately executed.
 * Instead, they are appended to a *list of operations*. Only if one tries to
 * iterate over the FlowQuery object or calls a final operation, the operations
 * get executed and the result is computed.
 *
 * Implementation of Operations
 * ----------------------------
 *
 * Operations are implemented by implementing the {@link OperationInterface} or,
 * more commonly, subclassing the {@link Operations/AbstractOperation}.
 *
 * An operation must be *equivalence preserving*, that is, the following equation
 * must always hold:
 *
 * applyAllOperations(context) = applyRemainingOperations(applyOperation(context))
 *
 * While an operation is running, it can *add new operations* to the front of the
 * operation queue (with {@link pushOperation()}), so for example count($filter)
 * can first apply filter($filter), followed by count(). However, when doing this,
 * great care must be applied by the operation developer in order to still have
 * finite runs, and to make sure the operation is *equivalence preserving*.
 *
 * Furthermore, an operation can *pop* its following operations from the operation
 * stack, and *peek* what the next operation is. It is up to the operation developer
 * to ensure equivalence preservation.
 *
 * An operation may *never* invoke __call() on the FlowQuery object it receives;
 * as this might lead to an undefined state; i.e. you are not allowed to do:
 * $flowQuery->someOtherOperation() *inside* an operation.
 *
 * Final Operations
 * ----------------
 *
 * If an operation is final, it should return the resulting value directly.
 */
class FlowQuery_Original implements \TYPO3\Eel\ProtectedContextAwareInterface, \IteratorAggregate, \Countable {

	/**
	 * the objects this FlowQuery object wraps
	 *
	 * @var array|\Traversable
	 */
	protected $context;

	/**
	 * Ordered list of operations, each operation is internally
	 * represented as array('name' => '...', 'arguments' => array(...))
	 * whereas the name is a string like 'children' and the arguments
	 * are a numerically-indexed array
	 *
	 * @var array
	 */
	protected $operations = array();

	/**
	 * @Flow\Inject
	 * @var \TYPO3\Eel\FlowQuery\OperationResolverInterface
	 */
	protected $operationResolver;

	/**
	 * Construct a new FlowQuery object from $context and $operations.
	 *
	 * Only the $context parameter belongs to the public API!
	 *
	 * If a FlowQuery is given as the $context we unwrap its context to assert q(q(context)) == q(context).
	 *
	 * @param array|\Traversable $context The initial context (wrapped objects) for this FlowQuery
	 * @param array              $operations
	 * @throws Exception
	 * @api
	 */
	public function __construct($context, array $operations = array()) {
		if (!(is_array($context) || $context instanceof \Traversable)) {
			throw new Exception('The FlowQuery context must be an array or implement \Traversable but context was a ' . gettype($context), 1380816689);
		}
		if ($context instanceof FlowQuery) {
			$this->context = $context->getContext();
		} else {
			$this->context = $context;
		}
		$this->operations = $operations;
	}

	/**
	 * Setter for setting the operation resolver from the outside, only needed
	 * to successfully run unit tests (hacky!)
	 *
	 * @param OperationResolverInterface $operationResolver
	 */
	public function setOperationResolver(OperationResolverInterface $operationResolver) {
		$this->operationResolver = $operationResolver;
	}

	/**
	 * Add a new operation to the operation list and return the new FlowQuery
	 * object. If the operation is final, we directly compute the result and
	 * return the value.
	 *
	 * @param string $operationName
	 * @param array $arguments
	 * @return \TYPO3\Eel\FlowQuery\FlowQuery
	 */
	public function __call($operationName, array $arguments) {
		$updatedOperations = $this->operations;
		$updatedOperations[] = array(
			'name' => $operationName,
			'arguments' => $arguments
		);

		if ($this->operationResolver->isFinalOperation($operationName)) {
			$operationsBackup = $this->operations;
			$contextBackup = $this->context;

			$this->operations = $updatedOperations;
			$operationResult = $this->evaluateOperations();
			$this->operations = $operationsBackup;
			$this->context = $contextBackup;

			return $operationResult;
		} else {
			// non-final operation
			$flowQuery = new FlowQuery($this->context, $updatedOperations);
			$flowQuery->setOperationResolver($this->operationResolver); // Only needed for unit tests; hacky!
			return $flowQuery;
		}
	}

	/**
	 * Implementation of the countable() interface, which is mapped to the "count" operation.
	 *
	 * @return integer
	 */
	public function count() {
		return $this->__call('count', array());
	}

	/**
	 * Called when iterating over this FlowQuery object, triggers evaluation.
	 *
	 * Should NEVER be called inside an operation!
	 *
	 * @return \ArrayIterator
	 */
	public function getIterator() {
		if (count($this->operations) > 0) {
			$this->evaluateOperations();
		}
		return new \ArrayIterator($this->context);
	}

	/**
	 * Evaluate operations
	 *
	 * @return mixed the last operation result if the operation is a final operation, NULL otherwise
	 */
	protected function evaluateOperations() {
		while ($op = array_shift($this->operations)) {
			$operation = $this->operationResolver->resolveOperation($op['name'], $this->context);
			$lastOperationResult = $operation->evaluate($this, $op['arguments']);
		}
		return $lastOperationResult;
	}

	/**
	 * Pop the topmost operation from the stack and return it; i.e. the
	 * operation which should be executed next. The returned array has
	 * the form:
	 * array('name' => '...', 'arguments' => array(...))
	 *
	 * Should only be called inside an operation.
	 *
	 * @return array
	 */
	public function popOperation() {
		return array_shift($this->operations);
	}

	/**
	 * Push a new operation onto the operations stack.
	 *
	 * The last-pushed operation is executed FIRST! (LIFO)
	 *
	 * Should only be called inside an operation.
	 *
	 * @param string $operationName
	 * @param array $arguments
	 */
	public function pushOperation($operationName, array $arguments) {
		array_unshift($this->operations, array(
			'name' => $operationName,
			'arguments' => $arguments
		));
	}

	/**
	 * Peek onto the next operation name, if any, or NULL otherwise.
	 *
	 * Should only be called inside an operation.
	 *
	 * @return string the next operation name or NULL if no next operation found.
	 */
	public function peekOperationName() {
		if (isset($this->operations[0])) {
			return $this->operations[0]['name'];
		} else {
			return NULL;
		}
	}

	/**
	 * Get the current context.
	 *
	 * Should only be called inside an operation.
	 *
	 * @return array|\Traversable
	 */
	public function getContext() {
		return $this->context;
	}

	/**
	 * Set the updated context with the operation result applied.
	 *
	 * Should only be called inside an operation.
	 *
	 * @param array|\Traversable $context
	 */
	public function setContext($context) {
		$this->context = $context;
	}

	/**
	 * @param string $methodName
	 * @return boolean
	 */
	public function allowsCallOfMethod($methodName) {
		return $this->operationResolver->hasOperation($methodName);
	}

}
namespace TYPO3\Eel\FlowQuery;

use Doctrine\ORM\Mapping as ORM;
use TYPO3\Flow\Annotations as Flow;

/**
 * FlowQuery is jQuery for PHP, a selector and traversal engine for object sets.
 * 
 * It is specifically implemented for being used inside Eel, the Embedded Expression
 * Language for Flow.
 * 
 * Essentially, a FlowQuery object is a container for an *ordered set* of objects
 * of a certain type. On this container, *operations* can be applied (like
 * filter(), children(), ...).
 * 
 * All of these operations work on a *set*, that is, an operation usually expands
 * or shrinks the set of objects.
 * 
 * An operation normally returns a new FlowQuery instance with the operation applied,
 * but there are also some operations like is(...) or count(), which return simple
 * types like boolean or numbers. We call these operations *final operations*.
 * 
 * Internal Workings
 * =================
 * 
 * To allow for optimization, calling operations are not immediately executed.
 * Instead, they are appended to a *list of operations*. Only if one tries to
 * iterate over the FlowQuery object or calls a final operation, the operations
 * get executed and the result is computed.
 * 
 * Implementation of Operations
 * ----------------------------
 * 
 * Operations are implemented by implementing the {@link OperationInterface} or,
 * more commonly, subclassing the {@link Operations/AbstractOperation}.
 * 
 * An operation must be *equivalence preserving*, that is, the following equation
 * must always hold:
 * 
 * applyAllOperations(context) = applyRemainingOperations(applyOperation(context))
 * 
 * While an operation is running, it can *add new operations* to the front of the
 * operation queue (with {@link pushOperation()}), so for example count($filter)
 * can first apply filter($filter), followed by count(). However, when doing this,
 * great care must be applied by the operation developer in order to still have
 * finite runs, and to make sure the operation is *equivalence preserving*.
 * 
 * Furthermore, an operation can *pop* its following operations from the operation
 * stack, and *peek* what the next operation is. It is up to the operation developer
 * to ensure equivalence preservation.
 * 
 * An operation may *never* invoke __call() on the FlowQuery object it receives;
 * as this might lead to an undefined state; i.e. you are not allowed to do:
 * $flowQuery->someOtherOperation() *inside* an operation.
 * 
 * Final Operations
 * ----------------
 * 
 * If an operation is final, it should return the resulting value directly.
 */
class FlowQuery extends FlowQuery_Original implements \TYPO3\Flow\Object\Proxy\ProxyInterface {


	/**
	 * Autogenerated Proxy Method
	 * @param array|\Traversable $context The initial context (wrapped objects) for this FlowQuery
	 * @param array              $operations
	 * @throws Exception
	 */
	public function __construct() {
		$arguments = func_get_args();

		if (!array_key_exists(0, $arguments)) $arguments[0] = NULL;
		if (!array_key_exists(1, $arguments)) $arguments[1] = array (
);
		if (!array_key_exists(0, $arguments)) throw new \TYPO3\Flow\Object\Exception\UnresolvedDependenciesException('Missing required constructor argument $context in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
		call_user_func_array('parent::__construct', $arguments);
		if ('TYPO3\Eel\FlowQuery\FlowQuery' === get_class($this)) {
			$this->Flow_Proxy_injectProperties();
		}
	}

	/**
	 * Autogenerated Proxy Method
	 */
	 public function __wakeup() {

	if (property_exists($this, 'Flow_Persistence_RelatedEntities') && is_array($this->Flow_Persistence_RelatedEntities)) {
		$persistenceManager = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Persistence\PersistenceManagerInterface');
		foreach ($this->Flow_Persistence_RelatedEntities as $entityInformation) {
			$entity = $persistenceManager->getObjectByIdentifier($entityInformation['identifier'], $entityInformation['entityType'], TRUE);
			if (isset($entityInformation['entityPath'])) {
				$this->$entityInformation['propertyName'] = \TYPO3\Flow\Utility\Arrays::setValueByPath($this->$entityInformation['propertyName'], $entityInformation['entityPath'], $entity);
			} else {
				$this->$entityInformation['propertyName'] = $entity;
			}
		}
		unset($this->Flow_Persistence_RelatedEntities);
	}
				$this->Flow_Proxy_injectProperties();
	}

	/**
	 * Autogenerated Proxy Method
	 */
	 public function __sleep() {
		$result = NULL;
		$this->Flow_Object_PropertiesToSerialize = array();
	$reflectionService = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Reflection\ReflectionService');
	$reflectedClass = new \ReflectionClass('TYPO3\Eel\FlowQuery\FlowQuery');
	$allReflectedProperties = $reflectedClass->getProperties();
	foreach ($allReflectedProperties as $reflectionProperty) {
		$propertyName = $reflectionProperty->name;
		if (in_array($propertyName, array('Flow_Aop_Proxy_targetMethodsAndGroupedAdvices', 'Flow_Aop_Proxy_groupedAdviceChains', 'Flow_Aop_Proxy_methodIsInAdviceMode'))) continue;
		if (isset($this->Flow_Injected_Properties) && is_array($this->Flow_Injected_Properties) && in_array($propertyName, $this->Flow_Injected_Properties)) continue;
		if ($reflectionService->isPropertyAnnotatedWith('TYPO3\Eel\FlowQuery\FlowQuery', $propertyName, 'TYPO3\Flow\Annotations\Transient')) continue;
		if (is_array($this->$propertyName) || (is_object($this->$propertyName) && ($this->$propertyName instanceof \ArrayObject || $this->$propertyName instanceof \SplObjectStorage ||$this->$propertyName instanceof \Doctrine\Common\Collections\Collection))) {
			if (count($this->$propertyName) > 0) {
				foreach ($this->$propertyName as $key => $value) {
					$this->searchForEntitiesAndStoreIdentifierArray((string)$key, $value, $propertyName);
				}
			}
		}
		if (is_object($this->$propertyName) && !$this->$propertyName instanceof \Doctrine\Common\Collections\Collection) {
			if ($this->$propertyName instanceof \Doctrine\ORM\Proxy\Proxy) {
				$className = get_parent_class($this->$propertyName);
			} else {
				$varTagValues = $reflectionService->getPropertyTagValues('TYPO3\Eel\FlowQuery\FlowQuery', $propertyName, 'var');
				if (count($varTagValues) > 0) {
					$className = trim($varTagValues[0], '\\');
				}
				if (\TYPO3\Flow\Core\Bootstrap::$staticObjectManager->isRegistered($className) === FALSE) {
					$className = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getObjectNameByClassName(get_class($this->$propertyName));
				}
			}
			if ($this->$propertyName instanceof \TYPO3\Flow\Persistence\Aspect\PersistenceMagicInterface && !\TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Persistence\PersistenceManagerInterface')->isNewObject($this->$propertyName) || $this->$propertyName instanceof \Doctrine\ORM\Proxy\Proxy) {
				if (!property_exists($this, 'Flow_Persistence_RelatedEntities') || !is_array($this->Flow_Persistence_RelatedEntities)) {
					$this->Flow_Persistence_RelatedEntities = array();
					$this->Flow_Object_PropertiesToSerialize[] = 'Flow_Persistence_RelatedEntities';
				}
				$identifier = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Persistence\PersistenceManagerInterface')->getIdentifierByObject($this->$propertyName);
				if (!$identifier && $this->$propertyName instanceof \Doctrine\ORM\Proxy\Proxy) {
					$identifier = current(\TYPO3\Flow\Reflection\ObjectAccess::getProperty($this->$propertyName, '_identifier', TRUE));
				}
				$this->Flow_Persistence_RelatedEntities[$propertyName] = array(
					'propertyName' => $propertyName,
					'entityType' => $className,
					'identifier' => $identifier
				);
				continue;
			}
			if ($className !== FALSE && (\TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getScope($className) === \TYPO3\Flow\Object\Configuration\Configuration::SCOPE_SINGLETON || $className === 'TYPO3\Flow\Object\DependencyInjection\DependencyProxy')) {
				continue;
			}
		}
		$this->Flow_Object_PropertiesToSerialize[] = $propertyName;
	}
	$result = $this->Flow_Object_PropertiesToSerialize;
		return $result;
	}

	/**
	 * Autogenerated Proxy Method
	 */
	 private function searchForEntitiesAndStoreIdentifierArray($path, $propertyValue, $originalPropertyName) {

		if (is_array($propertyValue) || (is_object($propertyValue) && ($propertyValue instanceof \ArrayObject || $propertyValue instanceof \SplObjectStorage))) {
			foreach ($propertyValue as $key => $value) {
				$this->searchForEntitiesAndStoreIdentifierArray($path . '.' . $key, $value, $originalPropertyName);
			}
		} elseif ($propertyValue instanceof \TYPO3\Flow\Persistence\Aspect\PersistenceMagicInterface && !\TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Persistence\PersistenceManagerInterface')->isNewObject($propertyValue) || $propertyValue instanceof \Doctrine\ORM\Proxy\Proxy) {
			if (!property_exists($this, 'Flow_Persistence_RelatedEntities') || !is_array($this->Flow_Persistence_RelatedEntities)) {
				$this->Flow_Persistence_RelatedEntities = array();
				$this->Flow_Object_PropertiesToSerialize[] = 'Flow_Persistence_RelatedEntities';
			}
			if ($propertyValue instanceof \Doctrine\ORM\Proxy\Proxy) {
				$className = get_parent_class($propertyValue);
			} else {
				$className = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getObjectNameByClassName(get_class($propertyValue));
			}
			$identifier = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Persistence\PersistenceManagerInterface')->getIdentifierByObject($propertyValue);
			if (!$identifier && $propertyValue instanceof \Doctrine\ORM\Proxy\Proxy) {
				$identifier = current(\TYPO3\Flow\Reflection\ObjectAccess::getProperty($propertyValue, '_identifier', TRUE));
			}
			$this->Flow_Persistence_RelatedEntities[$originalPropertyName . '.' . $path] = array(
				'propertyName' => $originalPropertyName,
				'entityType' => $className,
				'identifier' => $identifier,
				'entityPath' => $path
			);
			$this->$originalPropertyName = \TYPO3\Flow\Utility\Arrays::setValueByPath($this->$originalPropertyName, $path, NULL);
		}
			}

	/**
	 * Autogenerated Proxy Method
	 */
	 private function Flow_Proxy_injectProperties() {
		$this->setOperationResolver(\TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Eel\FlowQuery\OperationResolverInterface'));
$this->Flow_Injected_Properties = array (
  0 => 'operationResolver',
);
	}
}
#