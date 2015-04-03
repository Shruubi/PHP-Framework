<?php

namespace IvyStreet\Models;
use IvyStreet\Base\Model\BaseModel;

/**
 * Class Builder
 * @package IvyStreet\Models
 * @Entity
 * @Table(name="builders")
 */
class Builder extends BaseModel {

	/**
	 * @var string
	 * @Column(type="string")
	 */
	private $name;

	/**
	 * @var string
	 * @Column(type="string")
	 */
	private $builderLogo;

	/**
	 * @var string
	 * @Column(type="string")
	 */
	private $contactName;

	/**
	 * @var string
	 * @Column(type="string")
	 */
	private $contactPhone;

	/**
	 * @var string
	 * @Column(type="string")
	 */
	private $contactEmail;

	/**
	 * @var string
	 * @Column(type="boolean")
	 */
	private $enabled;

	/**
	 * @var array
	 */
	private $packages;

	function __construct($name, $builderLogo, $contactName, $contactPhone, $contactEmail, $enabled) {
		$this->name = $name;
		$this->builderLogo = $builderLogo;
		$this->contactName = $contactName;
		$this->contactPhone = $contactPhone;
		$this->contactEmail = $contactEmail;
		$this->enabled = $enabled;
		$this->packages = array();
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getBuilderLogo() {
		return $this->builderLogo;
	}

	/**
	 * @param string $builderLogo
	 */
	public function setBuilderLogo($builderLogo) {
		$this->builderLogo = $builderLogo;
	}

	/**
	 * @return string
	 */
	public function getContactName() {
		return $this->contactName;
	}

	/**
	 * @param string $contactName
	 */
	public function setContactName($contactName) {
		$this->contactName = $contactName;
	}

	/**
	 * @return string
	 */
	public function getContactPhone() {
		return $this->contactPhone;
	}

	/**
	 * @param string $contactPhone
	 */
	public function setContactPhone($contactPhone) {
		$this->contactPhone = $contactPhone;
	}

	/**
	 * @return string
	 */
	public function getContactEmail() {
		return $this->contactEmail;
	}

	/**
	 * @param string $contactEmail
	 */
	public function setContactEmail($contactEmail) {
		$this->contactEmail = $contactEmail;
	}

	/**
	 * @return string
	 */
	public function getEnabled() {
		return $this->enabled;
	}

	/**
	 * @param string $enabled
	 */
	public function setEnabled($enabled) {
		$this->enabled = $enabled;
	}

	/**
	 * @return mixed
	 */
	public function getPackages() {
		return $this->packages;
	}

	/**
	 * @param mixed $packages
	 */
	public function setPackages($packages) {
		$this->packages = $packages;
	}


}