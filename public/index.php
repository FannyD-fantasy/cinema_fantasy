<?php
require __DIR__.'/../vendor/autoload.php';

require_once __DIR__.'/../app/Controllers/MainController.php';

require_once __DIR__.'/../app/utils/Database.php';

require_once __DIR__.'/../app/Models/Cinema.php';


$router = new AltoRouter();

// definition de l'url de base vers le dossier public
$router->setBasePath($_SERVER['BASE_URI']);

$router -> map(
  'GET',
  '/',
  [
    'controller'=>'MainController',
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
