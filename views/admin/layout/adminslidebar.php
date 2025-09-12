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
            <ul class="slidebar__submenu">
                <li>
                    <a href="">Trang chủ</a>
                    <ul>
                        <li><a href="views/admin/adminTrangchu/banner/adminbanner.php">banner</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--
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
-->
    </div>
</div>