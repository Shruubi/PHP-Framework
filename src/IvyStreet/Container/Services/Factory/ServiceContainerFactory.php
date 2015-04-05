<?php

namespace IvyStreet\Container\Services\Factory;

use IvyStreet\Container\Services\RegisteredService;
use IvyStreet\Container\Services\ServiceContainer;

class ServiceContainerFactory {

	private $servicesConfig;

	private $servicesMap;

	function __construct($servicesConfig) {
		$this->servicesConfig = $servicesConfig;
		$this->services = array();
	}

	public function register() {
		foreach ($this->servicesConfig as $config) {
			$this->servicesMap[$config['name']] = new RegisteredService(
				$config['name'],
				$config['class'],
				$config['registeredRepository']
			);
		}

		ServiceContainer::initialize($this);
	}

	/**
	 * @return array
	 */
	public function getServicesMap() {
		return $this->servicesMap;
	}


}