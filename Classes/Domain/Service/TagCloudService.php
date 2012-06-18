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
 * TagCloud service
 */
class Tx_Books_Domain_Service_TagCloudService implements t3lib_Singleton {

	/**
	 * @param integer $numberOfTagSizes
	 * @return array
	 */
	public function createTagCloud($numberOfTagSizes = 5) {
		$minAndMaxNumberOfTags = $this->getMinAndMaxNumberOfTags();
		$minNumberOfTags = (integer)$minAndMaxNumberOfTags['min'];
		$maxNumberOfTags = (integer)$minAndMaxNumberOfTags['max'];
		$maxRelativeAmount = $maxNumberOfTags - $minNumberOfTags;
		$tags = $this->getGroupedTags();
		foreach($tags as &$tag) {
			$relativeAmount = (integer)$tag['amount'] - $minNumberOfTags;
			$tag['popularity'] = round(($relativeAmount / $maxRelativeAmount) * ($numberOfTagSizes - 1)) + 1;
		}
		return $tags;
	}

	/**
	 * @return array in the format array('min' => <min number of tags>, 'max' => <max number of tags>)
	 */
	protected function getMinAndMaxNumberOfTags() {
		$subSelect = $GLOBALS['TYPO3_DB']->SELECTquery(
			'COUNT(*) amount',
			'tx_books_book_tag_mm bt INNER JOIN tx_books_domain_model_tag t ON (bt.uid_foreign = t.uid) INNER JOIN tx_books_domain_model_book b ON (bt.uid_local = b.uid)',
			'b.deleted = 0 AND t.deleted = 0',
			't.name'
		);
		$minMaxTagCount = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(
			'MAX(amount) max, MIN(amount) min',
			'(' . $subSelect . ') subquery'
		);
		return current($minMaxTagCount);
	}

	/**
	 * @return array in the format array(array('tag' => 'Foo', 'amount' => 123), array('tag' => 'Bar', 'amount' => 100), ...);
	 */
	protected function getGroupedTags() {
		$tagGroups = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(
			't.uid uid, t.name name, COUNT(*) amount',
			'tx_books_book_tag_mm bt INNER JOIN tx_books_domain_model_tag t ON (bt.uid_foreign = t.uid) INNER JOIN tx_books_domain_model_book b ON (bt.uid_local = b.uid)',
			'b.deleted = 0 AND t.deleted = 0',
			't.name',
			't.name'
		);
		return $tagGroups;
	}

}