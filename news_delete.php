<?php
include("head.php");
$id=$_GET["id"];

$link=mysqli_connect("localhost","root","","news");
$result=mysqli_query($link,"DELETE FROM `newssave` WHERE `id`=$id");
mysqli_close($link);
if($result===true){
    echo("deleted");
}else{
    echo("not deleted");
}

?>

<?php
include("foot.php");
?>