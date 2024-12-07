<?php
include("head.html");
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    echo "<h2>Signup Successful!</h2>";
    echo "<p>Username: " . htmlspecialchars($username) . "</p>";
    echo "<p>Age: " . htmlspecialchars($age) . "</p>";
    echo "<p>Phone Number: " . htmlspecialchars($phone) . "</p>";
    echo "<p>Email: " . htmlspecialchars($email) . "</p>";
}
?>

<html>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var age = document.getElementById("age").value;
            var phone = document.getElementById("phone").value;
            var email = document.getElementById("email").value;
            
            if (username == "" || age == "" || phone == "" || email == "") {
                alert("All fields must be filled out");
                return false;
            }


            alert("You have been signed up!");
            return true;
        }
    </script>
</head>
<body>
    <h1>Signup</h1>
    <form method="post" action="signup.php" onsubmit="return validateForm()">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="age">Age:</label><br>
        <input type="text" id="age" name="age" required><br><br>
        
        <label for="phone">Phone Number:</label><br>
        <input type="text" id="phone" name="phone" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" required><br><br>
        
        <button type="submit">Confirm</button>
    </form>
</body>
</html>

<?php
include("foot.html");
?>
