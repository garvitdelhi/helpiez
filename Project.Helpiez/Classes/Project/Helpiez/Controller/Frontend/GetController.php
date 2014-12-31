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

class GetController extends ActionController {

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
     * Search Action
     */
    public function searchAction() {
    }

    /**
     * User Profile Action
     */
    public function userProfileAction() {
    }

	/**
	 * @param string $organisationName
	 * @return string
	 */
	public function organisationAction($organisationName) {
		$this->persistenceManager->whitelistObject($this->organisation);
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

}