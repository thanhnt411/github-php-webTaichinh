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
    }

    public function delete() {}

    public function update() {}

    public function create() {}
}
