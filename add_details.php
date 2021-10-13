<?php
require ('connection.php');

$name = $_POST['username'];
$email = $_POST['mail'];
$pass = $_POST['pswd'];
$address = $_POST['add'];
$phone = $_POST['phone'];
$sql = "INSERT INTO user_register(Name, Email_ID, Password,Address,Mobile_no) VALUES('$name', '$email', '$pass', '$address', '$phone')";

if (mysqli_query($con,$sql))
{ echo "You have registered successfully!";}
else
{ echo "Error inserting data: ". mysqli_error($con). "<br>";}

mysqli_close($con);
?>