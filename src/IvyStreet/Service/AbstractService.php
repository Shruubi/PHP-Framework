<?php

namespace IvyStreet\Service;

class AbstractService {

	protected $repository;

	function __construct($repository) {
		$this->repository = $repository;
	}
}