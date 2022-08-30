<?php

declare(strict_types = 1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

// defining constants for the directories within the project
define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

require APP_PATH . 'App.php';

// code goes here

// get all files from directory

// for each file, add rows to an array

// calculate the totals based on the composition of the array

require VIEWS_PATH . 'transactions.php';
