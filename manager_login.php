<?php
include 'db.php';
session_start();
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$password = $_POST['password'];
	echo $name;
	echo $password;
	$sql = "SELECT * FROM manager WHERE username='$name' AND password='$password'";
	$query = mysqli_query($conn, $sql);
	// $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
	$result = mysqli_fetch_assoc($query);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
	if ($result) {
		
		$_SESSION['mid'] = $result['id'];
		$_SESSION['mname'] = $result['username'];
		// echo $_SESSION['mid'];
		// echo $_SESSION['mname'];
		// print_r($result);
		// echo '<br>';
		// echo $result['id'];
		// echo '<br>';
		// echo $result['name'];
		// echo '<br>';
		// echo $result['email'];
		// echo '<br>';
		// echo $result['phone'];
		// echo '<br>';
		// echo $result['location'];
		header("location:manager_index.php");
	} else {
		echo "<script>alert('Invalid Username or Password')</script>";
	}
}
// if(isset($_SESSION['id']))
// {
// 	header("location:admin_index.php");
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Manager Login </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content=" Furnish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script>
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!-- css files -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
	<link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->

	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">

	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //google fonts -->

</head>

<body>
	<!-- //header -->
	<header class="py-sm-3 pt-3 pb-2" id="home">
		<div class="container-fluid">
			<!-- nav -->
			<div class="top d-md-flex">
				<div id="logo" style="width: 21%;">
					<h1> <a href="index.html"><img src="images/logo.png"></a></h1>
				</div>

				<!-- div class="forms mt-md-0 mt-2">
				<a href="login.html" class="btn"><span class="fa fa-user-circle-o"></span> Sign In</a>
				<a href="register.html" class="btn"><span class="fa fa-pencil-square-o"></span> Create Account</a>
			</div> -->
			</div>


		</div>
	</header>
	<!-- //header -->
	<section class="content-outer">
		<!-- login -->
		<section class="login py-5">
			<div class="container">
				<h3 class="heading mb-sm-5 mb-4 text-center">Login To Manager</h3>

				<div class="login-form">
					<form action="manager_login.php" method="post">
						<div class="row">
							<div class="col-md-4 text-md-right">
								<label>Username or email:</label>
							</div>
							<div class="col-md-8">
								<input type="text" placeholder="enter username or email id" required="" name="name">
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-4 text-md-right">
								<label>Password:</label>
							</div>
							<div class="col-md-8">
								<input type="password" placeholder="Enter your Password" required="" name="password">
							</div>
						</div>

						<div class="row mt-3">
							<div class="col-md-8 offset-md-4">
								<button class="btn" type="submit" name="submit">Submit</button>
							</div>
						</div>
					</form>
				</div>

			</div>
		</section>
		<!-- //login -->

	</section>

	<!-- copyright -->
	<section class="copy-right py-4">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<p class="">© 2020 Bus Reservation. All rights reserved | Design by Acumen
					</p>
				</div>

			</div>
		</div>
	</section>
	<!-- copyright -->

	<!-- move top icon -->
	<a href="#home" class="move-top text-center"></a>
	<!-- //move top icon -->

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body>

</html>