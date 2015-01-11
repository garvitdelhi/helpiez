<?php 
/**
 * Created by PhpStorm.
 * User: garvit
 * Date: 23/12/14
 * Time: 6:22 PM
 */

namespace Project\Helpiez\Controller\Frontend;

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\Controller\ActionController;

/**
 * Class GetController
 *
 * @package Project\Helpiez\Controller\Frontend
 */
class GetController_Original extends ActionController {

    /**
     * @var \TYPO3\Flow\Security\Authentication\AuthenticationManagerInterface
     * @Flow\Inject
     */
    protected $authenticationManager;

	/**
	 * @var \Project\Helpiez\Domain\Repository\OrganisationRepository
	 * @Flow\Inject
	 */
	protected $organisationRepository;

	/**
	 * @var \Project\Helpiez\Domain\Repository\UserAccountRepository
	 * @Flow\Inject
	 */
	protected $userAccountRepository;

	/**
	 * @var \Project\Helpiez\Domain\Model\Organisation
	 * @Flow\Inject
	 */
	protected $organisation;

	/**
	 * @var \Project\Helpiez\Domain\Model\Search
	 * @Flow\Inject
	 */
	protected $search;

	/**
	 * @var \Project\Helpiez\Domain\Model\FilterSearch
	 * @Flow\Inject
	 */
	protected $filterSearch;

	/**
	 * @var \Project\Helpiez\Controller\AuthController
	 * @Flow\Inject
	 */
	protected $authController;

    /**
     * Home Action
     */
    public function homeAction() {

    }

	/**
	 * @return string
	 */
	public function tryAction() {
//		$this->persistenceManager->whitelistObject($this->organisation);
//		$this->organisation->setCause(array("Women"));
//		$this->organisation->setAddress("C-24 B, Second Floor, Kalkaji , South Delhi");
//		$this->organisation->setName("d");
//		$this->organisation->setNumber(11);
//		$this->organisation->setWebsite("abd.c");
//		$this->organisation->setEmail("mail@pravah.org");
//		$this->organisation->setYoutube("HaB4rXJ9rrk");
//		$this->organisation->setDescription("Pravah is an youth oriented NGO which encourages young people to participate in community service. Youth adda , smile internship are their main programs. They have collaboration with around 60 ngos.");
//		$this->organisation->setFb("pravahdelhi");
//		$this->organisationRepository->add($this->organisation);
		return "";
	}

	/**
	 * Search Action
	 *
	 * @param string $key
	 * @param string $box
	 * @return string
	 */
    public function searchAction($key = null, $box = null) {
			$this->search->setKey($key);
			$this->search->setBox($box);
			$this->view->assign("key", $this->search->getKey());
			$this->view->assign("searchResult", $this->search->getResults());
    }

	/**
	 * @param string $key
	 * @param string $ngoCause
	 * @param string $ngoLocation
	 * @param string $opportunityLocation
	 * @return string
	 */
	public function filterSearchAction($key = "", $ngoCause = "", $ngoLocation = "", $opportunityLocation = "") {
		$this->filterSearch->setKey($key);
		$this->filterSearch->setNgoCause($ngoCause);
		$this->filterSearch->setNgoLocation($ngoCause);
		$this->filterSearch->setOpportunityLocation($opportunityLocation);
		$results = $this->filterSearch->getResults();
		\TYPO3\Flow\var_dump($results);
		return json_encode($results);
	}

    /**
     * Project Action
     */
    public function projectAction() {
    }

    /**
     * AddForm Action
     */
    public function addFormAction() {
    }

    /**
     * Edit Action
     */
    public function editAction() {
    }

    /**
     * Coming Events Action
     */
    public function eventsAction() {
    }

    /**
     * volunteering Action
     */
    public function volunteeringAction() {
    }

    /**
     * jobs Action
     */
    public function jobsAction() {
    }

    /**
     * internships Action
     */
    public function internshipsAction() {
    }

	/**
	 * @param string $organisationName
	 * @return string
	 */
	public function organisationAction($organisationName) {
//		$this->persistenceManager->whitelistObject($this->organisation);
		$organisationName = str_replace("_", " ", $organisationName);
		$query = $this->organisationRepository->createQuery();
		$query->matching(
			$query->equals('name', $organisationName)
		);
		$result = $query->execute();
		if($result->count() < 1) {
			$this->redirect('home', 'Frontend\Get');
		}
		$this->organisation = $result->getFirst();
		$this->organisation->setPageViews($this->organisation->getPageViews() + 1);
		$this->organisationRepository->update($this->organisation);
		$this->view->assign('organisation', $this->organisation);
	}

    /**
     * Login Action
     */
    public function loginAction() {
        if($this->authenticationManager->isAuthenticated()) {
            $this->redirect('home', 'Frontend\Get');
        }
    }

    /**
     * Profile Action
     */
    public function profileAction() {
        if(!$this->authenticationManager->isAuthenticated()) {
            $this->redirect('home', 'Frontend\Get');
        }
		$username = $this->authenticationManager->getSecurityContext()->getAccount()->getAccountIdentifier();
		$query = $this->userAccountRepository->createQuery();
		$query->matching(
			$query->equals("username", $username)
		);
		$result = $query->execute();
		if($result->count() < 1) $this->authController->logoutAction();
		$userAccount = $result->getFirst();
		$this->view->assign("user", $userAccount);
    }

}namespace Project\Helpiez\Controller\Frontend;

use Doctrine\ORM\Mapping as ORM;
use TYPO3\Flow\Annotations as Flow;

/**
 * Class GetController
 */
class GetController extends GetController_Original implements \TYPO3\Flow\Object\Proxy\ProxyInterface {


	/**
	 * Autogenerated Proxy Method
	 */
	public function __construct() {
		if ('Project\Helpiez\Controller\Frontend\GetController' === get_class($this)) {
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
	$reflectedClass = new \ReflectionClass('Project\Helpiez\Controller\Frontend\GetController');
	$allReflectedProperties = $reflectedClass->getProperties();
	foreach ($allReflectedProperties as $reflectionProperty) {
		$propertyName = $reflectionProperty->name;
		if (in_array($propertyName, array('Flow_Aop_Proxy_targetMethodsAndGroupedAdvices', 'Flow_Aop_Proxy_groupedAdviceChains', 'Flow_Aop_Proxy_methodIsInAdviceMode'))) continue;
		if (isset($this->Flow_Injected_Properties) && is_array($this->Flow_Injected_Properties) && in_array($propertyName, $this->Flow_Injected_Properties)) continue;
		if ($reflectionService->isPropertyAnnotatedWith('Project\Helpiez\Controller\Frontend\GetController', $propertyName, 'TYPO3\Flow\Annotations\Transient')) continue;
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
				$varTagValues = $reflectionService->getPropertyTagValues('Project\Helpiez\Controller\Frontend\GetController', $propertyName, 'var');
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
		$this->injectSettings(\TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Configuration\ConfigurationManager')->getConfiguration(\TYPO3\Flow\Configuration\ConfigurationManager::CONFIGURATION_TYPE_SETTINGS, 'Project.Helpiez'));
		$authenticationManager_reference = &$this->authenticationManager;
		$this->authenticationManager = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('TYPO3\Flow\Security\Authentication\AuthenticationManagerInterface');
		if ($this->authenticationManager === NULL) {
			$this->authenticationManager = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('d4b358f5a262d346229c2bf11ebd0c1d', $authenticationManager_reference);
			if ($this->authenticationManager === NULL) {
				$this->authenticationManager = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('d4b358f5a262d346229c2bf11ebd0c1d',  $authenticationManager_reference, 'TYPO3\Flow\Security\Authentication\AuthenticationProviderManager', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Security\Authentication\AuthenticationManagerInterface'); });
			}
		}
		$organisationRepository_reference = &$this->organisationRepository;
		$this->organisationRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('Project\Helpiez\Domain\Repository\OrganisationRepository');
		if ($this->organisationRepository === NULL) {
			$this->organisationRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('03ef1ece35ef31b1c4438764c592005c', $organisationRepository_reference);
			if ($this->organisationRepository === NULL) {
				$this->organisationRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('03ef1ece35ef31b1c4438764c592005c',  $organisationRepository_reference, 'Project\Helpiez\Domain\Repository\OrganisationRepository', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('Project\Helpiez\Domain\Repository\OrganisationRepository'); });
			}
		}
		$userAccountRepository_reference = &$this->userAccountRepository;
		$this->userAccountRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('Project\Helpiez\Domain\Repository\UserAccountRepository');
		if ($this->userAccountRepository === NULL) {
			$this->userAccountRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('a7a070921fe4727a1e3b85d2d770012f', $userAccountRepository_reference);
			if ($this->userAccountRepository === NULL) {
				$this->userAccountRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('a7a070921fe4727a1e3b85d2d770012f',  $userAccountRepository_reference, 'Project\Helpiez\Domain\Repository\UserAccountRepository', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('Project\Helpiez\Domain\Repository\UserAccountRepository'); });
			}
		}
		$this->organisation = new \Project\Helpiez\Domain\Model\Organisation();
		$this->search = new \Project\Helpiez\Domain\Model\Search();
		$this->filterSearch = new \Project\Helpiez\Domain\Model\FilterSearch();
		$this->authController = new \Project\Helpiez\Controller\AuthController();
		$objectManager_reference = &$this->objectManager;
		$this->objectManager = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('TYPO3\Flow\Object\ObjectManagerInterface');
		if ($this->objectManager === NULL) {
			$this->objectManager = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('0c3c44be7be16f2a287f1fb2d068dde4', $objectManager_reference);
			if ($this->objectManager === NULL) {
				$this->objectManager = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('0c3c44be7be16f2a287f1fb2d068dde4',  $objectManager_reference, 'TYPO3\Flow\Object\ObjectManager', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Object\ObjectManagerInterface'); });
			}
		}
		$reflectionService_reference = &$this->reflectionService;
		$this->reflectionService = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('TYPO3\Flow\Reflection\ReflectionService');
		if ($this->reflectionService === NULL) {
			$this->reflectionService = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('921ad637f16d2059757a908fceaf7076', $reflectionService_reference);
			if ($this->reflectionService === NULL) {
				$this->reflectionService = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('921ad637f16d2059757a908fceaf7076',  $reflectionService_reference, 'TYPO3\Flow\Reflection\ReflectionService', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Reflection\ReflectionService'); });
			}
		}
		$mvcPropertyMappingConfigurationService_reference = &$this->mvcPropertyMappingConfigurationService;
		$this->mvcPropertyMappingConfigurationService = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('TYPO3\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService');
		if ($this->mvcPropertyMappingConfigurationService === NULL) {
			$this->mvcPropertyMappingConfigurationService = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('35acb49fbe78f28099d45aa647797c83', $mvcPropertyMappingConfigurationService_reference);
			if ($this->mvcPropertyMappingConfigurationService === NULL) {
				$this->mvcPropertyMappingConfigurationService = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('35acb49fbe78f28099d45aa647797c83',  $mvcPropertyMappingConfigurationService_reference, 'TYPO3\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService'); });
			}
		}
		$viewConfigurationManager_reference = &$this->viewConfigurationManager;
		$this->viewConfigurationManager = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('TYPO3\Flow\Mvc\ViewConfigurationManager');
		if ($this->viewConfigurationManager === NULL) {
			$this->viewConfigurationManager = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('5a345bfd515fdb9f0c97080ff13c7079', $viewConfigurationManager_reference);
			if ($this->viewConfigurationManager === NULL) {
				$this->viewConfigurationManager = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('5a345bfd515fdb9f0c97080ff13c7079',  $viewConfigurationManager_reference, 'TYPO3\Flow\Mvc\ViewConfigurationManager', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Mvc\ViewConfigurationManager'); });
			}
		}
		$systemLogger_reference = &$this->systemLogger;
		$this->systemLogger = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('TYPO3\Flow\Log\SystemLoggerInterface');
		if ($this->systemLogger === NULL) {
			$this->systemLogger = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('6d57d95a1c3cd7528e3e6ea15012dac8', $systemLogger_reference);
			if ($this->systemLogger === NULL) {
				$this->systemLogger = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('6d57d95a1c3cd7528e3e6ea15012dac8',  $systemLogger_reference, 'TYPO3\Flow\Log\SystemLoggerInterface', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Log\SystemLoggerInterface'); });
			}
		}
		$validatorResolver_reference = &$this->validatorResolver;
		$this->validatorResolver = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('TYPO3\Flow\Validation\ValidatorResolver');
		if ($this->validatorResolver === NULL) {
			$this->validatorResolver = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('b457db29305ddeae13b61d92da000ca0', $validatorResolver_reference);
			if ($this->validatorResolver === NULL) {
				$this->validatorResolver = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('b457db29305ddeae13b61d92da000ca0',  $validatorResolver_reference, 'TYPO3\Flow\Validation\ValidatorResolver', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Validation\ValidatorResolver'); });
			}
		}
		$flashMessageContainer_reference = &$this->flashMessageContainer;
		$this->flashMessageContainer = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('TYPO3\Flow\Mvc\FlashMessageContainer');
		if ($this->flashMessageContainer === NULL) {
			$this->flashMessageContainer = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('e4fd26f8afd3994317304b563b2a9561', $flashMessageContainer_reference);
			if ($this->flashMessageContainer === NULL) {
				$this->flashMessageContainer = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('e4fd26f8afd3994317304b563b2a9561',  $flashMessageContainer_reference, 'TYPO3\Flow\Mvc\FlashMessageContainer', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Mvc\FlashMessageContainer'); });
			}
		}
		$persistenceManager_reference = &$this->persistenceManager;
		$this->persistenceManager = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('TYPO3\Flow\Persistence\PersistenceManagerInterface');
		if ($this->persistenceManager === NULL) {
			$this->persistenceManager = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('f1bc82ad47156d95485678e33f27c110', $persistenceManager_reference);
			if ($this->persistenceManager === NULL) {
				$this->persistenceManager = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('f1bc82ad47156d95485678e33f27c110',  $persistenceManager_reference, 'TYPO3\Flow\Persistence\Doctrine\PersistenceManager', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Persistence\PersistenceManagerInterface'); });
			}
		}
$this->Flow_Injected_Properties = array (
  0 => 'settings',
  1 => 'authenticationManager',
  2 => 'organisationRepository',
  3 => 'userAccountRepository',
  4 => 'organisation',
  5 => 'search',
  6 => 'filterSearch',
  7 => 'authController',
  8 => 'objectManager',
  9 => 'reflectionService',
  10 => 'mvcPropertyMappingConfigurationService',
  11 => 'viewConfigurationManager',
  12 => 'systemLogger',
  13 => 'validatorResolver',
  14 => 'flashMessageContainer',
  15 => 'persistenceManager',
);
	}
}
#