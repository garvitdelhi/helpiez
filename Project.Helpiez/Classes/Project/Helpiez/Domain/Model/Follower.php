<?php
namespace Project\Helpiez\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Project.Helpiez".       *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 */
class Follower {

	/**
	 * @var string
	 * @ORM\Column(type="string", length=255, unique=true)
	 * @ORM\OneToOne(targetEntity="\Project\Helpiez\Domain\Model\UserAccount", mappedBy="Follower")
	 */
	protected $userAccount;

	/**
	 * @var \Project\Helpiez\Domain\Model\Organisation
	 * @ORM\OneToOne(targetEntity="\Project\Helpiez\Domain\Model\Organisation", mappedBy="Follower")
	 */
	protected $organisation;

	/**
	 * @return \Project\Helpiez\Domain\Model\UserAccount
	 */
	public function getUserAccount() {
		return $this->userAccount;
	}

	/**
	 * @param \Project\Helpiez\Domain\Model\UserAccount $userAccount
	 * @return void
	 */
	public function setUserAccount($userAccount) {
		$this->userAccount = $userAccount;
	}

	/**
	 * @return \Project\Helpiez\Domain\Model\Organisation
	 */
	public function getOrganisation() {
		return $this->organisation;
	}

	/**
	 * @param \Project\Helpiez\Domain\Model\Organisation $organisation
	 * @return void
	 */
	public function setOrganisation($organisation = null) {
		$this->organisation = $organisation;
	}

}