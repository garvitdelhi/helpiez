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
	 * @ORM\Column(type="string", length=255)
	 */
	protected $userName;

	/**
	 * @var string
	 * @ORM\Column(type="text", length=500)
	 */
	protected $organisation;

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