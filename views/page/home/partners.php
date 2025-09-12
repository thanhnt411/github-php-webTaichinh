<?php
require_once __DIR__ . "/../../../config.php";
require_once __DIR__ . "/../../../controllers/PageController/partnersControllers.php";
require_once __DIR__ . "/../../../models/PostModels/partnersModels.php";

$partnersControllers = new PartnersControllers($conn);
$result = $partnersControllers->index();
?>
<!--START Partners-->
<div class="partners">
    <div class="partners__container container">
        <div class="partners__wrap">
            <div class="partners__box--left">
                <div class="partners--left-wrap">
                    <div class="partners__title">
                        <span class="partners__heading">OUR PARTNERS</span>
                        <h2 class="partners__sub-heading">Đối tác của chúng tôi</h2>
                    </div>
                    <p class="partners__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. A
                        auctor enim mauris ut. At mauris vitae faucibus ac. Lorem
                        ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>

                <?php include __DIR__ . "/../home/statistics.php"; ?>
            </div>

            <div class="partners__box--right">
                <div class="swiper__button swiper__button-partners">
                    <div class="swiper__button-prev swiper-button-prev4">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <div class="swiper__button-next swiper-button-next4">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
                <div class="partners__content swiper JS-partners">
                    <div class="partners__wrapper swiper-wrapper">
                        <?php foreach ($result as $key => $rows): ?>
                            <div class="partners__slide swiper-slide">
                                <img src="<?= $rows['img'] ?>" alt="" />
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination swiper-pagination4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END Partners-->