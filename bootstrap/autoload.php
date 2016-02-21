<?php

// the root of codeposer project path
define('CP_PATH', __DIR__.'/../');

//Note: I've set $config['composer_autoload'] to false
//I will load composer before everything starts
require CP_PATH.'vendor/autoload.php';

$dotenv = new \Dotenv\Dotenv(CP_PATH);

//Load .env
$dotenv->load();