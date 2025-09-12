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
        $stmt = $this->conn->query("SELECT * FROM sliders");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM sliders WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function add($title, $description, $image)
    {
        $stmt = $this->conn->prepare("INSERT INTO sliders (title, description, image) VALUES (:title, :description, :image) WHERE id = :id");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image', $image);
        return $stmt->execute();
    }

    public function update($id, $title, $description, $image)
    {
        $stmt = $this->conn->prepare("UPDATE sliders SET title = :title, description = :description, image = :image WHERE id = :id");
        $stmt->bindParam('id', $id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image', $image);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM sliders WHERE id = :id");
        $stmt->bindParam('id', $id);
        return $stmt->execute();
    }
}
