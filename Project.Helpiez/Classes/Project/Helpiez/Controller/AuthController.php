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