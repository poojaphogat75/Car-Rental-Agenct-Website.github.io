<!DOCTYPE html>
<html>
<head>
	<title>Booked Cars</title>
	<STYLE>
  	table {border: thick outset; padding 3px}
  	td {border: thin inset; margin: 3px}
	</STYLE>

</head>
<body>
<?php
require("connection.php");
?>
<center><form>
	
</form>
	<table>
	<tr>
	<td><label>Name</label></td>
	<td><label>Email ID</label></td>
	<td><label>Start Date</label></td>
	<td><label>Number of Days</label></td>
</tr>
<tr>
	<td>
		<?php
		$sql ="SELECT `Name` FROM booked_car";
         $result = mysqli_query($con,$sql);
         while ($rows = mysqli_fetch_array($result)){
			$name = $rows['Name'];
			echo "<option value='". $name ."'>" . $name . "</option>";}
		?>
	</td>
	<td>
		<?php
		$sql ="SELECT `Email_id` FROM booked_car";
         $result = mysqli_query($con,$sql);
         while ($rows = mysqli_fetch_array($result)){
			$mail = $rows['Email_id'];
			echo "<option value='". $mail ."'>" . $mail . "</option>";}
		?>
	</td>
	<td>
		<?php
		$sql ="SELECT `Start_Date` FROM booked_car";
         $result = mysqli_query($con,$sql);
         while ($rows = mysqli_fetch_array($result)){
			$Start_Date = $rows['Start_Date'];
			echo "<option value='". $Start_Date ."'>" . $Start_Date . "</option>";}
		?>
	</td>
	<td>
		<?php
		$sql ="SELECT `Days` FROM booked_car";
         $result = mysqli_query($con,$sql);
         while ($rows = mysqli_fetch_array($result)){
			$day = $rows['Days'];
			echo "<option value='". $day ."'>" . $day . "</option>";}
		?>
	</td>
	
</tr>
</table>
<input type="button" name="back" onclick="history.back()" value="Back">

</center>  
</body>
</html>