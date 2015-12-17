<?php
$EM_CONF[$_EXTKEY] = array (
	'title' => 'Inventory List',
	'description' => 'An extension to manage a stock.',
	'category' => 'plugin',
	'author' => 'Sergiy Golub',
	'author_company' => '',
	'author_email' => '',
	'dependencies' => 'extbase, fluid',
	'state' => 'alpha',
	'clearcacheonload' => 1,
	'version' => '0.0.0',
	'constraints' => array (
		'depends' => array (
			'typo3' => '4.5.0-0.0.0',
			'extbase' => '1.0.0-0.0.0',
			'fluid' => '1.0.0-0.0.0'
		)
	)
);

?>