<?php
session_start();
require_once __DIR__ . '/../../controllers/AdminAuthControllers.php';
require_once __DIR__ . "/../../models/AdminModels.php";
?>
<h2>Login</h2>
<form action="../../admin.php" method="post">
    <input type="text" name="adminName" placeholder="admin_name"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <button type="submit">Login</button>
</form>