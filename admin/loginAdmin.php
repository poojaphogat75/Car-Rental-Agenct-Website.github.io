<?php 

$host="localhost";
$user="root";
$password="";
$db="carrent";

$con=mysqli_connect($host,$user,$password,$db);


if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $pass=$_POST['password'];
    
    $sql="select * from car_agency where username='".$uname."' AND password='".$pass."' limit 1";
    
    $result=mysqli_query($con, $sql);
    
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
	<script language="javascript">
		function validate_form() 
		{
		if( document.sign_in.username.value == "" ) 
		{
            alert( "Please provide UserName!" );
            document.sign_in.username.focus() ;
            return false;
		}
		if( document.sign_in.password.value == "" ) 
		{
            alert( "Please provide password!" );
            document.sign_in.password.focus() ;
            return false;
		}
		return true;
		}
</script>

</head>
<body>
	<div class="container">
	<img src="image/login.png"/>
		<form method="POST" action="mainPage.html" name="sign_in">
			<div class="form-input" >
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>