<!DOCTYPE html>
<html>
<head>
<title>Inbox</title>
<link rel="stylesheet" type="text/css" href="styles3.css">

</head>

<body>

<?php
include "config.php";
session_start();
echo"Hi ".$_SESSION['email'].",";

$t=$_SESSION['email'];



$sql="select * from inbox where from1='$t' ";
$result=mysqli_query($conn,$sql);


$count=mysqli_num_rows($result);

if ($count>0){

echo "<table border='1'>

<tr>

<th>From</th>

<th>To</th>

<th>Message</th>



</tr>";

 

while($row = mysqli_fetch_assoc($result))

  {

  echo "<tr>";

  echo "<td>" . $row['from1'] . "</td>";

  echo "<td>" . $row['to1'] . "</td>";

  echo "<td>" . $row['text'] . "</td>";

  

  echo "</tr>";

  }

echo "</table>";

$_SESSION['email']=$t;
}
else{
header("location:homeesl.php");
}


?>


<p>Cick the button to print the page.</p>

<button onclick="window.print()">Print this page</button>

</body>
</html>



