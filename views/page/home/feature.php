<?php
require_once __DIR__ . "/../../../config.php";
require_once __DIR__ . "/../../../controllers/PageController/newsControllers.php";
require_once __DIR__ . "/../../../models/PostModels/newsModels.php";

$newsControllers = new NewsControllers($conn);
$result = $newsControllers->index();
?>
<!--START Feature-->
<div class="feature">
    <div class="feature__container container">
        <div class="feature__wrap">
            <div class="feature__wrap--top">
                <div class="feature__title">
                    <span class="feature__heading">FEATURED NEWS</span>
                    <h2 class="feature__sub-heading">Tin tức nổi bật</h2>
                </div>

                <div class="feature__nav">
                    <ul class="feature__nav-list">
                        <li><a href="">Văn bản pháp luật</a></li>
                        <li><a href="">Tin tức chuyên ngành</a></li>
                        <li><a href="">Kỹ năng kế toán cần biết</a></li>
                        <li>
                            <a
                                href=""
                                style="text-decoration: underline; color: #f21520">Tin tức SAB</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="feature__wrap--bottom">
                <?php foreach ($result as $key => $rows): ?>
                    <?php if ($rows['id'] == 1): ?>
                        <div class="feature__box--left">
                            <div class="feature__box--left-wrap">
                                <img
                                    class="feature__img"
                                    src="<?= $rows['image'] ?>"
                                    alt="" />
                                <img
                                    class="feature__date"
                                    src="<?= $rows['author'] ?>"
                                    alt="" />
                            </div>
                            <div class="feature--left-title">
                                <a href=""><?= $rows['excerpt'] ?></a>
                            </div>
                            <div class="feature--left-text">
                                <?= $rows['content'] ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>

                <div class="feature__box--right">
                    <div class="feature-right--top">
                        <?php foreach ($result as $key => $rows): ?>
                            <?php if ($rows['id'] != 1 && ($rows['id'] == 2 || $rows['id'] == 3)): ?>
                                <div class="feature__mini-box feature__mini-box-<?= $key + 1 ?>">
                                    <div class="feature__mini-box-wrap">
                                        <img
                                            class="feature__img-mini"
                                            src="<?= $rows['image'] ?>"
                                            alt="" />
                                        <img
                                            class="feature__date"
                                            src="<?= $rows['author'] ?>"
                                            alt="" />
                                    </div>
                                    <div class="feature__mini-box-title">
                                        <a href=""><?= $rows['excerpt'] ?></a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div class="feature-right--bottom">
                        <?php foreach ($result as $key => $rows): ?>
                            <?php if ($rows['id'] > 3): ?>
                                <div class="feature__mini-box">
                                    <div class="feature__mini-box-wrap">
                                        <img
                                            class="feature__img-mini"
                                            src="<?= $rows['image'] ?>"
                                            alt="" />
                                        <img
                                            class="feature__date"
                                            src="<?= $rows['author'] ?>"
                                            alt="" />
                                    </div>
                                    <div class="feature__mini-box-title">
                                        <a href=""><?= $rows['excerpt'] ?></a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END Feature-->