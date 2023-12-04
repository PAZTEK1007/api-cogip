<?php

namespace App\Routes;

use Bramus\Router\Router;

use App\Controllers\HomeController;
use App\Controllers\PizzaController;

use App\Core\Data;

$bdd = new Data('localhost', 'data', 'root', 'root');
$router = new Router();

$router->get('/', function() use ($db) {
    (new HomeController)->index();
   $pdo = $bdd->connect();
});

$router->get('/pizza', function() {
    (new PizzaController)->index();
});

$router->run();
