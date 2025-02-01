<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="project.css">
</head>
<body>
    <div id="divasli">
        <div id="bodydiv">
            <header>
                <div>
                    <ul class="nav justify-content-center bg-black">
                        <li class="nav-item"><a href="index.php" class="nav-link text-white">Home</a></li>
                        <li class="nav-item"><a href="signup.php" class="nav-link text-white">Sign Up</a></li>
                    </ul>
                </div>
            </header>
        </div>
    </div>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gaming Login</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="Login.css">

</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Login to Your Account</h2>
            <form method="post" action="login-Action.php">
                <div class="textbox">
                    <input type="text" placeholder="Username" name="username" required>
                </div>
                <div class="textbox">
                    <input type="password" placeholder="Password" name="Password" required>
                </div>
                <button type="submit" class="btn">Login</button>
                <p class="signup-link">Don't have an account? <a id = "signup" href="signup.php">Sign Up</a></p>
            </form>
        </div>
    </div>
</body>
</html>
