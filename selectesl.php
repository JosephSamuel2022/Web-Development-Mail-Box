<?php

session_start();

include "config.php";

$un=$_POST['fname'];
$pwd=$_POST['password'];
$em=$_POST['email'];


$sql="select * from userlistesl where name='$un' and password='$pwd' and email='$em'";
$result=mysqli_query($conn,$sql);

$count=mysqli_num_rows($result);

if ($count>0){

header("location: homeesl.php");

$_SESSION['email']=$em;
}
else{
header("location:end sem lab.php");
}
?>
