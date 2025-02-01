<?php
session_start(); 

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

    echo "Session set: " . $_SESSION['username'];
    
    header("Location: index.php");
    exit();
} else {
    echo "Login failed. <a href='login.php'>Try again</a>";
}

mysqli_close($connect);
?>
