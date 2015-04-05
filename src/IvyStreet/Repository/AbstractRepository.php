<?php

namespace IvyStreet\Repository;

use Doctrine\ORM\EntityManager;

abstract class AbstractRepository {

	/**
	 * @var EntityManager
	 */
	protected $entityManager;

	/**
	 * @var string
	 */
	protected $entityName;

	/**
	 * @param EntityManager $entityManager
	 */
	function __construct(EntityManager $entityManager) {
		$this->entityManager = $entityManager;
	}

	/**
	 * @param integer $id
	 * @return null|object
	 * @throws \Doctrine\ORM\ORMException
	 * @throws \Doctrine\ORM\OptimisticLockException
	 * @throws \Doctrine\ORM\TransactionRequiredException
	 */
	public function findById($id) {
		return $this->entityManager->find($this->entityName, $id);
	}

	/**
	 * @param object $obj
	 */
	public function update($obj) {
		$this->entityManager->persist($obj);
		$this->entityManager->flush();
	}

	/**
	 * @param object $obj
	 */
	public function save($obj) {
		$this->entityManager->persist($obj);
		$this->entityManager->flush();
	}

	/**
	 * @param object $obj
	 */
	public function delete($obj) {
		$this->entityManager->remove($obj);
		$this->entityManager->flush();
	}
}