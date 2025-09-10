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
            <div class="slidebar">
                <div class="infor">
                    <img src="" alt="Avatar">
                    <h2> <?php echo $_SESSION["admin"]; ?></h2>
                </div>
                <div class="slidebar__menu">
                    <div class="slidebar__item">
                        <div class="slidebar__title">Dashboard</div>
                        <div class="slidebar__submenu"></div>
                    </div>

                    <div class="slidebar__item">
                        <div class="slidebar__title">Quản lý nội dung</div>
                        <div class="slidebar__submenu"></div>
                    </div>

                    <div class="slidebar__item">
                        <div class="slidebar__title">Tin tức</div>
                        <div class="slidebar__submenu"></div>
                    </div>

                    <div class="slidebar__item">
                        <div class="slidebar__title">User</div>
                        <div class="slidebar__submenu"></div>
                    </div>

                    <div class="slidebar__item">
                        <div class="slidebar__title">Setting</div>
                        <div class="slidebar__submenu">
                            <a href="views/admin/logout.php">Đăng xuất</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <form action="">
                    <div class="header__search">
                        <div class="header__search-border">
                            <div class="header__input-box">
                                <div class="header__menu-input">
                                    <input
                                        id=""
                                        type="text"
                                        placeholder="Nhập từ khóa tìm kiếm"
                                        class="header__input" />
                                </div>
                            </div>
                            <div class="header__search-box">
                                <div class="header__search-icon">
                                    <i class="fa-solid fa-search"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<script src="assets/js/admin.js"></script>

</html>