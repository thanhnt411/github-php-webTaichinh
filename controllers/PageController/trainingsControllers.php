<?php
require_once __DIR__ . "/../../models/PostModels/trainingsModels.php";
class TrainingsControllers
{
    private $model;
    public function __construct($conn)
    {
        $this->model = new TrainingsModels($conn);
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
