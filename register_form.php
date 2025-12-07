<?php include 'header.php'; ?>

<div class="container">
    <h2 class="subtitle">Register a New User</h2>

    <form action="insert.php" method="post">
        <label>Matric:</label>
        <input type="text" name="matric" required>

        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <label>Role:</label>
        <select name="role" required>
            <option value="">Select</option>
            <option value="lecturer">Lecturer</option>
            <option value="student">Student</option>
        </select>

        <input type="submit" value="Register">
    </form>
</div>

<?php include 'footer.php'; ?>
