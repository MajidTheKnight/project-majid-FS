<?php include("head.php"); ?>

<main class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card signup-card">
                <div class="card-header signup-header">
                    <h1 class="card-title text-center signup-title">Sign Up</h1>
                </div>
                <div class="card-body">
                    <form method="post" action="signup.php" onsubmit="return validateForm()">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control signup-input" id="username" name="username" placeholder="Enter your username" required>
                        </div>

                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" class="form-control signup-input" id="age" name="age" placeholder="Enter your age" required>
                        </div>

                        <div class="mb-3 position-relative">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control signup-input" id="password" name="password" placeholder="Enter your password" required>
                            <i class="fas fa-eye position-absolute end-0 top-50 translate-middle-y me-3" style="cursor: pointer;" onclick="togglePassword('password')"></i>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control signup-input" id="email" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn signup-button">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $age = intval($_POST['age']);
    $password = $_POST['password']; 
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    $connect = mysqli_connect("localhost", "root", "", "signup");

    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $check_query = "SELECT * FROM `login` WHERE `Username` = '$username' OR `Email` = '$email'";
    $check_result = mysqli_query($connect, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        echo "<div class='alert alert-danger text-center'>Username or email already exists!</div>";
    } else {
        $query = "INSERT INTO `login` (`Username`, `Age`, `Password`, `Email`, `role`) 
                  VALUES ('$username', '$age', '$password', '$email', 'member')";

        if (mysqli_query($connect, $query)) {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = 'member';

            header("Location: index.php");
            exit();
        } else {
            echo "<div class='alert alert-danger text-center'>Error: " . mysqli_error($connect) . "</div>";
        }
    }

    mysqli_close($connect);
}
?>

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

<?php include("foot.php"); ?>