<?php

namespace src;

use IvyStreet\Router\Route;
use IvyStreet\Router\Router;
use IvyStreet\Router\Exceptions\UnmatchedRouteException;

class RouterTest extends \PHPUnit_Framework_TestCase {
	private $testConfig = array(
		'path' => '			/^\/hello(\/.*)*?$/',
		'controller' => 	'controllers\\TestController',
		'action' => 		'withArgs',
		'params' => 		array(
			'arg1',
			'arg2'
		)
	);

	private $testConfigFailure = array(
		'path' => '			/^\/failure$/',
		'controller' => 	'controllers\\TestController',
		'action' => 		'withArgs',
		'params' => 		array(
			'arg1',
			'arg2'
		)
	);

	protected function setUp() {
		$_SERVER['REQUEST_URI'] = "/hello/world/from/bob/dole";
		$_SERVER['REQUEST_METHOD'] = "GET";
	}

	public function testRouterConstruction() {
		$router = new Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
		$this->assertNotNull($router);
		$this->assertEquals($_SERVER['REQUEST_URI'], $router->getRequestUri());
	}

	public function testRegisterRoute() {
		$router = new Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
		$router->registerRoute(Route::buildRouteFromConfig($this->testConfig));
		$this->assertEquals(1, $router->getNumberOfRoutes());
	}

	public function testGetRoute() {
		$router = new Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
		$router->registerRoute(Route::buildRouteFromConfig($this->testConfig));
		$route = $router->getRoute();
		$this->assertEquals($this->testConfig['controller'], $route->getController());
	}

	public function testGetRouteThrowsException() {
		try {
			$router = new Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
			$router->registerRoute(Route::buildRouteFromConfig($this->testConfigFailure));

			$route = $router->getRoute();
			$this->fail("exception expected");
		} catch(UnmatchedRouteException $e) {
			assertEquals($e->getCode(), $e->getCode());
		}
	}
}
