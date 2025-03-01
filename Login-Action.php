<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["Password"])) {
        $username = $_POST["username"];
        $password = $_POST["Password"];

        $connect = mysqli_connect("localhost", "root", "", "signup");

        if (!$connect) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $username = mysqli_real_escape_string($connect, $username);
        $password = mysqli_real_escape_string($connect, $password);

        $query = mysqli_query($connect, "SELECT * FROM `login` WHERE `Username` = '$username' AND `Password` = '$password'");
        $row = mysqli_fetch_array($query);

        if ($row) {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $row['role'];

            header("Location: index.php");
            exit();
        } else {
            echo "Login failed. <a href='login.php'>Try again</a>";
        }

        mysqli_close($connect);
    } else {
        echo "Username and password are required. <a href='login.php'>Try again</a>";
    }
} else {
    echo "Invalid request. <a href='login.php'>Try again</a>";
}
?>