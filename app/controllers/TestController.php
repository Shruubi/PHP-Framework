<?php

namespace controllers;

use IvyStreet\Base\Controller\BaseController;
use IvyStreet\Container\DIContainer;

class TestController extends BaseController {
	public function index() {
		echo "hello world";

		$entityManager = DIContainer::getInstance()->getObject("entityManager");
	}
}