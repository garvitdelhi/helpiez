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

class AuthController extends AbstractAuthenticationController {

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
        $defaultRole = array('Project.Helpiez:User', 'Project.Helpiez:Incharge');
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
		if(!$inchargeAccount->getIncharge()) {
			parent::logoutAction();
			$this->addFlashMessage('You are not authorized to login.', '', \TYPO3\Flow\Error\Message::SEVERITY_ERROR);
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

}