<?php 
require '../config/config.php';
require '../autoload.php';
require '../routes/route.php';
use Lib\FrontController\FrontController;
$app = new FrontController();
$app->setRoutes($routes);
$app->run();