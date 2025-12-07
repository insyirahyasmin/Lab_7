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
$data = $user->getUser($matric);

include 'header.php';
?>

<div class="container">
    <h2 class="subtitle">Update User</h2>

    <form action="update.php" method="post">
        <label>Matric:</label>
        <input type="text" name="matric" value="<?= $data['matric']; ?>" readonly>

        <label>Name:</label>
        <input type="text" name="name" value="<?= $data['name']; ?>" required>

        <label>Role:</label>
        <select name="role">
            <option value="lecturer" <?= $data['role']=="lecturer"?"selected":""; ?>>Lecturer</option>
            <option value="student" <?= $data['role']=="student"?"selected":""; ?>>Student</option>
        </select>

        <input type="submit" value="Update">
    </form>
</div>

<?php include 'footer.php'; ?>
