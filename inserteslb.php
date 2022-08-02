<?php
include "config.php";
session_start();

$f='annauniv@gmail.com';

$text=$_POST['text'];

$sql="select * from userlistesl";
$result=mysqli_query($conn,$sql);

$count=mysqli_num_rows($result);


if ($count>0){
while($row = mysqli_fetch_assoc($result))

  {

  

   $a=$row['email'] ;

   $sql1="insert into inbox (from1,to1,text) values('$f','$a','$text')";

$result1=mysqli_query($conn,$sql1);

if ($result1){
header("location:broadcast.php");
}
else{
echo"error";
}

  



  }
  }



?>
