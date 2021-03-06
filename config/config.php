<?php

/**
 * 0 = dev
 * 1 = staging
 * 2 = production
 */
$MODE = 0;

$HOMEPATH = dirname(__FILE__) . "/../";

if($MODE === 0) {
	require_once('dev/db-config.php');
} else if($MODE === 1) {
	require_once('staging/db-config.php');
} else if($MODE === 2) {
	require_once('production/db-config.php');
}

//add directories to be registered for autoloading
$autoload_dirs = array(
	'app/',
	'src/'
);

//load in the routes config file
require_once('routes.php');

//load in DI config
require_once('repos.php');
require_once('services.php');