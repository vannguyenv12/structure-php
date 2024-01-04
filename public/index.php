<?php
session_start();

use Framework\Router;

require __DIR__ . '/../vendor/autoload.php';
require '../helper.php';


// spl_autoload_register()

// Router
$router = new Router();

// Get routes
require basePath('routes.php');

// Get current uri and http method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Route the request
$router->route($uri);
