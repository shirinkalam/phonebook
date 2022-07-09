<?php
define('BASEPATH' , __DIR__ . "/../");

include BASEPATH . "/vendor/autoload.php";
include BASEPATH . "/helpers/helpers.php";

$dotenv = Dotenv\Dotenv::createImmutable(BASEPATH);
$dotenv->load();

include BASEPATH . "/routes/web.php";

$request = new \App\Core\Request();
