<?php

namespace IvyStreet\Repository\Impl;

use Doctrine\ORM\EntityManager;
use IvyStreet\Repository\AbstractRepository;

class NewsRepository extends AbstractRepository {
	function __construct(EntityManager $entityManager) {
		parent::__construct($entityManager);
		$this->entityName = "News";
	}

}