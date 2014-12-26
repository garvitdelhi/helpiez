<?php
/**
 * Created by PhpStorm.
 * User: garvit
 * Date: 25/12/14
 * Time: 5:18 PM
 */

namespace Project\Helpiez\Domain\Model;

use TYPO3\Flow\Annotations as Flow;

/**
 * Class UserAccount
 * @package project\helpiez\Domain\Model
 * @Flow\Entity
 */
class UserAccount {

    /**
     * @var string
     * @Flow\Validate(type="StringLength", options={ "minimum"=3, "maximum"=80 })
     */
    protected $name;

    /**
     * @var string
     * @Flow\Validate(type="StringLength", options={ "minimum"=3, "maximum"=80 })
     * @Flow\Identity
     */
    protected $username;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     * @Flow\Identity
     * @Flow\Validate(type="EmailAddress")
     */
    protected $email;

    /**
     * @var string
     */
    protected $gender;

    /**
     * @var string
     */
    protected $profilePic;

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getgender() {
        return $this->gender;
    }

    /**
     * @param string $gender
     * @return void
     */
    public function setgender($gender = NULL) {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * @param string $username
     * @return void
     */
    public function setUsername($username) {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * @param string $password
     * @return void
     */
    public function setPassword($password) {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param string $email
     * @return void
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getProfilePic() {
        return $this->profilePic;
    }

    /**
     * @param string $profilePic
     * @return void
     */
    public function setProfilePic($profilePic = NULL) {
        $this->profilePic = $profilePic;
    }

    /**
     * validation of inputs
     * @param project\emulate\Domain\Repository\UserAccountRepository
     * @param \Project\Helpiez\Controller\AuthController
     * @return bool
     */
    public function Validate($userAccountRepository, $controller) {
        $error = TRUE;
        $query = $userAccountRepository->createQuery();
        $query->matching(
            $query->equals('username', $this->getUsername())
        );
        $result = $query->execute();
        if($result->count() == 1) {
            $controller->addFlashMessage('Username Exists', '', \TYPO3\Flow\Error\Message::SEVERITY_ERROR);
            $error = FALSE;
        }
        $query = $userAccountRepository->createQuery();
        $query->matching(
            $query->equals('email', $this->getEmail())
        );
        $result = $query->execute();
        if($result->count() == 1) {
            $controller->addFlashMessage('Email Exists', '', \TYPO3\Flow\Error\Message::SEVERITY_ERROR);
            $error = FALSE;
        }
        if(strlen($this->getPassword()) <= 3) {
            $error = FALSE;
            $controller->addFlashMessage('Password must be at least 4 characters', '', \TYPO3\Flow\Error\Message::SEVERITY_ERROR);
        }
        return $error;
    }

} 