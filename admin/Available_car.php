<!DOCTYPE html>
<html>
<head>
	<title>Available Cars</title>
</head>
<body>
<?php
require("connection.php");
?>
<center>
	<table>
	<tr>
	<td><label>Vehicle Model</label></td>
	<td><label>Vehicle Number</label></td>
	<td><label>Seating Capacity</label></td>
	<td><label>Rent Per Day</label></td>
</tr>
<tr>
	<td>
		<?php
		$sql ="SELECT `Vehicle_Model` FROM add_car";
         $result = mysqli_query($con,$sql);
         while ($rows = mysqli_fetch_array($result)){
			$veh_mod = $rows['Vehicle_Model'];
			echo "<option value='". $veh_mod ."'>" . $veh_mod . "</option>";}
		?>
	</td>
	<td>
		<?php
		$sql ="SELECT `Vehicle_Number` FROM add_car";
         $result = mysqli_query($con,$sql);
         while ($rows = mysqli_fetch_array($result)){
			$veh_num = $rows['Vehicle_Number'];
			echo "<option value='". $veh_num ."'>" . $veh_num . "</option>";}
		?>
	</td>
	<td>
		<?php
		$sql ="SELECT `Seating_Capacity` FROM add_car";
         $result = mysqli_query($con,$sql);
         while ($rows = mysqli_fetch_array($result)){
			$seat = $rows['Seating_Capacity'];
			echo "<option value='". $seat ."'>" . $seat . "</option>";}
		?>
	</td>
	<td>
		<?php
		$sql ="SELECT `Rent_Per_Day` FROM add_car";
         $result = mysqli_query($con,$sql);
         while ($rows = mysqli_fetch_array($result)){
			$rent = $rows['Rent_Per_Day'];
			echo "<option value='". $rent ."'>" . $rent . "</option>";}
		?>
	</td>
</tr>
</table>
</center>       
</body>
</html>