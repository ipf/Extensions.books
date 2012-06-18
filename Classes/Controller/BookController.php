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
 * Book controller
 */
class Tx_Books_Controller_BookController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_Books_Domain_Repository_BookRepository
	 */
	protected $bookRepository;

	/**
	 * @var Tx_Books_Domain_Service_TagCloudService
	 */
	protected $tagCloudService;

	/**
	 * @param Tx_Books_Domain_Repository_BookRepository $bookRepository
	 * @return void
	 */
	public function injectBookRepository(Tx_Books_Domain_Repository_BookRepository $bookRepository) {
		$this->bookRepository = $bookRepository;
	}

	/**
	 * @param Tx_Books_Domain_Service_TagCloudService $tagCloudService
	 * @return void
	 */
	public function injectTagCloudService(Tx_Books_Domain_Service_TagCloudService $tagCloudService) {
		$this->tagCloudService = $tagCloudService;
	}

	/**
	 * @param Tx_Books_Domain_Model_Tag $tag
	 * @return void
	 */
	public function listAction(Tx_Books_Domain_Model_Tag $tag = NULL) {
		if ($tag !== NULL) {
			$books = $this->bookRepository->findByTag($tag);
			$this->view->assign('tag', $tag);
		} else {
			$books = $this->bookRepository->findAll();
		}
		$this->view->assign('books', $books);
	}

	/**
	 * @param Tx_Books_Domain_Model_Book $book
	 * @return void
	 */
	public function showAction(Tx_Books_Domain_Model_Book $book) {
		$this->view->assign('book', $book);
	}

	/**
	 * @return void
	 */
	public function tagCloudAction() {
		$this->view->assign('tags', $this->tagCloudService->createTagCloud());
	}

}
?>