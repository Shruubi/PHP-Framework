<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use IvyStreet\Container\DIContainer;

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array($HOMEPATH . "/src"), $isDevMode);

// database configuration parameters
$conn = array(
	'driver'   => 'pdo_mysql',
	'host'     => $DB_HOST,
	'port'     => $DB_PORT,
	'user'     => $DB_USER,
	'password' => $DB_PASS,
	'dbname'   => $DB_DB,
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);

DIContainer::getInstance()->registerObject("entityManager", $entityManager);