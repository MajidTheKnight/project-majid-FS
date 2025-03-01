<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="project.css">
    <link rel="stylesheet" href="Login.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

    <div class="login-container">
        <div class="login-box">
            <h2>Login to Your Account</h2>
            <form method="post" action="login-Action.php">
                <div class="textbox">
                    <input type="text" placeholder="Username" name="username" required style="direction: ltr;">
                </div>
                <div class="textbox position-relative">
                    <input type="password" id="loginPassword" placeholder="Password" name="Password" required style="direction: ltr;">
                    <i class="fas fa-eye position-absolute end-0 top-50 translate-middle-y me-3" style="cursor: pointer;" onclick="togglePassword('loginPassword')"></i>
                </div>
                <button type="submit" class="btn">Login</button>
                <p class="signup-link">Don't have an account? <a id="signup" href="signup.php">Sign Up</a></p>
            </form>
        </div>
    </div>

    <script>
    function togglePassword(fieldId) {
        const passwordField = document.getElementById(fieldId);
        const eyeIcon = document.querySelector(`#${fieldId} + i`);

        if (passwordField.type === "password") {
            passwordField.type = "text";
            eyeIcon.classList.remove("fa-eye");
            eyeIcon.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "password";
            eyeIcon.classList.remove("fa-eye-slash");
            eyeIcon.classList.add("fa-eye");
        }
    }
    </script>
</body>
</html>