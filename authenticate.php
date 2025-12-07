<?php
session_start();
include 'Database.php';
include 'User.php';

if (isset($_POST['submit'])) {

    $database = new Database();
    $db = $database->getConnection();

    $matric = $db->real_escape_string($_POST['matric']);
    $password = $_POST['password'];

    $user = new User($db);
    $details = $user->getUser($matric);

    if ($details && password_verify($password, $details['password'])) {

        $_SESSION['matric'] = $details['matric'];
        $_SESSION['name'] = $details['name'];
        $_SESSION['role'] = $details['role'];

        header("Location: index.php");
        exit();
    }

    header("Location: login.php?msg=Login+Failed");
    exit();
}
?>
