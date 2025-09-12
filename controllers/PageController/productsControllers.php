<?php
require_once __DIR__ . "/../../models/PostModels/productsModels.php";
class ProductsControllers
{
    private $model;
    public function __construct($conn)
    {
        $this->model = new ProductsModels($conn);
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
