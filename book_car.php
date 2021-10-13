<?php
require("connection.php");

$Name = $_POST['username'];
$Email_id = $_POST['mail'];
$Start_date = $_POST['date'];
$Days = $_POST['days'];

$sql = "INSERT INTO booked_car(Name, Email_id,Start_date,Days) VALUES('$Name', '$Email_id', '$Start_date', '$Days')";

if (mysqli_query($con,$sql))
{ echo "Booking Successfully";}
else
{ echo "Error inserting data: ". mysqli_error($con). "<br>";}

mysqli_close($con);
?>
