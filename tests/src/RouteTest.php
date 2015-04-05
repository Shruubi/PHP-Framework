<?php

namespace src;

use IvyStreet\Router\Route;

class RouteTest extends \PHPUnit_Framework_TestCase {
	private $testConfig = array(
		'path' => '			/^\/hello(\/.*)*?$/',
		'controller' => 	'controllers\\TestController',
		'action' => 		'withArgs',
		'params' => 		array(
								'arg1',
								'arg2'
							)
		);

	protected function setUp() {
		$_SERVER['REQUEST_URI'] = "/hello/world/from/bob/dole";
	}


	public function testBuildRouteFromConfig() {
		$route = Route::buildRouteFromConfig($this->testConfig);
		$this->assertNotNull($route);

		$this->assertEquals($this->testConfig['path'], $route->getPath());
	}

	public function testParseArguments() {
		$route = Route::buildRouteFromConfig($this->testConfig);
		$this->assertTrue($route->call());
	}

	
}
