<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) Bastian Waidelich 2012
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * A book
 */
class Tx_Books_Domain_Model_Book extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * @var string
	 */
	protected $author;

	/**
	 * @var string
	 */
	protected $excerpt;

	/**
	 * @var string
	 */
	protected $cover;

	/**
	 * @var Tx_Books_Domain_Model_Category
	 */
	protected $category;

	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Books_Domain_Model_Tag>
	 */
	protected $tags;

	/**
	 * Constructs a book object and initializes required properties
	 */
	public function __construct() {
		$this->tags = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * @param string $author
	 */
	public function setAuthor($author) {
		$this->author = $author;
	}

	/**
	 * @return string
	 */
	public function getAuthor() {
		return $this->author;
	}

	/**
	 * @return string
	 */
	public function getExcerpt() {
		return $this->excerpt;
	}

	/**
	 * @param string $excerpt
	 * @return void
	 */
	public function setExcerpt($excerpt) {
		$this->excerpt = $excerpt;
	}

	/**
	 * @return string
	 */
	public function getCover() {
		return $this->cover;
	}

	/**
	 * @param string $cover
	 * @return void
	 */
	public function setCover($cover) {
		$this->cover = $cover;
	}

	/**
	 * @return Tx_Books_Domain_Model_Category $category
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * @param Tx_Books_Domain_Model_Category $category
	 * @return void
	 */
	public function setCategory(Tx_Books_Domain_Model_Category $category) {
		$this->category = $category;
	}

	/**
	 * @return Tx_Extbase_Persistence_ObjectStorage A storage holding Tx_Books_Domain_Model_Tag objects
	 */
	public function getTags() {
		return $this->tags;
	}

	/**
	 * @param Tx_Extbase_Persistence_ObjectStorage $tags One or more Tx_Books_Domain_Model_Tag objects
	 * @return void
	 */
	public function setTags(Tx_Extbase_Persistence_ObjectStorage $tags) {
		$this->tags = $tags;
	}

	/**
	 * @param Tx_Books_Domain_Model_Tag $tag
	 * @return void
	 */
	public function addTag(Tx_Books_Domain_Model_Tag $tag) {
		$this->tags->attach($tag);
	}

	/**
	 * @param Tx_Books_Domain_Model_Tag $tag
	 * @return void
	 */
	public function removeTag(Tx_Books_Domain_Model_Tag $tag) {
		$this->tags->detach($tag);
	}
}
?>