<?php

namespace controllers;

use IvyStreet\Base\Controller\BaseController;
use IvyStreet\Container\DIContainer;
use IvyStreet\Container\Services\ServiceContainer;

class TestController extends BaseController {
	public function index($params = null) {

		$packageService = ServiceContainer::getInstance()->getService("packageService", DIContainer::getInstance());

		$this->render('index', 'template', array("service" => $packageService));
	}

	public function withArgs($params = null) {
		var_dump($params);
	}
}