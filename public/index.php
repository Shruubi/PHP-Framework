<?php

//require the composer autoloader
require_once('../vendor/autoload.php');

//require the application autoloader
require_once('../src/IvyStreet/AutoLoader/AutoLoader.php');

//include the configuration
require_once('../config/config.php');

//load doctrine ORM
require_once('../src/IvyStreet/DB/bootstrap.php');

//instantiate autoloader
$autoloader = new \IvyStreet\AutoLoader\AutoLoader();

//register all autoload directories specified in the global config
foreach($autoload_dirs as $dir) {
	$autoloader->registerAutoloadDirectory($dir);
}

//begin autoloading as needed, from here on out we can include via namespaces
$autoloader->beginAutoload();

use IvyStreet\Container\DIContainer;
use IvyStreet\Container\Services\Factory\ServiceContainerFactory;
use IvyStreet\Router\Exceptions\UnmatchedRouteException;
use IvyStreet\Router\Route;
use IvyStreet\Router\Router;

//register top level directory in DI container
DIContainer::getInstance()->registerObject("homeDir", $HOMEPATH);
DIContainer::getInstance()->registerRepositories($REPOS);

//load the services auto-registrar
$serviceContainerFactory = new ServiceContainerFactory($SERVICES);
$serviceContainerFactory->register(DIContainer::getInstance());

//create our router
$router = new Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

//register each configured route
foreach($routes as $route) {
	$router->registerRoute(
		Route::buildRouteFromConfig($route)
	);
}

//try and match a route and call the appropriate controller/action, otherwise throw a 404 if the route doesn't exist
//on an unknown error we will throw a 500
try {
	$route = $router->getRoute();
	$route->call();
} catch (UnmatchedRouteException $umre) {
	header("HTTP/1.0 404 Not Found - Archive Empty");
	echo "404";
} catch(Exception $e) {
	header("HTTP/1.1 500 Internal Server Error");
	echo "500";
}