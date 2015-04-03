<?php

namespace IvyStreet\AutoLoader;

class AutoLoader {

	/**
	 * @var array
	 */
	private $autoloadDirectories;

	private $BASE_DIR;

	function __construct($baseDir = null) {
		$this->autoloadDirectories = array();

		if($baseDir === null) {
			$this->BASE_DIR = dirname(__FILE__) . "/../../../";
		} else {
			$this->BASE_DIR = $baseDir;
		}
	}

	/**
	 * @param string $dir
	 */
	public function registerAutoloadDirectory($dir) {
		$this->autoloadDirectories[] = $dir;
	}

	public function beginAutoload() {
		$ref = $this;

		foreach($this->autoloadDirectories as $dir) {
			spl_autoload_register(function($class) use ($ref, $dir) {
				$ref->autoload($dir, $class);
			});
		}
	}

	private function autoload($dir, $class) {
		require_once($this->BASE_DIR . $dir . str_replace("\\", "/", $class) . ".php");
	}
}