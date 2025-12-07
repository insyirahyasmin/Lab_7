<?php
class User {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getUser($matric) {
        $sql = "SELECT * FROM users WHERE matric='$matric'";
        return $this->conn->query($sql)->fetch_assoc();
    }

    public function getUsers() {
        return $this->conn->query("SELECT * FROM users");
    }

    public function createUser($matric, $name, $password, $role) {
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (matric, name, password, role)
                VALUES ('$matric', '$name', '$hashed', '$role')";
        return $this->conn->query($sql);
    }

    public function updateUser($matric, $name, $role) {
        $sql = "UPDATE users SET name='$name', role='$role'
                WHERE matric='$matric'";
        return $this->conn->query($sql);
    }

    public function deleteUser($matric) {
        return $this->conn->query("DELETE FROM users WHERE matric='$matric'");
    }
}
?>
