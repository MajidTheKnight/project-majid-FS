<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'] . "! <a href='logout.php'>Logout</a>";
} else {
    echo "You are not logged in. <a href='login.php'>Login</a>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Popular Game Genres</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="project.css">
</head>
<body>
    <div id="divasli">
        <div id="bodydiv">
            <header>
                <div id="title">
                    <p class="display-4 text-center ">Game Genre World</p>
                </div>   
                <div>
                    <ul class="nav justify-content-center bg-black">
                        <li class="nav-item"><a href="index.php" class="nav-link text-white">Home</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link text-white">About</a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link text-white">Contact</a></li>
                        <li class="nav-item"><a href="project.php" class="nav-link text-white">Genres</a></li>
                        <li class="nav-item"><a href="signup.php" class="nav-link text-white">Sign Up</a></li>
                        <li class="nav-item"><a href="Login.php" class="nav-link text-white">Login</a></li>
                        <li class="nav-item"><a href="Logout.php" class="nav-link text-white">Logout</a></li>

                    </ul>
                </div>
            </header>
        </div>
    </div>
