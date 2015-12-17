<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		"GOLUB." . $_EXTKEY,
		'List',
		array('Inventory' => 'list')
	);

