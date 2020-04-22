<?php
	include 'db.php';
	session_start();
	if (isset($_POST['submit'])) {
		$starting = $_POST['starting'];
		$destination = $_POST['destination'];
		// echo $name;
		// echo "<br>";
		// echo $password;
		$sql = "SELECT * FROM route WHERE route LIKE'%$starting%' ";
		$result = mysqli_query($conn, $sql);
		
		$queryResult = mysqli_num_rows($result);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
		if($queryResult>0) {
			while($row=mysqli_fetch_assoc($result))
			{
				// print_r($row) ;
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['username'] = $row['username'];
				// echo $_SESSION['user_id'];
				// echo "<br>";
				// echo $_SESSION['username'];
				header("location:user_view_seats.php");
			}
			
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
<title>Bus Reservation | User </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content=" Furnish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
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
			<div id="logo" style="width: 7%;">
				<h1> <a href="index.html"><img src="images/logo.png"></a></h1>
			</div>
			
			<!-- div class="forms mt-md-0 mt-2">
				<a href="login.html" class="btn"><span class="fa fa-user-circle-o"></span> Sign In</a>
				<a href="register.html" class="btn"><span class="fa fa-pencil-square-o"></span> Create Account</a>
			</div> -->
		</div>
		<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
				<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
				<input type="checkbox" id="drop" />
				<ul class="menu">
					<li class="mr-lg-4 mr-2"><a href="user_index.php">Home</a></li>									
					<li class="mr-lg-4 mr-2 active"><a href="user_search.php">Search Bus</a></li>
					<li class="mr-lg-4 mr-2"><a href="user_add_feed.php">Add Feedback</a></li>
					<li class="mr-lg-4 mr-2"><a href="user_viewrec.php">View Tickets</a></li>
					<li class="mr-lg-4 mr-2"><a href="user_pass.php">Change Password</a></li>
					<li class=""><a href="common.php">Logout</a></li>
				</ul>
			</nav>
		<!-- //nav -->
	</div>
</header>

<section class="admin-outer">
<div class="breadcrumb-agile">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Search Bus</li>
		</ol>
	</div>
</div>
<section class="inner-banner">
	<div class="container">
		<h3 class="text-center" >Search Bus</h3>
	</div>
</section>
<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-6">
				<form action="user_search.php" method="post">
					<div class="form-group">
						<input type="text" name="starting" class="form-control" placeholder="Starting" required="">
					</div>
					<div class="form-group">
						<input type="text" name="destination" class="form-control" placeholder="Destination" >
					</div>
						
									
					<div class="form-group">
						<input class="form-control" type="date" placeholder="No. of Seats : 50">
					</div>				
					
					<button type="submit" class="btn btn-success mt-4" name="submit">Search</button>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- copyright -->
<section class="copy-right py-4">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<p class="">© 2020 Bus Reservation. All rights reserved | Design by Bus Reservation System
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