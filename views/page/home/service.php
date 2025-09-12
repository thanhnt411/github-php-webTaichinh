<?php
require_once __DIR__ . "/../../../config.php";
require_once __DIR__ . "/../../../controllers/PageController/servicesControllers.php";
require_once __DIR__ . "/../../../models/PostModels/servicesModels.php";

$servicesController = new ServicesControllers($conn);
$result = $servicesController->index();
?>
<!--START Service-->
<div class="service">
    <div class="container service__container">
        <div class="content">
            <div class="content__heading">OUR SERVICE</div>
            <div class="content__sub-heading">Dịch vụ của chúng tôi</div>
        </div>
        <div class="serice__content">
            <div class="service__wrap">
                <?php foreach ($result as $key => $rows): ?>
                    <div class="service__box service__box-<?= $key + 1 ?>">
                        <div class="service__logo">
                            <img src="<?= $rows['icon'] ?>" alt="" />
                        </div>
                        <div class="service__title"><?= $rows['short_description'] ?></div>
                        <p class="service__text">
                            <?= $rows['content'] ?>
                        </p>

                        <div class="service__contact">
                            <a href="./dichvu.html#staff" class="service__contact-link">Xem chi tiết</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!--END Service-->