<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Genre World</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="project.css">
    <link rel="stylesheet" href="news.css">
</head>
<body>

<header class="bg-dark text-white p-3">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <h2>Game Genre World</h2>
        <div>
            <?php
            if (isset($_SESSION['username'])) {
                echo "<span>Welcome, " . $_SESSION['username'] . "!</span> ";
                echo "<a href='logout.php' class='btn btn-danger btn-sm'>Logout</a>";
            } else {
                echo "<a href='login.php' class='btn btn-primary btn-sm'>Login</a>";
            }
            ?>
        </div>
    </div>
</header>

<nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="signup.php" class="nav-link">Sign Up</a></li>
                <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="project.php" class="nav-link">Genres</a></li>
                <li class="nav-item"><a href="news.php" class="nav-link">User Content</a></li>
                <li class="nav-item"><a href="management.php" class="nav-link">UC Add</a></li>
                <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            </ul>
        </div>
    </div>
</nav>
