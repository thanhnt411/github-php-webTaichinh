<?php
session_start();
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/controllers/AdminAuthControllers.php";
require_once __DIR__ . "/models/AdminModels.php";

if (!isset($_SESSION["admin"])) {
    header("Location: views/admin/login.php");
    exit();
}
?>
<h2>Hello <?php echo $_SESSION["admin"]; ?></h2>
<a href="views/admin/logout.php">Đăng xuất</a>