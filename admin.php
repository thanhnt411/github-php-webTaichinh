<?php
session_start();
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/controllers/AdminControllers/AdminAuthControllers.php";
require_once __DIR__ . "/models/AdminModels.php";

if (!isset($_SESSION["admin"])) {
    header("Location: views/admin/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/admin.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link
        href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
        rel="stylesheet" />

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Document</title>
</head>

<body>
    <div class="main">
        <div class="admin">
            <?php require_once __DIR__ . "/views/admin/layout/adminslidebar.php"; ?>
        </div>
    </div>

</body>
<script src="assets/js/admin.js"></script>

</html>