<?php
require_once __DIR__ . "/../../models/PostModels/statisticsModels.php";
class StatisticsControllers
{
    private $model;
    public function __construct($conn)
    {
        $this->model = new StatisticsModels($conn);
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
