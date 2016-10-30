<?php

ini_set("display_errors",1);
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

$title = "Главная страница";
$name = "Васек Пупкин";
$pageIndex = new Vendor\PageBuilder\PageIndex($title, $name);
$pageIndex->Write(); 

