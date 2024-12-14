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
