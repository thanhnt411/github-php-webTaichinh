<?php
require_once "models/StudentModels.php";

class StudentController
{
    private $model;
    public function __construct($pdo)
    {
        $this->model = new Models($pdo);
    }

    public function index($path)
    {
        $result = $this->model->getAll();
        include $path;
    }

    public function addForm()
    {
        include "views/student_add.php";
    }

    public function add($name, $email, $age)
    {
        $this->model->add($name, $email, $age);
        header("Location: index.php");
    }

    public function editForm($id)
    {
        $result = $this->model->getById($id);
        include "views/student_edit.php";
    }

    public function update($id, $name, $email, $age)
    {
        $this->model->update($id, $name, $email, $age);
        header("Location: index.php");
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header("Location: index.php");
    }
}
