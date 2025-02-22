<?php
include("head.php");
?>

<div class="container mt-4">
    <h2 class="text-center">Add News</h2>
    <form action="news-add-action.php" method="post" enctype="multipart/form-data" class="row g-3">
        <div class="col-12">
            <label for="image" class="form-label">Upload Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="col-12">
            <input type="text" name="title" class="form-control" placeholder="Title">
        </div>
        <div class="col-12">
            <textarea name="text" class="form-control" placeholder="News Text"></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary w-100">Save</button>
        </div>
    </form>
</div>

<?php
include("foot.php");
?>
