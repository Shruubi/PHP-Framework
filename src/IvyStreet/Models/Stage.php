<?php

namespace IvyStreet\Models;

use IvyStreet\Base\Model\BaseModel;

/**
 * Class Stage
 * @package IvyStreet\Models
 * @Entity
 * @Table(name="stages")
 */
class Stage extends BaseModel {

	/**
	 * @var string
	 * @Column(type="string")
	 */
	private $name;

	/**
	 * @var string
	 * @Column(type="string")
	 */
	private $stageplanImg;

	/**
	 * @var string
	 * @Column(type="string")
	 */
	private $stageplanFlyer;

	/**
	 * @var string
	 * @Column(type="string")
	 */
	private $stageplanCoords;

	/**
	 * @var string
	 * @Column(type="string")
	 */
	private $stageplanCenter;

	/**
	 * @var string
	 * @Column(type="boolean")
	 */
	private $enabled;

	/**
	 * @var array
	 */
	private $lots;

	function __construct($name, $stageplanImg, $stageplanFlyer, $stageplanCoords, $stageplanCenter, $enabled) {
		$this->name = $name;
		$this->stageplanImg = $stageplanImg;
		$this->stageplanFlyer = $stageplanFlyer;
		$this->stageplanCoords = $stageplanCoords;
		$this->stageplanCenter = $stageplanCenter;
		$this->enabled = $enabled;
		$this->lots = array();
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
	public function getStageplanImg() {
		return $this->stageplanImg;
	}

	/**
	 * @param string $stageplanImg
	 */
	public function setStageplanImg($stageplanImg) {
		$this->stageplanImg = $stageplanImg;
	}

	/**
	 * @return string
	 */
	public function getStageplanFlyer() {
		return $this->stageplanFlyer;
	}

	/**
	 * @param string $stageplanFlyer
	 */
	public function setStageplanFlyer($stageplanFlyer) {
		$this->stageplanFlyer = $stageplanFlyer;
	}

	/**
	 * @return string
	 */
	public function getStageplanCoords() {
		return $this->stageplanCoords;
	}

	/**
	 * @param string $stageplanCoords
	 */
	public function setStageplanCoords($stageplanCoords) {
		$this->stageplanCoords = $stageplanCoords;
	}

	/**
	 * @return string
	 */
	public function getStageplanCenter() {
		return $this->stageplanCenter;
	}

	/**
	 * @param string $stageplanCenter
	 */
	public function setStageplanCenter($stageplanCenter) {
		$this->stageplanCenter = $stageplanCenter;
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
	 * @return array
	 */
	public function getLots() {
		return $this->lots;
	}

	/**
	 * @param array $lots
	 */
	public function setLots($lots) {
		$this->lots = $lots;
	}
}