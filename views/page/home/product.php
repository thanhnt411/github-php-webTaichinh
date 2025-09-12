<?php
require_once __DIR__ . "/../../../config.php";
require_once __DIR__ . "/../../../controllers/PageController/productsControllers.php";
require_once __DIR__ . "/../../../models/PostModels/productsModels.php";

$productsControllers = new ProductsControllers($conn);
$result = $productsControllers->index();
?>
<!--START Product-->
<div class="product">
    <div class="content">
        <div class="content__heading">OUR PRODUCTS</div>
        <div class="content__sub-heading">Sản phẩm của chúng tôi</div>
    </div>

    <?php foreach ($result as $key => $rows): ?>
        <?php if ($rows['id'] != 2): ?>
            <div class="product__wrap--top product__box-<?= $key + 1 ?>">
                <div class="product__container container">
                    <div class="product__box">
                        <div class="product__background--top">
                            <img
                                class="product__img"
                                src="<?= $rows['img'] ?>"
                                alt="" />
                        </div>
                        <div class="product__info">
                            <h3 class="content__title"><?= $rows['sort_descript'] ?></h3>
                            <p class="content__sub-title">
                                <?= $rows['content'] ?>
                            </p>
                            <div class="content__contact">
                                <a href="" class="content__contact-link">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($rows['id'] == 2): ?>
            <div class="product__wrap--bottom reverse product__box-<?= $key + 1 ?>">
                <div class="product__container container">
                    <div class="product__box-2 reverse">
                        <div class="product__background--bottom">
                            <img
                                class="product__img"
                                src="<?= $rows['img'] ?>"
                                alt="" />
                        </div>
                        <div class="product__info">
                            <h3 class="content__title"><?= $rows['sort_descript'] ?></h3>
                            <p class="content__sub-title">
                                <?= $rows['content'] ?>
                            </p>
                            <div class="content__contact">
                                <a href="" class="content__contact-link">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
<!--END Product-->