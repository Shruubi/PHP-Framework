<?php

namespace IvyStreet\Router;

use IvyStreet\Router\Exceptions\ParameterMismatchException;

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

		$args = $this->parseArguments();
		$controllerObject->$action($args);
	}

	/**
	 * @return array
	 */
	private function parseArguments() {
		$result = array();

		//refactor this later to not reference a global?
		preg_match($this->path, $_SERVER['REQUEST_URI'], $matches);

		if(count($this->params) > 0 && count($matches) > 1) {
			$paramValues = $this->extractParamValuesFromRegexMatch($matches);

			for ($i = 0; $i < count($this->params); $i++) {
				$result[$this->params[$i]] = $paramValues[$i];
			}

			$unnamed = array_slice($paramValues, count($result));
			$result["unnamed"] = $unnamed;
		}

		return $result;
	}

	/**
	 * @param $matches
	 * @return array
	 */
	private function extractParamValuesFromRegexMatch($matches) {
		$paramMatch = $matches[1];
		$paramValues = array_slice(explode('/', $paramMatch), 1);
		return $paramValues;
	}
}