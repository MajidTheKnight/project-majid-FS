<?php
include("head.php");
$image=$_FILES["image"]["name"];
$title=$_POST["title"];
$text=$_POST["text"];
$id=$_POST["id"];

$imageurl="images/".$image;
move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);

$link=mysqli_connect("localhost","root","","news");
$result=mysqli_query($link,"UPDATE `newssave` SET `title`='$title',`text`='$text',`imageurl`='$imageurl' 
WHERE `id`='$id'");
mysqli_close($link);
if($result===true){
    echo("saved");
}else{
    echo("not saved");
}

?>

<?php
include("foot.php");
?>