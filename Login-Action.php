<?php
$username=$_POST["username"];
$Password=$_POST["Password"];
echo($username );
$connect = mysqli_connect("localhost", "root", "", "signup");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = mysqli_query($connect,"SELECT * FROM `login` WHERE `Username` = '$username' AND `Password` = '$Password'") ;
$row = mysqli_fetch_array($query);

if($row)
{
echo("login succesful");
}

else
{
    echo("Login failed");
}

mysqli_close($connect);

?>