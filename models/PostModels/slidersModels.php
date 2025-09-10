<?php
class SlidersModels
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getAll()
    {
        return $this->conn->query("SELECT * FROM sliders");
    }

    public function getById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM sliders WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add() {}

    public function update() {}

    public function delete($id) {}
}
