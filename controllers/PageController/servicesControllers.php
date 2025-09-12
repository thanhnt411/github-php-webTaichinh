<?php
require_once __DIR__ . "/../../models/PostModels/servicesModels.php";
class ServicesControllers
{
    private $model;
    public function __construct($conn)
    {
        $this->model = new ServicesModels($conn);
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
