<?php
session_start();
include 'header.php';
?>

<div class="container">
    <h2 class="subtitle">Login</h2>

    <?php if (isset($_GET['msg'])) echo "<p class='msg'>".$_GET['msg']."</p>"; ?>

    <form action="authenticate.php" method="post">
        <label>Matric:</label>
        <input type="text" name="matric" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <input type="submit" name="submit" value="Login">
    </form>
</div>

<?php include 'footer.php'; ?>
