<?php
$routes = [];

require_once __DIR__ . "/routes/banner.php";
$action = $_GET['action'] ?? 'index';

if (isset($routes[$action])) {
    $routes[$action]();
} else {
    echo "404 Not found";
}
