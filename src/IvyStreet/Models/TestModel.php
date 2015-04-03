<?php

namespace IvyStreet\Models;

use IvyStreet\Base\Model\BaseModel;

/**
 * Class TestModel
 * @package IvyStreet\Models
 * @Entity
 * @Table(name="test_model")
 */
class TestModel extends BaseModel {

	/**
	 * @var string
	 * @Column(type="string")
	 */
	protected $name;

	function __construct($name) {
		$this->name = $name;
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


}