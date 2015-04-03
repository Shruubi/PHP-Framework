<?php

namespace IvyStreet\Base\Controller;


class BaseController {

	/**
	 * @var array
	 */
	protected $params;

	/**
	 * @param array $params
	 */
	function __construct($params = null) {
		$this->params = $params;
	}
}