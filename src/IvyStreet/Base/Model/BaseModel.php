<?php

namespace IvyStreet\Base\Model;

/**
 * Class BaseModel
 * @package IvyStreet\Base\Model
 */
class BaseModel {

	/**
	 * @var int
	 * @Id @Column(type="integer") @GeneratedValue
	 */
	protected $id;

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}
}