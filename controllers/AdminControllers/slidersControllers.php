<?php
require_once __DIR__ . "/../../models/PostModels/slidersModels.php";
class SlidersController
{
    private $model;
    public function __construct($conn)
    {
        $this->model = new SlidersModels($conn);
    }

    public function index()
    {
        $result = $this->model->getAll();
        require __DIR__ . "/../../views/admin/adminTrangchu/banner/adminbanner.php";
    }

    public function add($title, $description, $image)
    {
        $this->model->add($title, $description, $image);
        header("Location: ");
    }

    public function addForm()
    {
        require __DIR__ . "/../../views/admin/adminTrangchu/banner/bannerAdd.php";
    }

    public function update($id, $title, $description, $image)
    {
        $this->model->update($id, $title, $description, $image);
        header("Location: ");
    }

    public function editForm($id)
    {
        $result = $this->model->getById($id);
        require __DIR__ . "/../../views/admin/adminTrangchu/banner/bannerUpdate.php";
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header("Location: ");
    }
}
