<?php
require_once __DIR__ . "/../../../config.php";
require_once __DIR__ . "/../../../controllers/PageController/feedbackControllers.php";
require_once __DIR__ . "/../../../models/PostModels/feedbacksModels.php";

$feedbackControllers = new FeedbackControllers($conn);
$result = $feedbackControllers->index();
?>
<!--START Feedback-->
<div class="feedback">
    <div class="feedback__container container">
        <div class="content">
            <div class="content__heading">FEEDBACK</div>
            <div class="content__sub-heading">Khách hàng nói gì về SAB</div>
        </div>

        <div class="swiper__button swiper__button-feedback">
            <div class="swiper__button-prev swiper-button-prev2">
                <i class="fa-solid fa-chevron-left"></i>
            </div>
            <div class="swiper__button-next swiper-button-next2">
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div>

        <div class="feedback__box swiper JS-feedback">
            <div class="feedback__wrapper swiper-wrapper">
                <?php foreach ($result as $key => $rows): ?>
                    <div class="feedback__slide swiper-slide">
                        <div class="feedback__slide-box feedback__slide-box-<?= $key + 1 ?>">
                            <img
                                src="<?= $rows['avatar'] ?>"
                                alt="" />
                            <div class="feedback__name"><?= $rows['name'] ?></div>
                            <div class="feedback__position"><?= $rows['position'] ?></div>
                            <div class="feedback__text">
                                <?= $rows['content'] ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination swiper-pagination2"></div>
        </div>
    </div>
</div>
<!--END Feedback-->