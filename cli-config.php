<?php

/**
 * DO NOT REMOVE - this is required for the doctrine CLI utility
 */

//include the configuration
require_once('config/config.php');

//load doctrine ORM
require_once('src/IvyStreet/DB/bootstrap.php');

//init
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);