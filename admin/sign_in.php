<!DOCTYPE html>
<html>
<?php
	require("connection.php");
?>
<head>
	<title>Sign In Admin</title>

</head>
<body>
<center><form name="sign_in" method="POST"><table>
	<tr>
		<td><label>USERNAME</label></td>
	</tr>
	<tr>
		<td><input type="email" name="username" id="user"></td>
	</tr>
	<tr>
		<td><label>PASSWORD</label></td>
	</tr>
	<tr>
		<td><input type="password" name="pass" id="pswd"></td>
	</tr>
</table>
	<button type="submit" name="login">LOGIN</button>
</form>
<p><a href="CarRentalAgency.html">Back to Home</a></p>
</center>
</body>
<?php
if (isset($_POST['login'])) {
	# code...
	$query = "SELECT * FROM `car_agency` WHERE `username` = $_POST[username] AND `password` = $_POST[pass]";
	$result = mysqli_query($con, $query);
	if (mysqli_num_rows($result)==1)
	{
		# code...
		echo "correct";
	}
	else
	{
		echo "correct";
	}
}
?>
</html>