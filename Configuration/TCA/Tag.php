<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_books_domain_model_tag'] = array(
	'ctrl' => $TCA['tx_books_domain_model_tag']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'name',
	),
	'types' => array(
		'1' => array('showitem' => 'name'),
	),
	'columns' => array(
		'name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:books/Resources/Private/Language/locallang.xml:tx_books_domain_model_tag.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,lower,required'
			),
		),
	),
);

?>