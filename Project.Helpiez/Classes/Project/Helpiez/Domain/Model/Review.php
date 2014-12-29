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
class Review {

	/**
	 * @var string
	 * @ORM\Column(type="string", length=255, nullable=true, unique=true)
	 * @ORM\OneToOne(targetEntity="\Project\Helpiez\Domain\Model\UserAccount", mappedBy="Review")
	 */
	protected $userAccount;

	/**
	 * @var \Project\Helpiez\Domain\Model\Organisation
	 * @ORM\OneToOne(targetEntity="\Project\Helpiez\Domain\Model\Organisation", mappedBy="Review")
	 */
	protected $organisation;

	/**
	 * @var string
	 * @ORM\Column(type="text", nullable=true)
	 */
	protected $review;

	/**
	 * @var \DateTime
	 */
	protected $timestamp;

	/**
	 * @return string
	 */
	public function getReview() {
		return $this->review;
	}

	/**
	 * @param string $review
	 * @return void
	 */
	public function setReview($review) {
		$this->review = $review;
	}

	/**
	 * @return string
	 */
	public function getTimestamp() {
		return $this->timestamp;
	}

	/**
	 * @param string $timestamp
	 * @return void
	 */
	public function setTimestamp($timestamp) {
		$this->timestamp = $timestamp;
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