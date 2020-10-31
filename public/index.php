<?php

use Router\Router;

require '../vendor/autoload.php';

//Recuperation de l'url pour traitement
$url = $_GET['url'];
$router = new Router($url);
$router->show();