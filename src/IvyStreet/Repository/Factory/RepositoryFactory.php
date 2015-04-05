<?php

namespace IvyStreet\Repository\Factory;

use IvyStreet\Container\DIContainer;

interface RepositoryFactory {
	public function registerWithDIContainer(DIContainer &$container);
}