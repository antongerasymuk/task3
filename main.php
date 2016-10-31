<?php

ini_set("display_errors",1);
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

//$titleIndex = "Главная страница";
//$nameIndex = "Васек Пупкин";
//$pageIndex = new Vendor\PageBuilder\PageIndex($titleIndex, $nameIndex);

$titleStatus = "Cтраница статуса";
$nameStatus = "Васек Пупкин";
$pageStatus = new Vendor\PageBuilder\PageStatus($titleStatus, $nameStatus);
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem($pageStatus->templatePath);
$twig = new Twig_Environment($loader);
$pageStatus->twigInit($twig);

echo $pageStatus->write();

