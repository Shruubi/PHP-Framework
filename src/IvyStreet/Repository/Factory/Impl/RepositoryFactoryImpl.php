<?php

namespace IvyStreet\Repository\Factory\Impl;

use IvyStreet\Container\DIContainer;
use IvyStreet\Repository\Factory\RepositoryFactory;

class RepositoryFactoryImpl implements RepositoryFactory {

	private $repos;

	function __construct(array $registeredRepositories) {
		$this->repos = $registeredRepositories;
	}

	public function registerWithDIContainer(DIContainer &$container) {
		foreach($this->repos as $name => $obj) {
			$container->registerObject($name, $obj);
		}
	}
}