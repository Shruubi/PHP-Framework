<?php

namespace IvyStreet\Router;


use IvyStreet\Router\Exceptions\UnmatchedRouteException;

class Router {

	/**
	 * @var array
	 */
	private $routes;

	/**
	 * @var string
	 */
	private $requestUri;

	/**
	 * @var string
	 */
	private $requestMethod;

	/**
	 * @param string $requestUri
	 * @param string $requestMethod
	 */
	function __construct($requestUri, $requestMethod) {
		$this->routes = array();

		$this->requestUri = $requestUri;
		$this->requestMethod = $requestMethod;
	}

	/**
	 * @param Route $route
	 */
	public function registerRoute(Route $route) {
		$this->routes[] = $route;
	}

	/**
	 * @return Route
	 * @throws UnmatchedRouteException
	 */
	public function getRoute() {
		foreach ($this->routes as $route) {
			/** @var Route $route */
			if(preg_match($route->getPath(), $this->requestUri)) {
				return $route;
			}
		}

		//if no match is found then throw an exception
		throw new UnmatchedRouteException("could not match request URI with a configured route.");
	}
}