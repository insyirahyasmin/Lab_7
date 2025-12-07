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
$result = $user->getUsers();

include 'header.php';
?>

<div class="container">
    <h2 class="subtitle">Registered Users</h2>

    <table>
        <tr>
            <th>Matric</th>
            <th>Name</th>
            <th>Role</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['matric']; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $row['role']; ?></td>
                <td><a class="btn" href="update_form.php?matric=<?= $row['matric']; ?>">Update</a></td>
                <td><a class="btn" href="delete.php?matric=<?= $row['matric']; ?>">Delete</a></td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>

<?php include 'footer.php'; ?>
