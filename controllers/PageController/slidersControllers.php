<?php
require_once __DIR__ . "/../../models/PostModels/slidersModels.php";
class slidersController
{
    private $model;
    public function __construct($conn)
    {
        $this->model = new SlidersModels($conn);
    }

    public function index()
    {
        $result = $this->model->getAll();
        return $result;
    }
}
