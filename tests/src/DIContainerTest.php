<?php

namespace src;

use IvyStreet\Container\DIContainer;

class DIContainerTest extends \PHPUnit_Framework_TestCase {

	public function testDIContainerInstantiates() {
		$this->assertNotNull(DIContainer::getInstance());
	}

	public function testCanRegisterObject() {
		$stub = $this->getMockBuilder('ExampleClass')->getMock();
		DIContainer::getInstance()->registerObject("testObj", $stub);
		$this->assertTrue(DIContainer::getInstance()->containsObject("testObj"));
	}
}
