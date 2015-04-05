<?php

namespace IvyStreet\Container\Services;

use IvyStreet\Container\DIContainer;
use IvyStreet\Container\Services\Exceptions\UninitializedServiceContainerException;
use IvyStreet\Container\Services\Factory\ServiceContainerFactory;

class ServiceContainer {
	private static $instance;

	private $container;

	public static function getInstance() {
		if(ServiceContainer::$instance === null) {
			throw new UninitializedServiceContainerException('Service container must be initialized before usage');
		} else {
			return ServiceContainer::$instance;
		}
	}

	public static function initialize(ServiceContainerFactory $serviceContainerFactory) {
		ServiceContainer::$instance = new ServiceContainer($serviceContainerFactory);
	}

	private function __construct(ServiceContainerFactory $serviceContainerFactory) {
		$this->container = $serviceContainerFactory->getServicesMap();
	}

	public function getService($serviceName, DIContainer $container) {
		/**
		 * @var RegisteredService $registeredService
		 */
		$registeredService = $this->container[$serviceName];
		return $registeredService->fetch($container);
	}
}