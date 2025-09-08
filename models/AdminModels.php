<?php
class AdminModels
{
    private $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function login($adminName, $pwd)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE adminName = :adminName AND pwd = :pwd");
        $stmt->bindParam(":adminName", $adminName);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
