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
	 * @ORM\Column(type="string", length=255)
	 */
	protected $userName;

	/**
	 * @var string
	 * @ORM\Column(type="text", length=500)
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
	 * @return string
	 */
	public function getUserName() {
		return $this->userName;
	}

	/**
	 * @param string
	 * @return void
	 */
	public function setUserName($userName) {
		$this->userName = $userName;
	}

	/**
	 * @return string
	 */
	public function getOrganisation() {
		return $this->organisation;
	}

	/**
	 * @param string
	 * @return void
	 */
	public function setOrganisation($organisation = null) {
		$this->organisation = $organisation;
	}

}