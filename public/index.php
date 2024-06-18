<?php
include '../route/web.php';
include '../helper/main.php';

$request_uri = $_SERVER['REQUEST_URI'];
$is_exists = array_key_exists($request_uri,$routes);

if($is_exists){

    $oppa=explode('#',$routes[$request_uri]);
    require '../controller/'.$oppa[0].'.php';

    $classname=new $oppa[0];
    $response= call_user_func(array($classname,$oppa[1]));

    return $response;

 } else{
        die ('404 not found');
    }
