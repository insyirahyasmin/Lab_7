<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>User Management System</h1>

    <nav>
        <a href="index.php">Home</a>
        <?php if (!isset($_SESSION['matric'])): ?>
            <a href="login.php">Login</a>
            <a href="register_form.php">Register</a>
        <?php else: ?>
            <a href="read.php">View Users</a>
            <a href="logout.php" class="btn">Logout (<?php echo $_SESSION['name']; ?>)</a>
        <?php endif; ?>
    </nav>
</header>

<main>
