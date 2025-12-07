<?php
session_start();
if (!isset($_SESSION['matric'])) {
    header("Location: login.php?msg=Please+login+first");
    exit();
}

include 'Database.php';
include 'User.php';

$matric = $_GET['matric'];

$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$user->deleteUser($matric);

header("Location: read.php?msg=User+Deleted");
exit();
?>
