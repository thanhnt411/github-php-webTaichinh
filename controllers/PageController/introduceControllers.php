<?php
require_once __DIR__ . "/../../models/PostModels/introducesModels.php";
class IntroducesControllers
{
    private $model;
    public function __construct($conn)
    {
        $this->model = new IntroducesModels($conn);
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
