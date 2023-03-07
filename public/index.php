<?php

use Dotenv\Dotenv;



session_start();

require_once '../src/Support/Helper.php';
require_once app_path() . 'vendor/autoload.php';
require_once app_path() . 'Routes/web.php';

$dotenv = Dotenv::createImmutable(app_path());
$dotenv->load();


app()->run();
