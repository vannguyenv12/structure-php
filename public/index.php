<?php
require '../helper.php';
require basePath('Router.php');
require basePath('Database.php');

// Router
$router = new Router();

// Get routes
require basePath('routes.php');

// Get current uri and http method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Route the request
$router->route($uri, $method);
