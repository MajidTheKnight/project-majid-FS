<?php
include("head.php");

$link = mysqli_connect("localhost", "root", "", "news");
$result = mysqli_query($link, "SELECT * FROM `newssave`");
mysqli_close($link);
?>

<div class="row">
    <p class="col d-flex and justify-content-center">
        <a href="news-add.php">+AddContent+</a>
    </p>
</div>

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
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include("foot.php"); ?>
