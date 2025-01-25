<?php include("head.html"); ?>

<main class="container mt-5">
    <h1 class="text-center">Signup</h1>
    <form method="post" action="signup.php" onsubmit="return validateForm()">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="text" class="form-control" id="age" name="age" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Confirm</button>
    </form>
</main>

<?php include("foot.html"); ?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $connect = mysqli_connect("localhost", "root", "", "signup");

    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "INSERT INTO `login` (`Username`, `Age`, `PhoneNumber`, `Email`) 
              VALUES ('$username', '$age', '$phone', '$email')";

    if (mysqli_query($connect, $query)) {
        echo "Signup successful!";

    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
}
?>

