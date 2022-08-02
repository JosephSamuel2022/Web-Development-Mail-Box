<?php
include "config.php";
session_start();

$f=$_SESSION['email'];
$to=$_POST['to'];
$text=$_POST['text'];

$sql="insert into inbox (from1,to1,text) values('$f','$to','$text')";

$result=mysqli_query($conn,$sql);

if ($result){
header("location:homeesl.php");
}
else{
echo"error";
}
?>
