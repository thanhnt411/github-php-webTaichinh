<?php
require_once __DIR__ . "/../../../config.php";
require_once __DIR__ . "/../../../controllers/PageController/statisticsControllers.php";
require_once __DIR__ . "/../../../models/PostModels/statisticsModels.php";

$statisticsControllers = new StatisticsControllers($conn);
$results = $statisticsControllers->index();
?>
<!--START Statistics-->
<div class="partners__box-info">
    <?php foreach ($results as $key => $rows): ?>
        <div class="partners__box-info--left">
            <div class="partners__banner">
                <h3 class="partners__banner-title"><?= $rows['title'] ?></h3>
                <p class="partners__banner-sub"><?= $rows['value'] ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!--END Statistics-->