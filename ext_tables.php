<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'BookList',
	'Books - List'
);

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'BookDetails',
	'Books - Details'
);

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'BookTagCloud',
	'Books - TagCloud'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Book Collection');

$TCA['tx_books_domain_model_book'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:books/Resources/Private/Language/locallang.xml:tx_books_domain_model_book',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'delete' => 'deleted',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Book.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_books_domain_model_book.png'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_books_domain_model_category', 'EXT:books/Resources/Private/Language/locallang_csh_tx_books_domain_model_category.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_books_domain_model_category');
$TCA['tx_books_domain_model_category'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:books/Resources/Private/Language/locallang.xml:tx_books_domain_model_category',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'delete' => 'deleted',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Category.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_books_domain_model_category.png'
	),
);

t3lib_extMgm::allowTableOnStandardPages('tx_books_domain_model_tag');
$TCA['tx_books_domain_model_tag'] = array (
	'ctrl' => array (
		'title'	=> 'LLL:EXT:books/Resources/Private/Language/locallang.xml:tx_books_domain_model_tag',
		'label' => 'name',
		'tstamp'   => 'tstamp',
		'crdate'   => 'crdate',
		'delete'   => 'deleted',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Tag.php',
		'iconfile'   => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_books_domain_model_tag.png'
	)
);


?>