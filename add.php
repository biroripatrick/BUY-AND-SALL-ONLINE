<?php
include('conecte.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>add</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center>
<div id="container" style="background-color:pink;">
<form  action="add.php" method="POST"><br>
	<br>
	<input type="text" name="Name"placeholder="enter your names here" size="40" required><br>
	<br>
	<input type="email" name="email"placeholder="enter your email here" size="40"required><br>
	<br>
	<input type="text" name="phone"placeholder="enter your phone number here" size="40"required><br>
	<br>
	<input type="submit" name="save" value="save"><input type="submit" name="save" value="reset">
          </form>
          <?php 
          if(isset($_POST['save'])){
           $Name=$_POST['Name'];  
           $email=$_POST['email'];  
           $phone=$_POST['phone'];
$conn=mysqli_connect("localhost","root","", "employers");
$sql="INSERT INTO labour (Name,email,phone) VALUES ('$Name','$email','$phone')";  
           if(mysqli_query($conn,$sql)){
               echo"saved";  
          }
          else{
          	echo"error".$sql.mysqli_error($conn);
          } 
    }
 ?> 
</body>
</html>