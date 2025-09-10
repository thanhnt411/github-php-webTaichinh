<?php
require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../../controllers/AdminAuthControllers.php';
$controller = new AdminAuthControllers($pdo);
$controller->logout();
