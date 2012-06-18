<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_books_domain_model_book'] = array(
	'ctrl' => $TCA['tx_books_domain_model_book']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'title, excerpt, cover, category',
	),
	'types' => array(
		'1' => array('showitem' => 'title, author, excerpt, cover, category, tags'),
	),
	'columns' => array(
		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:books/Resources/Private/Language/locallang.xml:tx_books_domain_model_book.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'author' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:books/Resources/Private/Language/locallang.xml:tx_books_domain_model_book.author',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'excerpt' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:books/Resources/Private/Language/locallang.xml:tx_books_domain_model_book.excerpt',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xml:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
			'defaultExtras' => 'richtext[]',
		),
		'cover' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:books/Resources/Private/Language/locallang.xml:tx_books_domain_model_book.cover',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'uploadfolder' => 'uploads/tx_books',
				'show_thumbs' => 1,
				'maxitems' => 10,
				'size' => 5,
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'disallowed' => '',
			),
		),
		'category' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:books/Resources/Private/Language/locallang.xml:tx_books_domain_model_book.category',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_books_domain_model_category',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'tags' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:books/Resources/Private/Language/locallang.xml:tx_books_domain_model_book.tags',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_books_domain_model_tag',
				'MM' => 'tx_books_book_tag_mm',
				'size' => 5,
				'minitems' => 0,
				'maxitems' => 30,
			),
		),
	),
);

?>