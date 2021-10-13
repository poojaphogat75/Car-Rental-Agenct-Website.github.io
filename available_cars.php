<?php
require("connection.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Car Rental Agency</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to fontawesome CSS-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
		<div class="container panel-margin">
			<div class="jumbotron">
				<h1>Welcome to our Car Rental Agency</h1>
				<p>We have the best Car for rent.</p>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/car3.jpg" alt="car">
						<div class="caption">
							<h3>Nexa</h3>
							<p>Vechile Number:<i class="number_format"></i> 3456</p>
							<p>Seating Capacity:<i class="number_format"></i>3</p>
							<p>Rent Per Day:<i class="fa fa-rupee"></i>20</p>
							
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<input type="button" class="btn btn-primary"  value="Book Now" onclick="location.href='login.php'">
							
							<?php }else{ ?>
								<?php if(check_if_book_now(1)){ ?>
									<a href="booking_form.html" class="btn btn-success" disabled>Booked</a>
								<?php }else{ ?>
										<a href="Book_now.php?id=1" name="add" value="add" class"btn btn-primary"></a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/car5.jpg" alt="car">
						<div class="caption">
							<h3>Maruti</h3>
							<p>Vechile Number:<i class="number_format"></i>9018</p>
							<p>Seating Capacity:<i class="number_format"></i>7</p>
							<p>Rent Per Day:<i class="fa fa-rupee"></i>100</p>
							
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<input type="button" class="btn btn-primary"  value="Book Now" onclick="location.href='login.php'">
							
							<?php }else{ ?>
								<?php if(check_if_book_now(1)){ ?>
									<a href="booking_form.html" class="btn btn-success" disabled>Booked</a>
								<?php }else{ ?>
										<a href="Book_now.php?id=1" name="add" value="add" class"btn btn-primary"></a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/car4.jpg" alt="car">
						<div class="caption">
							<h3>Nissan</h3>
							<p>Vechile Number:<i class="number_format"></i>761829</p>
							<p>Seating Capacity:<i class="number_format"></i>8</p>
							<p>Rent Per Day:<i class="fa fa-rupee"></i>200</p>
							
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<input type="button" class="btn btn-primary"  value="Book Now" onclick="location.href='login.php'">
							<?php }else{ ?>
								<?php if(check_if_book_now(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Book Now</a>
								<?php }else{ ?>
										<a href="Book_now.php?id=1" name="add" value="add" class"btn btn-primary"></a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/car9.jpeg" alt="car">
						<div class="caption">
							<h3>Audi</h3>
							<p>Vechile Number:<i class="number_format"></i> 7856</p>
							<p>Seating Capacity:<i class="number_format"></i>4</p>
							<p>Rent Per Day:<i class="fa fa-rupee"></i>500</p>
							
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<input type="button" class="btn btn-primary"  value="Book Now" onclick="location.href='login.php'">
							
							<?php }else{ ?>
								<?php if(check_if_book_now(1)){ ?>
									<a href="booking_form.html" class="btn btn-success" disabled>Booked</a>
								<?php }else{ ?>
										<a href="#?id=1" name="add" value="add" class"btn btn-primary"></a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<input type="button" name="book" value="BOOK NOW" onclick="location.href='booking_form.html'">
		<input type="button" name="back" value="Back" onclick="location.href='CarRentalAgency.html'">

	</body>
</html>