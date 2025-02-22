<?php
include("head.php");
$id = $_GET["id"];

$link = mysqli_connect("localhost", "root", "", "news");
$result = mysqli_query($link, "SELECT * FROM `newssave` WHERE `id`='$id'");
$row = mysqli_fetch_array($result);
mysqli_close($link);
?>

<div class="container mt-4">
    <h2 class="text-center">Edit News</h2>
    <form action="news-edit-action.php" method="post" enctype="multipart/form-data" class="row g-3">
        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
        <div class="col-12">
            <label for="image" class="form-label">Upload New Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="col-12">
            <input type="text" name="title" class="form-control" value="<?php echo $row["title"]; ?>" placeholder="Title">
        </div>
        <div class="col-12">
            <textarea name="text" class="form-control"><?php echo $row["text"]; ?></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success w-100">Save</button>
        </div>
    </form>
</div>

<?php include("foot.php"); ?>
