<?php
session_start();
require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../../controllers/AdminControllers/AdminAuthControllers.php';
require_once __DIR__ . "/../../models/AdminModels.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $adminName = $_POST["adminName"];
    $pwd = $_POST["pwd"];
    $controller = new AdminAuthControllers($conn);
    $controller->login($adminName, $pwd);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/adminLogin.css" />
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <h2 class="title">Login</h2>
            <form action="" method="post" class="login">
                <input type="text" name="adminName" placeholder="Username"><br>
                <input type="password" name="pwd" placeholder="Password"><br>
                <button type="submit" class="button">Login</button>
            </form>
        </div>
    </div>
</body>

</html>