<?php
session_start();
if (!isset($_SESSION['matric'])) {
    header("Location: login.php?msg=Please+login+first");
    exit();
}

include 'Database.php';
include 'User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$user->updateUser($_POST['matric'], $_POST['name'], $_POST['role']);

header("Location: read.php?msg=User+Updated");
exit();
?>
