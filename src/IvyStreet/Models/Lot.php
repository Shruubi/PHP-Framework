<?php

namespace IvyStreet\Models;

use IvyStreet\Base\Model\BaseModel;

/**
 * Class Lot
 * @package IvyStreet\Models
 * @Entity
 * @Table(name="lots")
 */
class Lot extends BaseModel {

	/**
	 * @var string
	 * @Column(type="string")
	 */
	private $lotNum;

	/**
	 * @var string
	 * @Column(type="integer")
	 */
	private $lotSize;

	/**
	 * @var string
	 * @Column(type="float")
	 */
	private $lotFrontage;

	/**
	 * @var string
	 * @Column(type="string")
	 */
	private $lotCoords;

	/**
	 * @var string
	 * @Column(type="string")
	 */
	private $lotCenter;

	/**
	 * @var string
	 * @Column(type="integer")
	 */
	private $status;

	/**
	 * @var Stage
	 * @ManyToOne(targetEntity="Stage", inversedBy="lots")
	 **/
	private $stage;

	/**
	 * @var array
	 */
	private $packages;

	function __construct($lotNum, $lotSize, $lotFrontage, $lotCoords, $lotCenter, $status, $stage) {
		$this->lotNum = $lotNum;
		$this->lotSize = $lotSize;
		$this->lotFrontage = $lotFrontage;
		$this->lotCoords = $lotCoords;
		$this->lotCenter = $lotCenter;
		$this->status = $status;
		$this->stage = $stage;
		$this->packages = array();
	}

	/**
	 * @return string
	 */
	public function getLotNum() {
		return $this->lotNum;
	}

	/**
	 * @param string $lotNum
	 */
	public function setLotNum($lotNum) {
		$this->lotNum = $lotNum;
	}

	/**
	 * @return string
	 */
	public function getLotSize() {
		return $this->lotSize;
	}

	/**
	 * @param string $lotSize
	 */
	public function setLotSize($lotSize) {
		$this->lotSize = $lotSize;
	}

	/**
	 * @return string
	 */
	public function getLotFrontage() {
		return $this->lotFrontage;
	}

	/**
	 * @param string $lotFrontage
	 */
	public function setLotFrontage($lotFrontage) {
		$this->lotFrontage = $lotFrontage;
	}

	/**
	 * @return string
	 */
	public function getLotCoords() {
		return $this->lotCoords;
	}

	/**
	 * @param string $lotCoords
	 */
	public function setLotCoords($lotCoords) {
		$this->lotCoords = $lotCoords;
	}

	/**
	 * @return string
	 */
	public function getLotCenter() {
		return $this->lotCenter;
	}

	/**
	 * @param string $lotCenter
	 */
	public function setLotCenter($lotCenter) {
		$this->lotCenter = $lotCenter;
	}

	/**
	 * @return string
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * @return mixed
	 */
	public function getStage() {
		return $this->stage;
	}

	/**
	 * @param mixed $stage
	 */
	public function setStage($stage) {
		$this->stage = $stage;
	}

	/**
	 * @return array
	 */
	public function getPackages() {
		return $this->packages;
	}

	/**
	 * @param array $packages
	 */
	public function setPackages($packages) {
		$this->packages = $packages;
	}
}