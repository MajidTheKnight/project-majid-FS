<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['role']) || ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'owner')) {
    header("Location: index.php");
    exit();
}

include("head.php");
?>

<div class="row">
    <p class="col d-flex justify-content-center">
        <a href="news-add.php">+AddContent+</a>
    </p>
</div>

<?php
$link = mysqli_connect("localhost", "root", "", "news");
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($link, "SELECT * FROM `newssave`");
if (!$result) {
    die("Query failed: " . mysqli_error($link));
}
?>

<div class="container mt-4">
    <h2 class="text-center">Latest News</h2>
    <div class="row">
        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo $row["imageurl"]; ?>" class="card-img-top img-fluid imgsize" alt="News Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row["title"]; ?></h5>
                        <p class="card-text"><?php echo $row["text"]; ?></p>
                        <a href="news_edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-success">Edit</a>
                        <a href="news_delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php
mysqli_close($link);
include("foot.php");
?>