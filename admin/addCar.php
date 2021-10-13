<?php
require("connection.php");

$vehicle_model = $_POST['vehicle'];
$vehicle_number = $_POST['veh_num'];
$seat_cap = $_POST['seat'];
$rent_per_day = $_POST['rent'];

$sql = "INSERT INTO add_car(Vehicle_Model, Vehicle_Number, Seating_Capacity, Rent_Per_Day) VALUES('$vehicle_model', '$vehicle_number', '$seat_cap', '$rent_per_day')";

if (mysqli_query($con,$sql))
{ echo mysqli_affected_rows($con) . "rows INSERTED successfully\n";}
else
{ echo "Error inserting data: ". mysqli_error($con). "<br>";}

mysqli_close($con);
?>
