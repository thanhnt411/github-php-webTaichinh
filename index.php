<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
  <div class="main">
    <?php
    include __DIR__ . "/views/page/layout/header.php";
    include __DIR__ . "/views/page/home/banner.php";
    ?>

    <!--START Content-->
    <div class="content">
      <?php
      include __DIR__ . "/views/page/home/about.php";
      include __DIR__ . "/views/page/home/about_box.php";
      include __DIR__ . "/views/page/home/service.php";
      include __DIR__ . "/views/page/home/training.php";
      include __DIR__ . "/views/page/home/product.php";
      include __DIR__ . "/views/page/home/feedback.php";
      include __DIR__ . "/views/page/home/partners.php";
      include __DIR__ . "/views/page/home/feature.php";
      ?>
    </div>
    <!--END Content-->

    <!--START Contact-->
    <?php include __DIR__ . "/views/page/home/contact.php"; ?>
    <!--END Contact-->

    <?php include __DIR__ . "/views/page/layout/footer.php"; ?>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
  new WOW().init();
</script>

</html>