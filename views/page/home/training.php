<?php
require_once __DIR__ . "/../../../config.php";
require_once __DIR__ . "/../../../controllers/PageController/trainingsControllers.php";
require_once __DIR__ . "/../../../models/PostModels/trainingsModels.php";

$trainingsControllers = new TrainingsControllers($conn);
$result = $trainingsControllers->index();
?>
<!--START Training-->
<div class="training">
    <div class="training__container container">
        <div class="training__wrap">
            <div class="content">
                <div class="content__heading">OUR TRAINING COURSE</div>
                <div class="content__sub-heading">Các khóa đào tạo của SAB</div>
            </div>

            <div class="swiper__button">
                <div class="swiper__button-prev swiper-button-prev3">
                    <i class="fa-solid fa-chevron-left"></i>
                </div>
                <div class="swiper__button-next swiper-button-next3">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>

            <div thumbsSlider="" class="training__content swiper JS-training">
                <div class="training__wrapper swiper-wrapper">
                    <?php foreach ($result as $key => $rows): ?>
                        <div class="training__slide swiper-slide training__slide-<?= $key + 1 ?>">
                            <?= $rows['training_course'] ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="swiper JS-training2">
                <div class="swiper-wrapper">
                    <?php foreach ($result as $key => $rows): ?>
                        <div class="swiper-slide swiper-slide-<?= $key + 1 ?>">
                            <div class="training__box">
                                <div class="training__background">
                                    <img
                                        class="training__img"
                                        src="<?= $rows['img'] ?>"
                                        alt="" />
                                </div>
                                <div class="training__info">
                                    <h3 class="content__title"><?= $rows['training_course'] ?></h3>
                                    <p class="content__sub-title">
                                        <?= $rows['descripiton'] ?>
                                    </p>
                                    <h4 class="training__heading">
                                        Học phí:
                                        <span class="training__sub-heading"> <?= $rows['tuition_fee'] ?></span>
                                    </h4>
                                    <h4 class="training__heading">
                                        Hình thức học:
                                        <span class="training__sub-heading"> <?= $rows['study_mode'] ?></span>
                                    </h4>
                                    <h4 class="training__heading">
                                        Thời gian:
                                        <span class="training__sub-heading"> <?= $rows['class_schedule'] ?></span>
                                    </h4>
                                    <div class="content__contact">
                                        <a href="" class="content__contact-link">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END Training-->