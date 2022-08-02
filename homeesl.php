<?php

session_start();
echo"Hi ".$_SESSION['email'].",";
?>
<!DOCTYPE html>
<html>
<head>
<title>Email</title>
<link rel="stylesheet" type="text/css" href="styles3.css">

<style>
body {background-color: slateblue;}

</style>
</head>

<body>


<h2 ><center>Send email:<center></h2>
<section class='section3'>
<form action="insertesli.php" method="POST">
  <label for="fname">To:</label><br>
  <input type="email" id="fname" name="to" placeholder="Enter to addresss" required><br>
  <label>text:</label><br>
  <input type="text" name="text" placeholder="Enter text" required><br>

  
  <input type="submit" value="Submit"><br>
<a style="color:red" href="inbox.php">Inbox</a><br>
<a style="color:red" href="sent.php">Sent email</a>
</form> 
</section>


</body>
</html>
