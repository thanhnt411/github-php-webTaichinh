<?php
class Models
{
    private $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll()
    {
        return $this->pdo->query("SELECT * FROM student");
    }

    public function getById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM student WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $students = $stmt->fetch(PDO::FETCH_ASSOC);
        return $students;
    }

    public function add($name, $email, $age)
    {
        $stmt = $this->pdo->prepare("INSERT INTO student(name, email, age) VAlUES (:name, :email, :age)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":age", $age);
        return $stmt->execute();
    }

    public function update($id, $name, $email, $age)
    {
        $stmt = $this->pdo->prepare("UPDATE student SET name = :name, email = :email , age = :age WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":age", $age);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM student WHERE id = :id");
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}
