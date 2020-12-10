<?php

require('controller/AllAdsController.php');

require('controller/HomeController.php');
require('controller/NewAdController.php');

require('controller/searchController.php');
require('model/Model.php');


$page = filter_input(INPUT_GET,"page");

$route= array(
"home"=> HomeController::class,
"ads"=> AllAdsController::class,
"newAd"=> NewAdController::class,
"search"=> searchController::class,

);


foreach ($route as $routeValue => $className){
    
    if ($page === $routeValue){

        $controller = new $className;
        $controller->manage();
        break;
    }
}


if(!isset($controller)){
    $controller = new HomeController();
    $controller->manage();
}

