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
	 * @return void
	 */
	public function indexAction() {
	}

	/**
	 * Is called if authentication failed.
	 *
	 * @param AuthenticationRequiredException $exception The exception thrown while the authentication process
	 * @return void
	 */
	protected function onAuthenticationFailure(AuthenticationRequiredException $exception = NULL) {
		// $this->addFlashMessage('The entered username or password was wrong', 'Wrong credentials', Message::SEVERITY_ERROR, array(), ($exception === NULL ? 1347016771 : $exception->getCode()));
	}

	/**
	 * Is called if authentication was successful.
	 *
	 * @param ActionRequest $originalRequest The request that was intercepted by the security framework, NULL if there was none
	 * @return void
	 */
	public function onAuthenticationSuccess(ActionRequest $originalRequest = NULL) {
		// if ($this->view instanceof JsonView) {
		// 	$this->view->assign('value', array('success' => $this->authenticationManager->isAuthenticated(), 'csrfToken' => $this->securityContext->getCsrfProtectionToken()));
		// } else {
		// 	if ($this->request->hasArgument('lastVisitedNode') && strlen($this->request->getArgument('lastVisitedNode')) > 0) {
		// 		$this->session->putData('lastVisitedNode', $this->request->getArgument('lastVisitedNode'));
		// 	}
		// 	if ($originalRequest !== NULL) {
		// 		// Redirect to the location that redirected to the login form because the user was nog logged in
		// 		$this->redirectToRequest($originalRequest);
		// 	}

		// 	$this->redirect('index', 'Backend\Backend');
		// }
	}

	/**
	 * Logs out a - possibly - currently logged in account.
	 *
	 * @return void
	 */
	public function logoutAction() {
		// $possibleRedirectionUri = $this->backendRedirectionService->getAfterLogoutRedirectionUri($this->request);
		parent::logoutAction();
	}

}