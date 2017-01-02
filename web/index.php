<?php

require_once (__DIR__ . "/../vendor/autoload.php");

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();

$map = array(
  "/bonjour" => __DIR__ . "/../app/pages/bonjour.php",
  "/aurevoir" => __DIR__ . "/../app/pages/aurevoir.php",
);

$path = $request->getPathInfo();
if(isset($map[$path])){
    ob_start();
    include $map[$path];
    $content = ob_get_clean();
    $response->setContent($content);
}else{
    $response->setStatusCode(404);
    $response->setContent("Oops nothing here ! ");
}

$response->send();