<?php

/**
 * path - a regex for matching the path
 * controller - the namespace-included name of the controller to call for the matched path
 * action - the method on the controller to call
 * params - a hash which will name each param in the supplied order
 */

$HOME_ROUTE = '/^(?:\/)$/';
$PARAMS = '(\/.*)*?';

$routes = array(
	array(
		'path' => $HOME_ROUTE,
		'controller' => 'controllers\\TestController',
		'action' => 'index',
		'params' => array()
	),
	array(
		'path' => '/^\/hello'.$PARAMS.'$/',
		'controller' => 'controllers\\TestController',
		'action' => 'withArgs',
		'params' => array(
			'arg1',
			'arg2'
		)
	)
);