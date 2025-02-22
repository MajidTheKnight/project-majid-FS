<?php
include("head.php");

$image = $_FILES["image"] ["name"];
$title = $_POST["title"];
$text = $_POST["text"];

$imageurl = "images/".$image;
move_uploaded_file($_FILES["image"] ["tmp_name"],$imageurl);


$link = mysqli_connect("localhost","root","","news");
$result = mysqli_query($link,"INSERT INTO `newssave`(`imageurl`, `title`, `text`)
 VALUES ('$imageurl','$title','$text')");
 mysqli_close($link);
 if($result === true){
echo("saved");
}
else{
    echo("not saved");
}
?>

<div class="row">

<p class="col" >thank you for co operating fellow user</p>

</div>

<?php
include("foot.php")
?>