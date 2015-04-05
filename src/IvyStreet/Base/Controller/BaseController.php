<?php

namespace IvyStreet\Base\Controller;


use IvyStreet\Container\DIContainer;

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

	/**
	 * @param string $viewName
	 * @param string $templateName
	 * @param array $vars
	 */
	protected function render($viewName, $templateName = null, $vars = null) {
		$HOME = DIContainer::getInstance()->getObject("homeDir");

		$renderPartial = function($partialName) use($HOME) {
			include_once($HOME . 'app/partials/' . $partialName . '.php');
		};

		if($templateName === null) {
			extract($vars, EXTR_SKIP);
			include_once($HOME . 'app/views/' . $viewName . '.php');
		} else {
			$renderBody = function() use ($viewName, $HOME, $vars, $renderPartial) {
				extract($vars, EXTR_SKIP);
				include_once($HOME . 'app/views/' . $viewName . '.php');
			};

			include_once($HOME . 'app/views/' . $templateName . '.php');
		}
	}
}