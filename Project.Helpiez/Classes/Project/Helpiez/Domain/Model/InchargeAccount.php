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
class InchargeAccount {

	/**
	 * @var string
	 * @Flow\Validate(type="StringLength", options={ "minimum"=3, "maximum"=80 })
	 * @ORM\Column(unique=true)
	 * @Flow\Identity
	 */
	protected $username;

	/**
	 * @var \Project\Helpiez\Domain\Model\Organisation
	 * @ORM\OneToOne(targetEntity="\Project\Helpiez\Domain\Model\Organisation", mappedBy="Review")
	 * @ORM\Column(nullable=true)
	 */
	protected $organisation;

	/**
	 * @var bool
	 * @ORM\Column(type="boolean")
	 */
	protected $incharge = false;

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
	 * @return boolean
	 */
	public function getIncharge() {
		return $this->incharge;
	}

	/**
	 * @param boolean $incharge
	 * @return void
	 */
	public function setIncharge($incharge) {
		$this->incharge = $incharge;
	}

}