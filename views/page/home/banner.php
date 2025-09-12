<?php
require_once __DIR__ . "/../../../config.php";
require_once __DIR__ . "/../../../models/PostModels/slidersModels.php";
require_once __DIR__ . "/../../../controllers/PageController/slidersControllers.php";

$slidersController = new SlidersController($conn);
$result = $slidersController->index();
?>
<!--START Banner-->
<div class="banner swiper JS-banner">
    <div class="swiper-wrapper">
        <?php foreach ($result as $key => $rows): ?>
            <?php if ($rows['id'] != 3): ?>
                <div class="swiper-slide swiper-slide-<?= $key + 1 ?>">
                    <div class="banner__background--first" style="background-image: url('<?= $rows['image'] ?>');">
                        <div class="banner__container container">
                            <div class="banner__box">
                                <div class="banner__text">
                                    <h1 class="banner__heading">
                                        <?= $rows['title'] ?>
                                    </h1>
                                    <p class="banner__sub-heading">
                                        <?= $rows['description'] ?>
                                    </p>
                                    <div class="banner__contact">
                                        <a href="" class="banner__contact-text">LIÊN HỆ NGAY</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ($rows['id'] == 3): ?>
                <div class="swiper-slide swiper-slide-<?= $key + 1 ?>">
                    <div class="banner__background--third">
                        <div class="banner__container container">
                            <div class="banner__box--third">
                                <div class="banner__text">
                                    <h1 class="banner__heading--top">
                                        Công ty Tư vấn quản lý tài Chính SAB
                                    </h1>
                                    <h2 class="banner__heading--bottom">
                                        <?= $rows['title'] ?>
                                    </h2>
                                    <p class="banner__sub-heading">
                                        <?= $rows['description'] ?>
                                    </p>
                                    <div class="banner__contact--third">
                                        <a href="" class="banner__contact-text">LIÊN HỆ NGAY</a>
                                        <i class="fas fa-arrow-right banner__contact-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <div class="swiper-pagination swiper-pagination1"></div>
</div>
<!--END Banner-->