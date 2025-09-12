<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . "/../../../../config.php";
require_once __DIR__ . "/../../../../controllers/AdminControllers/AdminAuthControllers.php";
require_once __DIR__ . "/../../../../models/AdminModels.php";
require_once __DIR__ . "/../../../../router.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../assets/css/admin.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link
        href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
        rel="stylesheet" />

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Document</title>
</head>

<body>
    <div class="main">
        <div class="admin">
            <?php require_once __DIR__ . "/../../layout/adminslidebar.php"; ?>
            <div class="content">
                <a href="bannerAdd.php?action=addForm">Add</a>
                <table border="1" cellpadding="5">
                    <tr>
                        <td>ID</td>
                        <td>Title</td>
                        <td>Description</td>
                        <td>Image</td>
                        <td>Action</td>
                    </tr>

                    <?php
                    foreach ($result as $key => $rows):
                        $stt = str_pad($key + 1, 2, '0', STR_PAD_LEFT);
                    ?>

                        <tr>
                            <td><?= $stt ?></td>
                            <td><?= $rows['title'] ?></td>
                            <td><?= $rows['description'] ?></td>
                            <td><?= $rows['image'] ?></td>
                            <td>
                                <a href='bannerUpdate.php?action=editForm&id=<?= $rows['id'] ?>'>UPDATE |</a>
                                <a href='adminbanner.php?action=delete&id=<?= $rows['id'] ?>' onclick='return confirm("DELETE?")'>DELETE</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </table>
            </div>
        </div>
    </div>

</body>
<script src="assets/js/admin.js"></script>

</html>