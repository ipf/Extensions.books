<?php

########################################################################
# Extension Manager/Repository config file for ext "books".
#
# Auto generated 07-06-2012 23:59
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Book collection',
	'description' => 'Provides a simple book collection',
	'category' => 'plugin',
	'author' => 'Bastian Waidelich',
	'author_email' => 'bastian@typo3.org',
	'author_company' => '',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3',
			'fluid' => '1.3',
			'typo3' => '4.5-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:26:{s:21:"ExtensionBuilder.json";s:4:"c2d3";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"3f64";s:14:"ext_tables.php";s:4:"d619";s:14:"ext_tables.sql";s:4:"a23b";s:37:"Classes/Controller/BookController.php";s:4:"a1ee";s:29:"Classes/Domain/Model/Book.php";s:4:"8456";s:33:"Classes/Domain/Model/Category.php";s:4:"3e2a";s:44:"Classes/Domain/Repository/BookRepository.php";s:4:"58b8";s:42:"Classes/ViewHelpers/GravatarViewHelper.php";s:4:"5457";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"a102";s:26:"Configuration/TCA/Book.php";s:4:"7cdb";s:30:"Configuration/TCA/Category.php";s:4:"dbc4";s:38:"Configuration/TypoScript/constants.txt";s:4:"da11";s:34:"Configuration/TypoScript/setup.txt";s:4:"e7b7";s:40:"Resources/Private/Language/locallang.xml";s:4:"f5b1";s:71:"Resources/Private/Language/locallang_csh_tx_books_domain_model_book.xml";s:4:"b6b6";s:75:"Resources/Private/Language/locallang_csh_tx_books_domain_model_category.xml";s:4:"d2f3";s:43:"Resources/Private/Language/locallang.xml";s:4:"fdef";s:38:"Resources/Private/Layouts/Default.html";s:4:"5833";s:47:"Resources/Private/Partials/Book/Properties.html";s:4:"6c22";s:42:"Resources/Private/Templates/Book/List.html";s:4:"c61b";s:42:"Resources/Private/Templates/Book/Show.html";s:4:"87b8";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:53:"Resources/Public/Icons/tx_books_domain_model_book.gif";s:4:"905a";s:57:"Resources/Public/Icons/tx_books_domain_model_category.gif";s:4:"1103";}',
);

?>