<?php 
/**
 * Created by PhpStorm.
 * User: garvit
 * Date: 11/1/15
 * Time: 12:41 PM
 */

namespace Project\Helpiez\Domain\Model;

use TYPO3\Flow\Annotations as Flow;

/**
 * Class FilterSearch
 *
 * @package Project\Helpiez\Domain\Model
 */
class FilterSearch_Original {

	/**
	 * @var string
	 */
	protected $key;

	/**
	 * @var string
	 */
	protected $opportunityLocation;

	/**
	 * @var string
	 */
	protected $ngoCause;

	/**
	 * @var string
	 */
	protected $ngoLocation;

	/**
	 * @var \Project\Helpiez\Domain\Repository\OrganisationRepository
	 * @Flow\Inject
	 */
	protected $organisationRepository;

	/**
	 * @var \Project\Helpiez\Domain\Repository\EventRepository
	 * @Flow\Inject
	 */
	protected $eventRepository;

	/**
	 * @var \Project\Helpiez\Domain\Repository\VolunteeringRepository
	 * @Flow\Inject
	 */
	protected $volunteeringRepository;

	/**
	 * @var \Project\Helpiez\Domain\Repository\InternshipRepository
	 * @Flow\Inject
	 */
	protected $internshipRepository;

	/**
	 * @return string
	 */
	public function getKey() {
		return $this->key;
	}

	/**
	 * @param string $key
	 */
	public function setKey($key) {
		$this->key = $key;
	}

	/**
	 * @return string
	 */
	public function getOpportunityLocation() {
		return $this->opportunityLocation;
	}

	/**
	 * @param string $opportunityLocation
	 */
	public function setOpportunityLocation($opportunityLocation) {
		$this->opportunityLocation = $opportunityLocation;
	}

	/**
	 * @return string
	 */
	public function getNgoCause() {
		return $this->ngoCause;
	}

	/**
	 * @param string $ngoCause
	 */
	public function setNgoCause($ngoCause) {
		$this->ngoCause = $ngoCause;
	}

	/**
	 * @return string
	 */
	public function getNgoLocation() {
		return $this->ngoLocation;
	}

	/**
	 * @param string $ngoLocation
	 */
	public function setNgoLocation($ngoLocation) {
		$this->ngoLocation = $ngoLocation;
	}

	/**
	 * @return array|null
	 */
	public function getResults() {
		$ngoArray =  $this->getNgoResults();
		$eventArray = $this->RepoSearch($ngoArray, $this->eventRepository);
		$internshipArray = $this->RepoSearch($ngoArray, $this->internshipRepository);
		$volunteeringArray = $this->RepoSearch($ngoArray, $this->volunteeringRepository);
		$result = array("ngo"=> $ngoArray, "event"=> $eventArray, "internship"=>$internshipArray, "volunteering"=> $volunteeringArray);
		return $result;
	}

	/**
	 * @param $ngoArray
	 * @param $repo
	 * @return array
	 */
	private function RepoSearch($ngoArray, $repo) {
		$eventArray = array();
		$tempEventArray = array();
		foreach ($ngoArray as $key=>$ngo) {
			$query = $repo->createQuery();
			$query->matching(
				$query->equals("organisation", $ngo)
			);
			$results = $query->execute();
			while($event = $results->current()) {
				array_push($tempEventArray, $event);
				similar_text(strtolower($this->key), strtolower($event->getName()), $nameSimilarity);
				similar_text(strtolower($this->key), strtolower($event->getLocation()), $locationSimilarity);
				$tags = $event->getTags();
				$tagsSimilarity = 0;
				foreach($tags as $t) {
					similar_text(strtolower($this->key), strtolower($t), $tagsSimilarityTemp);
					if($tagsSimilarityTemp > $tagsSimilarity) {
						$tagsSimilarity = $tagsSimilarityTemp;
					}
				}
				if($nameSimilarity > 50 || $locationSimilarity > 50 || $tagsSimilarity > 50) {
					similar_text(strtolower($this->opportunityLocation), strtolower($event->getLocation()), $locationSimilarity);
					if($locationSimilarity > 50 || ($this->ngoCause = "" && $this->ngoLocation = "")) {
						$similarity = (int)max($nameSimilarity, $tagsSimilarity, $locationSimilarity);
						while (array_key_exists((int)$similarity, $eventArray)) {
							$similarity++;
						}
						$eventArray[$similarity] = $event;
					}
				}
				$results->next();
			}
		}
		$eventArray = array_merge($eventArray, $tempEventArray);
		ksort($eventArray);
		return $eventArray;
	}

	/**
	 * @return array
	 */
	private function getNgoResults() {
		$results = $this->organisationRepository->findAll();
		$ngoArray = array();
		if($this->key == null) {
			while($ngo = $results->current()) {
				array_push($ngoArray, $ngo);
				$results->next();
			}
			return $ngoArray;
		}
		while($ngo = $results->current()) {
			similar_text(strtolower($this->key), strtolower($ngo->getName()), $nameSimilarity);
			similar_text(strtolower($this->key), strtolower($ngo->getRegion()), $regionSimilarity);
			similar_text(strtolower($this->key), strtolower($ngo->getEmail()), $emailSimilarity);
			similar_text(strtolower($this->key), strtolower($ngo->getBeneficiary()), $beneficiarySimilarity);
			$cause = $ngo->getCause();
			$causeSimilarity = 0;
			foreach($cause as $c) {
				similar_text(strtolower($this->key), strtolower($c), $causeSimilarityTemp);
				if($causeSimilarityTemp > $causeSimilarity) {
					$causeSimilarity = $causeSimilarityTemp;
				}
			}
			$tags = $ngo->getTags();
			$tagsSimilarity = 0;
			foreach($tags as $t) {
				similar_text(strtolower($this->key), strtolower($t), $tagsSimilarityTemp);
				if($tagsSimilarityTemp > $tagsSimilarity) {
					$tagsSimilarity = $tagsSimilarityTemp;
				}
			}

			if($nameSimilarity > 50 || $regionSimilarity > 50 || $emailSimilarity > 50 || $beneficiarySimilarity > 50 || $causeSimilarity > 50 || $tagsSimilarity > 50) {
				$cause = $ngo->getCause();
				$causeSimilarity = 0;
				foreach($cause as $c) {
					similar_text(strtolower($this->ngoCause), strtolower($c), $causeSimilarityTemp);
					if($causeSimilarityTemp > $causeSimilarity) {
						$causeSimilarity = $causeSimilarityTemp;
					}
				}
				similar_text(strtolower($this->ngoLocation), strtolower($ngo->getRegion()), $locationSimilarity);
				if($locationSimilarity > 50 || $causeSimilarity > 50 || ($this->ngoCause == "" && $this->ngoLocation == "")) {
					$similarity = (int) max($nameSimilarity, $regionSimilarity, $emailSimilarity, $beneficiarySimilarity, $causeSimilarity, $tagsSimilarity);
					while(array_key_exists((int)$similarity, $ngoArray)) {
						$similarity++;
					}
					$ngoArray[$similarity] = $ngo;
				}
			}
			$results->next();
		}
		ksort($ngoArray);
		return $ngoArray;
	}

}namespace Project\Helpiez\Domain\Model;

use Doctrine\ORM\Mapping as ORM;
use TYPO3\Flow\Annotations as Flow;

/**
 * Class FilterSearch
 */
class FilterSearch extends FilterSearch_Original implements \TYPO3\Flow\Object\Proxy\ProxyInterface {


	/**
	 * Autogenerated Proxy Method
	 */
	public function __construct() {
		if ('Project\Helpiez\Domain\Model\FilterSearch' === get_class($this)) {
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
	$reflectedClass = new \ReflectionClass('Project\Helpiez\Domain\Model\FilterSearch');
	$allReflectedProperties = $reflectedClass->getProperties();
	foreach ($allReflectedProperties as $reflectionProperty) {
		$propertyName = $reflectionProperty->name;
		if (in_array($propertyName, array('Flow_Aop_Proxy_targetMethodsAndGroupedAdvices', 'Flow_Aop_Proxy_groupedAdviceChains', 'Flow_Aop_Proxy_methodIsInAdviceMode'))) continue;
		if (isset($this->Flow_Injected_Properties) && is_array($this->Flow_Injected_Properties) && in_array($propertyName, $this->Flow_Injected_Properties)) continue;
		if ($reflectionService->isPropertyAnnotatedWith('Project\Helpiez\Domain\Model\FilterSearch', $propertyName, 'TYPO3\Flow\Annotations\Transient')) continue;
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
				$varTagValues = $reflectionService->getPropertyTagValues('Project\Helpiez\Domain\Model\FilterSearch', $propertyName, 'var');
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
		$organisationRepository_reference = &$this->organisationRepository;
		$this->organisationRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('Project\Helpiez\Domain\Repository\OrganisationRepository');
		if ($this->organisationRepository === NULL) {
			$this->organisationRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('03ef1ece35ef31b1c4438764c592005c', $organisationRepository_reference);
			if ($this->organisationRepository === NULL) {
				$this->organisationRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('03ef1ece35ef31b1c4438764c592005c',  $organisationRepository_reference, 'Project\Helpiez\Domain\Repository\OrganisationRepository', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('Project\Helpiez\Domain\Repository\OrganisationRepository'); });
			}
		}
		$eventRepository_reference = &$this->eventRepository;
		$this->eventRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('Project\Helpiez\Domain\Repository\EventRepository');
		if ($this->eventRepository === NULL) {
			$this->eventRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('93c891c0f02ac91a49e4a1123b977e73', $eventRepository_reference);
			if ($this->eventRepository === NULL) {
				$this->eventRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('93c891c0f02ac91a49e4a1123b977e73',  $eventRepository_reference, 'Project\Helpiez\Domain\Repository\EventRepository', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('Project\Helpiez\Domain\Repository\EventRepository'); });
			}
		}
		$volunteeringRepository_reference = &$this->volunteeringRepository;
		$this->volunteeringRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('Project\Helpiez\Domain\Repository\VolunteeringRepository');
		if ($this->volunteeringRepository === NULL) {
			$this->volunteeringRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('32c5ac86aab8779836f1acce4da91c9b', $volunteeringRepository_reference);
			if ($this->volunteeringRepository === NULL) {
				$this->volunteeringRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('32c5ac86aab8779836f1acce4da91c9b',  $volunteeringRepository_reference, 'Project\Helpiez\Domain\Repository\VolunteeringRepository', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('Project\Helpiez\Domain\Repository\VolunteeringRepository'); });
			}
		}
		$internshipRepository_reference = &$this->internshipRepository;
		$this->internshipRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('Project\Helpiez\Domain\Repository\InternshipRepository');
		if ($this->internshipRepository === NULL) {
			$this->internshipRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('aebe413e88bf3d85835c725fe4e80863', $internshipRepository_reference);
			if ($this->internshipRepository === NULL) {
				$this->internshipRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('aebe413e88bf3d85835c725fe4e80863',  $internshipRepository_reference, 'Project\Helpiez\Domain\Repository\InternshipRepository', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('Project\Helpiez\Domain\Repository\InternshipRepository'); });
			}
		}
$this->Flow_Injected_Properties = array (
  0 => 'organisationRepository',
  1 => 'eventRepository',
  2 => 'volunteeringRepository',
  3 => 'internshipRepository',
);
	}
}
#