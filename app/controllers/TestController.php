<?php

namespace controllers;

use IvyStreet\Base\Controller\BaseController;

class TestController extends BaseController {
	public function index($params = null) {
		$this->render('index', 'template');
	}

	public function withArgs($params = null) {
		var_dump($params);
	}
}