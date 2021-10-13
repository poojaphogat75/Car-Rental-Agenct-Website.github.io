<?php 

$host="localhost";
$user="root";
$password="";
$db="carrent";

$con=mysqli_connect($host,$user,$password,$db);


if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $pass=$_POST['password'];
    
    $sql="select * from user_register where Email_ID='".$uname."' AND Password='".$pass."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Data";
        exit();
    }
        
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="css\style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body><center>
	<div class="container">
		<form method="POST" action="booking_form.html">
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div><br>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div><br>
			<div><input type="submit" type="submit" value="LOGIN" class="btn-login"/></div><br>
			<div><input type="button" name="back" value="Cancel" onclick="location.href='CarRentalAgency.html'"></div>
			<br>
			<a href="forgot_Pss.html">Forgot Password?</a>
		</form>
	</div></center>
</body>
</html>

