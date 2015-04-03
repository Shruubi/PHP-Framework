<?php

namespace IvyStreet\Models;
use IvyStreet\Base\Model\BaseModel;

/**
 * Class Package
 * @package IvyStreet\Models
 * @Entity
 * @Table(name="packages")
 */
class Package extends BaseModel {

	/**
	 * @var string
	 * @Column(type="string")
	 */
	private $name;

	/**
	 * @var string
	 * @Column(type="integer")
	 */
	private $price;

	/**
	 * @var string
	 * @Column(type="integer")
	 */
	private $bedrooms;

	/**
	 * @var string
	 * @Column(type="integer")
	 */
	private $bathrooms;

	/**
	 * @var string
	 * @Column(type="integer")
	 */
	private $garage;

	/**
	 * @var string
	 * @Column(type="string")
	 */
	private $facadeImg;

	/**
	 * @var string
	 * @Column(type="string")
	 */
	private $floorplanImg;

	/**
	 * @var Lot
	 * @ManyToOne(targetEntity="Lot", inversedBy="packages")
	 */
	private $lot;

	/**
	 * @var string
	 * @ManyToOne(targetEntity="Builder", inversedBy="packages")
	 */
	private $builder;

	/**
	 * @var string
	 * @Column(type="boolean")
	 */
	private $enabled;

	function __construct($name, $price, $bedrooms, $bathrooms, $garage, $facadeImg, $floorplanImg, $lot, $builder, $enabled) {
		$this->name = $name;
		$this->price = $price;
		$this->bedrooms = $bedrooms;
		$this->bathrooms = $bathrooms;
		$this->garage = $garage;
		$this->facadeImg = $facadeImg;
		$this->floorplanImg = $floorplanImg;
		$this->lot = $lot;
		$this->builder = $builder;
		$this->enabled = $enabled;
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
	public function getPrice() {
		return $this->price;
	}

	/**
	 * @param string $price
	 */
	public function setPrice($price) {
		$this->price = $price;
	}

	/**
	 * @return string
	 */
	public function getBedrooms() {
		return $this->bedrooms;
	}

	/**
	 * @param string $bedrooms
	 */
	public function setBedrooms($bedrooms) {
		$this->bedrooms = $bedrooms;
	}

	/**
	 * @return string
	 */
	public function getBathrooms() {
		return $this->bathrooms;
	}

	/**
	 * @param string $bathrooms
	 */
	public function setBathrooms($bathrooms) {
		$this->bathrooms = $bathrooms;
	}

	/**
	 * @return string
	 */
	public function getGarage() {
		return $this->garage;
	}

	/**
	 * @param string $garage
	 */
	public function setGarage($garage) {
		$this->garage = $garage;
	}

	/**
	 * @return string
	 */
	public function getFacadeImg() {
		return $this->facadeImg;
	}

	/**
	 * @param string $facadeImg
	 */
	public function setFacadeImg($facadeImg) {
		$this->facadeImg = $facadeImg;
	}

	/**
	 * @return string
	 */
	public function getFloorplanImg() {
		return $this->floorplanImg;
	}

	/**
	 * @param string $floorplanImg
	 */
	public function setFloorplanImg($floorplanImg) {
		$this->floorplanImg = $floorplanImg;
	}

	/**
	 * @return string
	 */
	public function getLot() {
		return $this->lot;
	}

	/**
	 * @param string $lot
	 */
	public function setLot($lot) {
		$this->lot = $lot;
	}

	/**
	 * @return string
	 */
	public function getBuilder() {
		return $this->builder;
	}

	/**
	 * @param string $builder
	 */
	public function setBuilder($builder) {
		$this->builder = $builder;
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


}