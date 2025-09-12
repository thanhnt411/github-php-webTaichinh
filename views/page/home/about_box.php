<?php
require_once __DIR__ . "/../../../config.php";
require_once __DIR__ . "/../../../controllers/PageController/categoriesControllers.php";
require_once __DIR__ . "/../../../models/PostModels/categoriesModels.php";

$categoriesControllers = new CategoriesControllers($conn);
$result = $categoriesControllers->index();
?>
<!--START About-box-->
<div class="about">
    <div class="about__box">
        <div class="about__box-wrap">
            <?php foreach ($result as $key => $rows): ?>
                <div class="about__box-item bout__box-item-<?= $key + 1 ?>">
                    <img
                        class="about__img"
                        src=" <?= $rows['image'] ?>"
                        alt="" />
                    <p class="about__img-text">
                        <?= $rows['title'] ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!--END About-box-->