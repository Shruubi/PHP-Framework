<?php

namespace IvyStreet\Repository\impl;

use Doctrine\ORM\EntityManager;
use IvyStreet\Repository\AbstractRepository;

class PackageRepository extends AbstractRepository {

	function __construct(EntityManager $entityManager) {
		parent::__construct($entityManager);
		$this->entityName = "Package";
	}

}