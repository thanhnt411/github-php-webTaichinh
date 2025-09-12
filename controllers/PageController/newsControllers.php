<?php
require_once __DIR__ . "/../../models/PostModels/newsModels.php";
class NewsControllers
{
    private $model;
    public function __construct($conn)
    {
        $this->model = new NewsModels($conn);
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
