<?php
session_start();

if ($_SESSION['role'] !== 'owner') {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $role = $_POST['role'];

    $connect = mysqli_connect("localhost", "root", "", "signup");
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "UPDATE `login` SET `role` = '$role' WHERE `id` = '$user_id'";
    if (mysqli_query($connect, $query)) {
        header("Location: owner_panel.php");
        exit();
    } else {
        echo "Error updating role: " . mysqli_error($connect);
    }

    mysqli_close($connect);
} else {
    echo "Invalid request.";
}
?>