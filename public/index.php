<?php
require __DIR__.'/../vendor/autoload.php';

require_once __DIR__.'/../app/Controllers/MainController.php';

require_once __DIR__.'/../app/utils/Database.php';
require_once __DIR__.'/../app/Models/Cinema.php';

$router = new AltoRouter();



$router -> map(
  'GET',
  '/',
  [
    'controller'=>'MaintController',
    'method'=>'home'
  ],
  'home'
);

$match = $router->match();

$controller = new MainController();

if ($match !==false) {
  $controllerName = $match['target']['controller'];
  $methodName = $match['target']['method'];

  $controller = new $controllerName();
  $controller->$methodName();

} else {
  $controller->error404();
}
