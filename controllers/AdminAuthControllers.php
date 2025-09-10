<?php
require_once __DIR__ . '/../models/AdminModels.php';
class AdminAuthControllers
{
    private $model;
    public function __construct($pdo)
    {
        $this->model = new AdminModels($pdo);
    }

    public function login($adminName, $pwd)
    {
        $result = $this->model->login($adminName, $pwd);
        if ($result) {
            $_SESSION["admin"] = $adminName;
            header("Location: ../../admin.php");
            exit();
        } else {
            echo "Sai tài khoản hoặc mật khẩu";
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header("Location: login.php");
        exit();
    }
}
