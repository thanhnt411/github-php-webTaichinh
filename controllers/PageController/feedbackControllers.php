<?php
require_once __DIR__ . "/../../models/PostModels/feedbacksModels.php";
class FeedbackControllers
{
    private $model;
    public function __construct($conn)
    {
        $this->model = new FeedbacksModels($conn);
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
