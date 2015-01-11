<?php 
namespace Project\Helpiez\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Project.Helpiez".       *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Security\Authentication\Controller\AbstractAuthenticationController;
use TYPO3\Flow\Security\Exception\AuthenticationRequiredException;
use TYPO3\Flow\Mvc\ActionRequest;
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRedirectLoginHelper;

class AuthController_Original extends AbstractAuthenticationController {

    /**
     * @var \TYPO3\Flow\Security\AccountFactory
     * @Flow\Inject
     */
    protected $accountFactory;

    /**
     * @var \TYPO3\Flow\Security\AccountRepository
     * @Flow\Inject
     */
    protected $accountRepository;

    /**
     * @var \Project\Helpiez\Domain\Repository\UserAccountRepository
     * @Flow\Inject
     */
    protected $userAccountRepository;

	/**
	 * @var \Project\Helpiez\Domain\Repository\OrganisationRepository
	 * @Flow\Inject
	 */
	protected $organisationRepository;

	/**
	 * @var \Project\Helpiez\Domain\Repository\InchargeAccountRepository
	 * @Flow\Inject
	 */
	protected $inchargeAccountRepository;

	/**
	 * security context
	 * @var \TYPO3\Flow\Security\Context
	 * @Flow\Inject
	 */
	protected $securityContext;

	/**
	 * @var \TYPO3\Flow\Security\Policy\PolicyService
	 * @Flow\Inject
	 */
	protected $policyService;

	/**
	 * token variable
	 * @var \TYPO3\Flow\Security\Authentication\Token\UsernamePassword
	 */
	protected $token;

    /**
     * @param \Project\Helpiez\Domain\Model\UserAccount $userAccount
     * @return string
     */
    public function registerEmailAction($userAccount = NULL) {
        if ($userAccount == NULL) {
            $this->addFlashMessage('Please fill the form', '', \TYPO3\Flow\Error\Message::SEVERITY_ERROR);
            $this->redirect('login', 'Frontend\Get');
        }
        $defaultRole = array('Project.Helpiez:User');
        if(!$userAccount->validate($this->userAccountRepository, $this)) {
            $this->redirect('login', 'Frontend\Get');
        }
        $account = $this->accountFactory->createAccountWithPassword($userAccount->getUsername(), $userAccount->getPassword(), $defaultRole);
        $this->accountRepository->add($account);
        $userAccount->setPassword('');
        $this->userAccountRepository->add($userAccount);
        $this->addFlashMessage('Account Registered Please Login', '', \TYPO3\Flow\Error\Message::SEVERITY_OK);
        $this->redirect('login', 'Frontend\Get');
    }

    /**
     * @param \Project\Helpiez\Domain\Model\UserAccount $userAccount
	 * @param string $organisationName
     * @return string
     */
    public function inchargeRegistrationAction($userAccount = NULL, $organisationName) {
        if ($userAccount == NULL) {
            $this->addFlashMessage('Please fill the form', '', \TYPO3\Flow\Error\Message::SEVERITY_ERROR);
            $this->redirect('login', 'Backend\Get');
        }
        $defaultRole = array('Project.Helpiez:User');
        if(!$userAccount->validate($this->userAccountRepository, $this)) {
            $this->redirect('login', 'Backend\Get');
        }
        $account = $this->accountFactory->createAccountWithPassword($userAccount->getUsername(), $userAccount->getPassword(), $defaultRole);
        $this->accountRepository->add($account);
        $userAccount->setPassword('');
        $this->userAccountRepository->add($userAccount);
		$inchargeAccount = new \Project\Helpiez\Domain\Model\InchargeAccount();
		$inchargeAccount->setIncharge(false);
		$inchargeAccount->setUsername($userAccount->getUsername());

		/**
		 * look if organisation exists.
		 */
		$query = $this->organisationRepository->createQuery();
		$query->matching(
			$query->equals('name', $organisationName)
		);
		$result = $query->execute();
		if($result->count() < 1 ) {
			$organisation = new \Project\Helpiez\Domain\Model\Organisation();
			$organisation->setName($organisationName);
			$organisation->setStatus(false);
			$this->organisationRepository->add($organisation);
		} else {
			$organisation = $result->getFirst();
		}

		$inchargeAccount->setOrganisation($organisation);
		$inchargeAccount->setOrganisationName($organisationName);
		$this->inchargeAccountRepository->add($inchargeAccount);
        $this->addFlashMessage('You can use this account to login in frontend as well.', '', \TYPO3\Flow\Error\Message::SEVERITY_OK);
		$this->addFlashMessage('You will not be able to login to backend unless your identity is confirmed.', '', \TYPO3\Flow\Error\Message::SEVERITY_OK);
        $this->redirect('login', 'Backend\Get');
    }

	/**
	 *
	 */
	public function fbLoginAction() {

		$app_id             = '351837578274299';  //Facebook App ID
		$app_secret         = '2c23d059c95a760c5dd2f72af8878f5e'; //Facebook App Secret
		$required_scope     = 'public_profile, publish_actions, email'; //Permissions required
		$redirect_url       = 'http://project.helpiez/auth/fbLogin'; //FB redirects to this page with a code

//import required class to the current scope

		FacebookSession::setDefaultApplication($app_id , $app_secret);
		$helper = new FacebookRedirectLoginHelper($redirect_url);

//try to get current user session
		try {
			$session = $helper->getSessionFromRedirect();
		} catch(FacebookRequestException $ex) {
			die(" Error : " . $ex->getMessage());
		} catch(\Exception $ex) {
			die(" Error : " . $ex->getMessage());
		}

		if ($session){ //if we have the FB session
			$user_profile = (new FacebookRequest($session, 'GET', '/me'))->execute()->getGraphObject(GraphUser::className());
			//do stuff below, save user info to database etc.

			echo '<pre>';
			print_r($user_profile); //Or just print all user details
			echo '</pre>';

		}else{

			//display login url
			$login_url = $helper->getLoginUrl( array( 'scope' => $required_scope ) );
			echo '<a href="'.$login_url.'">Login with Facebook</a>';
		}
		return "";
	}

	/**
	 *
	 */
	public function inchargeLoginAction() {
		$this->token = $this->securityContext->getAuthenticationTokensOfType('\TYPO3\Flow\Security\Authentication\Token\UsernamePassword')[0];
		if(!$this->token->isAuthenticated()) {
			parent::logoutAction();
			$this->addFlashMessage('Username & Password are wrong.', '', \TYPO3\Flow\Error\Message::SEVERITY_ERROR);
			$this->redirect('login', 'Backend\Get');
		}
		$username = $this->token->getAccount()->getAccountIdentifier();
		$query = $this->inchargeAccountRepository->createQuery();
		$query->matching(
			$query->equals('username', $username)
		);
		$result = $query->execute();
		if($result->count() < 1) {
			parent::logoutAction();
			$this->addFlashMessage('You are not authorized to login.', '', \TYPO3\Flow\Error\Message::SEVERITY_ERROR);
			$this->redirect('login', 'Backend\Get');
		}
		$inchargeAccount = $result->getFirst();
		$inchargeRole = $this->policyService->getRole("Project.Helpiez:Incharge");
		if(!$inchargeAccount->getIncharge()) {
			$account = $this->token->getAccount();
			if($account->hasRole($inchargeRole)) {
				$account->removeRole($this->policyService->getRole("Project.Helpiez:Incharge"));
				$this->accountRepository->update($account);
			}
			parent::logoutAction();
			$this->addFlashMessage('You are not authorized to login.', '', \TYPO3\Flow\Error\Message::SEVERITY_ERROR);
		} else {
			$account = $this->token->getAccount();
	 		$roles = $account->getRoles();
			if(!$account->hasRole($inchargeRole)) {
				$account->addRole($inchargeRole);
				$this->accountRepository->update($account);
				$this->addFlashMessage('You still don\'t have incharge.', '', \TYPO3\Flow\Error\Message::SEVERITY_ERROR);
			}

		}
		$this->redirect('login', 'Backend\Get');
	}

	/**
	 * Is called if authentication failed.
	 *
	 * @param AuthenticationRequiredException $exception The exception thrown while the authentication process
	 * @return void
	 */
	protected function onAuthenticationFailure(AuthenticationRequiredException $exception = NULL) {
		$this->addFlashMessage('The entered username or password was wrong.', '', \TYPO3\Flow\Error\Message::SEVERITY_ERROR);
        $this->redirect('login', 'Frontend\Get');

	}

	/**
	 * Is called if authentication was successful.
	 *
	 * @param ActionRequest $originalRequest The request that was intercepted by the security framework, NULL if there was none
	 * @return void
	 */
	public function onAuthenticationSuccess(ActionRequest $originalRequest = NULL) {
        $this->redirect('home', 'Frontend\Get');
	}

	/**
	 * Logs out a - possibly - currently logged in account.
	 *
	 * @return void
	 */
	public function logoutAction() {
		// $possibleRedirectionUri = $this->backendRedirectionService->getAfterLogoutRedirectionUri($this->request);
		parent::logoutAction();
        $this->redirect('home', 'Frontend\Get');
	}

}namespace Project\Helpiez\Controller;

use Doctrine\ORM\Mapping as ORM;
use TYPO3\Flow\Annotations as Flow;

/**
 * 
 */
class AuthController extends AuthController_Original implements \TYPO3\Flow\Object\Proxy\ProxyInterface {


	/**
	 * Autogenerated Proxy Method
	 */
	public function __construct() {
		if ('Project\Helpiez\Controller\AuthController' === get_class($this)) {
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
	$reflectedClass = new \ReflectionClass('Project\Helpiez\Controller\AuthController');
	$allReflectedProperties = $reflectedClass->getProperties();
	foreach ($allReflectedProperties as $reflectionProperty) {
		$propertyName = $reflectionProperty->name;
		if (in_array($propertyName, array('Flow_Aop_Proxy_targetMethodsAndGroupedAdvices', 'Flow_Aop_Proxy_groupedAdviceChains', 'Flow_Aop_Proxy_methodIsInAdviceMode'))) continue;
		if (isset($this->Flow_Injected_Properties) && is_array($this->Flow_Injected_Properties) && in_array($propertyName, $this->Flow_Injected_Properties)) continue;
		if ($reflectionService->isPropertyAnnotatedWith('Project\Helpiez\Controller\AuthController', $propertyName, 'TYPO3\Flow\Annotations\Transient')) continue;
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
				$varTagValues = $reflectionService->getPropertyTagValues('Project\Helpiez\Controller\AuthController', $propertyName, 'var');
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
		$accountFactory_reference = &$this->accountFactory;
		$this->accountFactory = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('TYPO3\Flow\Security\AccountFactory');
		if ($this->accountFactory === NULL) {
			$this->accountFactory = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('f316baee16699e7bca10b2c9f1eac706', $accountFactory_reference);
			if ($this->accountFactory === NULL) {
				$this->accountFactory = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('f316baee16699e7bca10b2c9f1eac706',  $accountFactory_reference, 'TYPO3\Flow\Security\AccountFactory', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Security\AccountFactory'); });
			}
		}
		$accountRepository_reference = &$this->accountRepository;
		$this->accountRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('TYPO3\Flow\Security\AccountRepository');
		if ($this->accountRepository === NULL) {
			$this->accountRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('d68c73088546244eb016f396195a461c', $accountRepository_reference);
			if ($this->accountRepository === NULL) {
				$this->accountRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('d68c73088546244eb016f396195a461c',  $accountRepository_reference, 'TYPO3\Flow\Security\AccountRepository', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Security\AccountRepository'); });
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
		$organisationRepository_reference = &$this->organisationRepository;
		$this->organisationRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('Project\Helpiez\Domain\Repository\OrganisationRepository');
		if ($this->organisationRepository === NULL) {
			$this->organisationRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('03ef1ece35ef31b1c4438764c592005c', $organisationRepository_reference);
			if ($this->organisationRepository === NULL) {
				$this->organisationRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('03ef1ece35ef31b1c4438764c592005c',  $organisationRepository_reference, 'Project\Helpiez\Domain\Repository\OrganisationRepository', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('Project\Helpiez\Domain\Repository\OrganisationRepository'); });
			}
		}
		$inchargeAccountRepository_reference = &$this->inchargeAccountRepository;
		$this->inchargeAccountRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('Project\Helpiez\Domain\Repository\InchargeAccountRepository');
		if ($this->inchargeAccountRepository === NULL) {
			$this->inchargeAccountRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('e43a17b1a2be765227d6caf7baa9005e', $inchargeAccountRepository_reference);
			if ($this->inchargeAccountRepository === NULL) {
				$this->inchargeAccountRepository = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('e43a17b1a2be765227d6caf7baa9005e',  $inchargeAccountRepository_reference, 'Project\Helpiez\Domain\Repository\InchargeAccountRepository', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('Project\Helpiez\Domain\Repository\InchargeAccountRepository'); });
			}
		}
		$securityContext_reference = &$this->securityContext;
		$this->securityContext = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('TYPO3\Flow\Security\Context');
		if ($this->securityContext === NULL) {
			$this->securityContext = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('48836470c14129ade5f39e28c4816673', $securityContext_reference);
			if ($this->securityContext === NULL) {
				$this->securityContext = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('48836470c14129ade5f39e28c4816673',  $securityContext_reference, 'TYPO3\Flow\Security\Context', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Security\Context'); });
			}
		}
		$policyService_reference = &$this->policyService;
		$this->policyService = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('TYPO3\Flow\Security\Policy\PolicyService');
		if ($this->policyService === NULL) {
			$this->policyService = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('16231078e783810895dba92e364c25f7', $policyService_reference);
			if ($this->policyService === NULL) {
				$this->policyService = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('16231078e783810895dba92e364c25f7',  $policyService_reference, 'TYPO3\Flow\Security\Policy\PolicyService', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Security\Policy\PolicyService'); });
			}
		}
		$authenticationManager_reference = &$this->authenticationManager;
		$this->authenticationManager = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getInstance('TYPO3\Flow\Security\Authentication\AuthenticationManagerInterface');
		if ($this->authenticationManager === NULL) {
			$this->authenticationManager = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getLazyDependencyByHash('d4b358f5a262d346229c2bf11ebd0c1d', $authenticationManager_reference);
			if ($this->authenticationManager === NULL) {
				$this->authenticationManager = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->createLazyDependency('d4b358f5a262d346229c2bf11ebd0c1d',  $authenticationManager_reference, 'TYPO3\Flow\Security\Authentication\AuthenticationProviderManager', function() { return \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Security\Authentication\AuthenticationManagerInterface'); });
			}
		}
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
  1 => 'accountFactory',
  2 => 'accountRepository',
  3 => 'userAccountRepository',
  4 => 'organisationRepository',
  5 => 'inchargeAccountRepository',
  6 => 'securityContext',
  7 => 'policyService',
  8 => 'authenticationManager',
  9 => 'objectManager',
  10 => 'reflectionService',
  11 => 'mvcPropertyMappingConfigurationService',
  12 => 'viewConfigurationManager',
  13 => 'systemLogger',
  14 => 'validatorResolver',
  15 => 'flashMessageContainer',
  16 => 'persistenceManager',
);
	}
}
#