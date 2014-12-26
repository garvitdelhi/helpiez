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
     * Home Action
     */
    public function homeAction() {
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
    }

}