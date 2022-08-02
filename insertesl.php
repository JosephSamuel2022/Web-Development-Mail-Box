<?php
include "config.php";

$un=$_POST['fname'];
$pwd=$_POST['password'];
$email=$_POST['email'];

$error=0;

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email is a valid email address");
} 
else {
    $error=1;
    echo("$email is not a valid email address");
}

if(strlen($un)==0){
	$error=1;
	echo("Username cannot be empty");
}
else{
	
echo"Valid username";
}

if(strlen($pwd)==0){
	$error=1;
	echo("Password cannot be empty");
}
else{
	
echo"Valid password";
}

if ($error==0){


$sql="insert into userlistesl (name,password,email) values('$un','$pwd','$email')";

$result=mysqli_query($conn,$sql);

if ($result){
header("location:end sem lab.php");
}
else{
echo"error";
}
}
else{
echo"form data not submitted";

}


?>

