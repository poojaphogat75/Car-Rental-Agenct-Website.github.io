<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><form name="addCar" action="addCar.php" method="POST"><table>
	<tr>
		<td><label>Vehicle Model</label></td>
	</tr>
	<tr>
		<td><input type="text" name="vehicle" id="veh"></td>
	</tr>
	
	<tr>
		<td><label>Vehicle Number</label></td>
	</tr>
	<tr>
		<td><input type="int" name="veh_num" id="vehicle_num"></td>
	</tr>
	<tr>
		<td><label>Seating Capacity</label></td>
	</tr>
	<tr>
		<td><input type="int" name="seat" id="seating_cap"></td>
	</tr>
	<tr>
		<td><label>Rent per Day</label></td>
	</tr>
	<tr>
		<td><input type="int" name="rent" id="rent_day"></td>
	</tr>
	<tr>
		<td><input type="submit" name="Add Car" value="Add Car"/></td>
		<td><input type="button" name="back" value="Back" onclick="location.href='mainPage.html'"></td>
	</tr>
	</table>
</form>

</center>
</body>
</html>