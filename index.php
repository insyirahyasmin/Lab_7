<?php 
// Start session once
session_start();

// Redirect if not logged in
if (!isset($_SESSION['matric'])) {
    header("Location: login.php?msg=Please+login+first");
    exit();
}

include 'header.php'; 
?>

<div class="container">
    <h2 class="subtitle">Welcome to the User Management System</h2>
    
    <div class="buttons">
        <a href="read.php" class="btn">View Users</a>
    </div>
</div>

<?php include 'footer.php'; ?>
