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
class Rating {

	/**
	 * @var \Project\Helpiez\Domain\Model\UserAccount
	 * @ORM\Column(type="string", length=255, nullable=true, unique=true)
	 * @ORM\OneToOne(targetEntity="\Project\Helpiez\Domain\Model\UserAccount", mappedBy="Rating")
	 */
	protected $userAccount;

	/**
	 * @var \Project\Helpiez\Domain\Model\Organisation
	 * @ORM\ManyToOne(targetEntity="\Project\Helpiez\Domain\Model\Organisation")
	 */
	protected $organisation;

	/**
	 * @var int
	 * @ORM\Column(type="integer", nullable=true, unique=true)
	 */
	protected $rating;

	/**
	 * @return int
	 */
	public function getRating() {
		return $this->rating;
	}

	/**
	 * @param int $rating
	 * @return void
	 */
	public function setRating($rating) {
		$this->rating = $rating;
	}

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