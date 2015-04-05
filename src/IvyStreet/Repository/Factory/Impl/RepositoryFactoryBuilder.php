<?php

namespace IvyStreet\Repository\Factory\Impl;

use IvyStreet\Repository\Factory\RepositoryFactory;

class RepositoryFactoryBuilder {

	/**
	 * @var array
	 */
	private $registeredRepositories;

	/**
	 * @return RepositoryFactoryBuilder
	 */
	public static function getBuilder() {
		return new RepositoryFactoryBuilder();
	}

	function __construct() {
		$this->registeredRepositories = array();
	}

	/**
	 * @param string $name
	 * @param object $obj
	 * @return RepositoryFactoryBuilder
	 */
	public function registerRepository($name, $obj) {
		$this->registeredRepositories[$name] = $obj;
		return $this;
	}

	/**
	 * @return RepositoryFactory
	 */
	public function build() {
		return new RepositoryFactoryImpl($this->registeredRepositories);
	}
}