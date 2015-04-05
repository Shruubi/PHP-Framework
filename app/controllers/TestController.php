<?php

namespace controllers;

use IvyStreet\Base\Controller\BaseController;
use IvyStreet\Container\DIContainer;

class TestController extends BaseController {
	public function index($params = null) {
		echo "hello world";

		$entityManager = DIContainer::getInstance()->getObject("entityManager");
	}

	public function withArgs($params = null) {
		var_dump($params);
	}
}