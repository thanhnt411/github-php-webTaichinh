<?php
require_once __DIR__ . "/../../models/PostModels/categoriesModels.php";
class CategoriesControllers
{
    private $model;
    public function __construct($conn)
    {
        $this->model = new CategoriesModels($conn);
    }

    public function index()
    {
        $result = $this->model->getAll();
        return $result;
    }

    public function add() {}

    public function delete() {}

    public function update() {}
}
