<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_books_domain_model_category'] = array(
	'ctrl' => $TCA['tx_books_domain_model_category']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'title',
	),
	'types' => array(
		'1' => array('showitem' => 'title'),
	),
	'columns' => array(
		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:books/Resources/Private/Language/locallang.xml:tx_books_domain_model_category.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
	),
);

?>