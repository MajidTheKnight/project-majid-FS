<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'owner') {
    header("Location: index.php");
    exit();
}

$connect = mysqli_connect("localhost", "root", "", "signup");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT id, Username, Email, role FROM `login`";
$result = mysqli_query($connect, $query);
if (!$result) {
    die("Query failed: " . mysqli_error($connect));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Panel</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="project.css">
</head>
<body>
    <?php include("head.php"); ?>

    <div class="container mt-5">
        <h2 class="text-center">Owner Panel</h2>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['Username']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['role']; ?></td>
                        <td>
                            <?php if ($row['role'] !== 'owner') { ?>
                                <form method="post" action="update_role.php" style="display:inline;">
                                    <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                                    <select name="role" class="form-select form-select-sm">
                                        <option value="admin" <?php echo $row['role'] === 'admin' ? 'selected' : ''; ?>>Admin</option>
                                        <option value="member" <?php echo $row['role'] === 'member' ? 'selected' : ''; ?>>Member</option>
                                    </select>
                                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                </form>
                            <?php } ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php include("foot.php"); ?>
</body>
</html>

<?php
mysqli_close($connect);
?>