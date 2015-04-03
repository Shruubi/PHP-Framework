<?php

namespace IvyStreet\Container;


class DIContainer {

	/**
	 * @var DIContainer
	 */
	private static $instance;

	/**
	 * @var array
	 */
	private $containerHash;

	public static function getInstance() {
		if(DIContainer::$instance === null) {
			DIContainer::$instance = new DIContainer();
		}

		return DIContainer::$instance;
	}

	function __construct() {
		$this->containerHash = array();
	}

	/**
	 * @param string $name
	 * @param mixed $object
	 */
	public function registerObject($name, $object) {
		$this->containerHash[$name] = $object;
	}

	/**
	 * @param string $name
	 * @return mixed
	 */
	public function getObject($name) {
		return $this->containerHash[$name];
	}
}