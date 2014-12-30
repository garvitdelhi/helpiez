<?php
/**
 * Created by PhpStorm.
 * User: garvit
 * Date: 23/12/14
 * Time: 6:22 PM
 */

namespace Project\Helpiez\Controller\Backend;

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
     * Home Action
     */
    public function homeAction() {
        if(!$this->authenticationManager->isAuthenticated()) {
            $this->redirect('login', 'Backend\Get');
        }
    }

    /**
     * Login Action
     */
    public function loginAction() {
        if($this->authenticationManager->isAuthenticated()) {
            $this->redirect('home', 'Backend\Get');
        }
		$query = $this->organisationRepository->createQuery();
		$query->matching(
			$query->equals('status', true)
		);
		$result = $query->execute();
		$result = $result->toArray();
		$organisations = array();
		foreach($result as $organisation ) {
			$organisations[$organisation->getName()] = $organisation->getName();
		}
		$organisations["other"] = "other";
		$this->view->assign('organisations', $organisations);
    }

}