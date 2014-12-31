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
class Organisation {

	/**
	 * @var string
	 * @ORM\Column(type="string", length=100, unique=true)
	 */
	protected $name;

	/**
	 * @var string
	 * @ORM\Column(type="text", length=1000, nullable=true)
	 */
	protected $address;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	protected $region;

	/**
	 * @var int
	 * @ORM\Column(type="bigint", length=10, nullable=true)
	 */
	protected $number;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	protected $website;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	protected $email;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	protected $youtube;

	/**
	 * @var string
	 * @ORM\Column(type="text", length=10000, nullable=true)
	 */
	protected $description;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	protected $fb;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	protected $blogurl;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	protected $twitter;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	protected $cause;

	/**
	 * @var string
	 * @ORM\Column(type="text", length=500, nullable=true)
	 */
	protected $beneficiary;

	/**
	 * @var string
	 * @ORM\Column(type="text", length=500, nullable=true)
	 */
	protected $quote;

	/**
	 * @var int
	 * @ORM\Column(type="integer", nullable=true)
	 */
	protected $pageViews;

	/**
	 * @var bool
	 * @ORM\Column(type="boolean")
	 */
	protected $status = false;

	/**
	 * @var \DateTime
	 */
	protected $timestamp;

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
	public function setTimestamp($timestamp = null) {
		if($timestamp != null)
			$this->timestamp = $timestamp;
		else
			$this->timestamp = new \DateTime();
	}

	/**
	 * @ORM\PrePersist
	 * @ORM\PreUpdate
	 */
	public function updatedTimestamps() {
		$this->setTimestamp(new \DateTime('now'));
	}


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
	public function getAddress() {
		return $this->address;
	}

	/**
	 * @param string $address
	 * @return void
	 */
	public function setAddress($address) {
		$this->address = $address;
	}

	/**
	 * @return string
	 */
	public function getRegion() {
		return $this->region;
	}

	/**
	 * @param string $region
	 * @return void
	 */
	public function setRegion($region) {
		$this->region = $region;
	}

	/**
	 * @return integer
	 */
	public function getNumber() {
		return $this->number;
	}

	/**
	 * @param integer $number
	 * @return void
	 */
	public function setNumber($number) {
		$this->number = $number;
	}

	/**
	 * @return string
	 */
	public function getWebsite() {
		return $this->website;
	}

	/**
	 * @param string $website
	 * @return void
	 */
	public function setWebsite($website) {
		$this->website = $website;
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
	public function getYoutube() {
		return $this->youtube;
	}

	/**
	 * @param string $youtube
	 * @return void
	 */
	public function setYoutube($youtube) {
		$this->youtube = $youtube;
	}

	/**
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * @return string
	 */
	public function getFb() {
		return $this->fb;
	}

	/**
	 * @param string $fb
	 * @return void
	 */
	public function setFb($fb) {
		$this->fb = $fb;
	}

	/**
	 * @return string
	 */
	public function getBlogurl() {
		return $this->blogurl;
	}

	/**
	 * @param string $blogurl
	 * @return void
	 */
	public function setBlogurl($blogurl) {
		$this->blogurl = $blogurl;
	}

	/**
	 * @return string
	 */
	public function getTwitter() {
		return $this->twitter;
	}

	/**
	 * @param string $twitter
	 * @return void
	 */
	public function setTwitter($twitter) {
		$this->twitter = $twitter;
	}

	/**
	 * @return string
	 */
	public function getCause() {
		return $this->cause;
	}

	/**
	 * @param string $cause
	 * @return void
	 */
	public function setCause($cause) {
		$this->cause = $cause;
	}

	/**
	 * @return string
	 */
	public function getBeneficiary() {
		return $this->beneficiary;
	}

	/**
	 * @param string $beneficiary
	 * @return void
	 */
	public function setBeneficiary($beneficiary) {
		$this->beneficiary = $beneficiary;
	}

	/**
	 * @return string
	 */
	public function getQuote() {
		return $this->quote;
	}

	/**
	 * @param string $quote
	 * @return void
	 */
	public function setQuote($quote) {
		$this->quote = $quote;
	}

	/**
	 * @return integer
	 */
	public function getPageViews() {
		return $this->pageViews;
	}

	/**
	 * @param integer $pageViews
	 * @return void
	 */
	public function setPageViews($pageViews) {
		$this->pageViews = $pageViews;
	}

	/**
	 * @return integer
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @param integer $status
	 * @return void
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

}