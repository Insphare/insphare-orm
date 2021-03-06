<?php

include_once dirname(__DIR__).DIRECTORY_SEPARATOR.'exampleBootstrap.php';

$argument = '--dump-sql';
if (!empty($argv[1]) && $argv[1] === 'force') {
	$argument = '--force';
}

$commands = array(
	'orm:clear-cache:metadata',
	'orm:clear-cache:query',
	'orm:clear-cache:result',
	'orm:schema-tool:update ' . $argument,
);

foreach ($commands as $command) {
	echo `php doctrine.php $command`;
}
