<?php

namespace IvyStreet\Container\Services;

use IvyStreet\Container\DIContainer;

class RegisteredService {

	private $name;

	private $class;

	private $registeredRepository;

	function __construct($name, $class, $registeredRepository) {
		$this->name = $name;
		$this->class = $class;
		$this->registeredRepository = $registeredRepository;
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return mixed
	 */
	public function getClass() {
		return $this->class;
	}

	/**
	 * @return mixed
	 */
	public function getRegisteredRepository() {
		return $this->registeredRepository;
	}

	public function fetch(DIContainer $container) {
		$class = $this->getClass();
		$repo = $container->getObject($this->getRegisteredRepository());

		return new $class($repo);
	}
}