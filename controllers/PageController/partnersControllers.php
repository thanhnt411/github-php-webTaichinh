<?php
require_once __DIR__ . "/../../models/PostModels/partnersModels.php";
class PartnersControllers
{
    private $model;
    public function __construct($conn)
    {
        $this->model = new PartnersModels($conn);
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
