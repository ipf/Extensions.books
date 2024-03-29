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
 *
 *
 * @package books
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_Books_Domain_Repository_BookRepository extends Tx_Extbase_Persistence_Repository {

	protected $defaultOrderings = array('title' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING);

	/**
	 * @param Tx_Books_Domain_Model_Tag $tag
	 * @return Tx_Extbase_Persistence_QueryResultInterface
	 */
	public function findByTag(Tx_Books_Domain_Model_Tag $tag) {
		$query = $this->createQuery();
		return $query->matching(
			$query->contains('tags', $tag)
		)->execute();
	}
}
?>