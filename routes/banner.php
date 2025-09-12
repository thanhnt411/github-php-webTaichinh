<?php
require_once __DIR__ . "/../controllers/AdminControllers/slidersControllers.php";

$bannerControllers = new SlidersController($conn);

$routes['index'] = function () use ($bannerControllers) {
    $bannerControllers->index();
};

$routes['addForm'] = function () use ($bannerControllers) {
    $bannerControllers->addForm();
};

$routes['add'] = function () use ($bannerControllers) {
    $bannerControllers->add($_POST['title'], $_POST['description'], $_POST['image']);
};

$routes['editForm'] = function () use ($bannerControllers) {
    $bannerControllers->editForm($_GET['id']);
};

$routes['update'] = function () use ($bannerControllers) {
    $bannerControllers->update($_GET['id'], $_POST['title'], $_POST['description'], $_POST['image']);
};

$routes['delete'] = function () use ($bannerControllers) {
    $bannerControllers->delete($_GET['id']);
};
