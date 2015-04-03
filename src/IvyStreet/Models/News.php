<?php

namespace IvyStreet\Models;

use IvyStreet\Base\Model\BaseModel;

/**
 * Class News
 * @package IvyStreet\Models
 * @Entity
 * @Table(name="news")
 */
class News extends BaseModel {

	/**
	 * @var string
	 * @Column(type="string")
	 */
	private $title;

	/**
	 * @var string
	 * @Column(type="string")
	 */
	private $publisher;

	/**
	 * @var string
	 * @Column(type="date")
	 */
	private $date;

	/**
	 * @var string
	 * @Column(type="string")
	 */
	private $articleImg;

	/**
	 * @var string
	 * @Column(type="string")
	 */
	private $articlePdf;

	/**
	 * @var string
	 * @Column(type="string")
	 */
	private $articleCopy;

	/**
	 * @var int
	 * @Column(type="boolean")
	 */
	private $enabled;
}