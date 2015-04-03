<?php

namespace IvyStreet\Router;


class Route {

	/**
	 * @var string
	 */
	private $path;

	/**
	 * @var string
	 */
	private $controller;

	/**
	 * @var string
	 */
	private $action;

	/**
	 * @var array
	 */
	private $params;

	/**
	 * @param array $configArray
	 * @return Route
	 */
	public static function buildRouteFromConfig(array $configArray) {
		return new Route(
			$configArray['path'],
			$configArray['controller'],
			$configArray['action'],
			$configArray['params']
		);
	}

	/**
	 * @param string $path
	 * @param string $controller
	 * @param string $action
	 * @param array $params
	 */
	function __construct($path, $controller, $action, $params) {
		$this->path = $path;
		$this->controller = $controller;
		$this->action = $action;
		$this->params = $params;
	}

	/**
	 * @return string
	 */
	public function getPath() {
		return $this->path;
	}

	/**
	 * @return string
	 */
	public function getController() {
		return $this->controller;
	}

	/**
	 * @return string
	 */
	public function getAction() {
		return $this->action;
	}

	/**
	 * @return array
	 */
	public function getParams() {
		return $this->params;
	}

	public function call() {
		$controller = $this->controller;
		$action = $this->action;

		$controllerObject = new $controller();
		$controllerObject->$action();
	}
}