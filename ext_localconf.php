<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'BookList',
	array(
		'Book' => 'list',
	)
);

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'BookDetails',
	array(
		'Book' => 'show',
	)
);

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'BookTagCloud',
	array(
		'Book' => 'tagCloud',
	)
);

?>