<?php
require_once __DIR__ . "/../../../config.php";
require_once __DIR__ . "/../../../controllers/PageController/introduceControllers.php";
require_once __DIR__ . "/../../../models/PostModels/introducesModels.php";

$introducesControllers = new IntroducesControllers($conn);
$result = $introducesControllers->index();
?>
<!--START About-->
<div class="about">
    <div class="container about__container">
        <?php foreach ($result as $rows): ?>
            <div class="about__wrap">
                <div class="about__introduce">
                    <div class="about__title">
                        <span class="about__heading">ABOUT US</span>
                        <h2 class="about__sub-heading"><?= $rows['title'] ?></h2>
                    </div>
                    <div class="about__text">
                        <h2 class="about-heading">
                            <?= $rows['heading'] ?>
                        </h2>
                        <h2 class="about-heading"> <?= $rows['sub_heading'] ?></h2>
                        <p class="about__sub-text">
                            <?= $rows['content'] ?>
                        </p>
                        <div class="about__contact">
                            <a href="" class="about__contact-link">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="about__video">
                    <div class="about__video-wrap">
                        <div class="about__video-box" style="background-image: url('<?= $rows['image'] ?>');">
                            <video
                                src="<?= $rows['video'] ?>"
                                class="video__myVideo"
                                controls
                                muted></video>
                            <div class="about__play">
                                <div class="about__play-box">
                                    <i
                                        class="fa fa-play about__play-icon"
                                        id="video-mp4"></i>
                                </div>
                                <div class="about__play-title">
                                    <p class="about__play-text">
                                        Xem video giới thiệu về chúng tôi
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="about__video-background"></div>
                    </div>
                    <h2 class="about__video-title"> <?= $rows['video_title'] ?></h2>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!--END About-->