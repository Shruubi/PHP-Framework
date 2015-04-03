<?php

/**
 * path - a regex for matching the path
 * controller - the namespace-included name of the controller to call for the matched path
 * action - the method on the controller to call
 * params - a hash which will name each param in the supplied order
 */

$routes = array(
	array(
		'path' => '/^(?:\/)$/',
		'controller' => 'controllers\\TestController',
		'action' => 'index',
		'params' => array()
	)
);