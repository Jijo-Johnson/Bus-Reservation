<?php
include 'db.php';
session_start();
$manager_id= $_SESSION['mid'];
if (isset($_POST['submit'])) {
	$password = $_POST['newpassword'];
	$cpassword = $_POST['cpassword'];
	if($password==$cpassword)
	{
		$sql = "UPDATE manager SET password='$password' WHERE id='$manager_id'";
		$result = mysqli_query($conn, $sql);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
	if($result) {
	
			// print_r($result) ;
			
			echo "<script>alert('Password Change Success!')</script>";
		
		
	} else {
		echo "<script>alert('Password Change Failed')</script>";
	}
	}
	else
	{
		echo "<script>alert('Passwords dont match!');</script>";
	}
	
	
	
}

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
			
			<<!-- div class="forms mt-md-0 mt-2">
				<a href="login.html" class="btn"><span class="fa fa-user-circle-o"></span> Sign In</a>
				<a href="register.html" class="btn"><span class="fa fa-pencil-square-o"></span> Create Account</a>
			</div> -->
		</div>
		<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
				<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
				<input type="checkbox" id="drop" />
				<ul class="menu">
					<li class="mr-lg-4 mr-2"><a href="manager_index.php">Home</a></li>	
					<li class="mr-lg-4 mr-2 "><a href="manager_view_pro.php">View Profile</a></li>				
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Routes
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="manager_add_route.php">Add Route</a>
						<a class="dropdown-item" href="manager_view_route.php">View/Delete Route</a>						
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Schedules
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="manager_add_schedule.php">Add Schedule</a>
						<a class="dropdown-item" href="manager_view_schedule.php">View/Delete Schedule</a>						
						</div>
					</li>
					
					
					<li class="mr-lg-4 mr-2"><a href="manager_view_feed.php">View Feedback</a></li>
					<li class="mr-lg-4 mr-2 active"><a href="manager_pass.php">Change Password</a></li>
					<li class=""><a href="common.php">Logout</a></li>
				</ul>
			</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->
<!-- <section class="banner_w3lspvt">
	<div class="csslider infinity" id="slider1">
		<input type="radio" name="slides" checked="checked" id="slides_1"/>
		<input type="radio" name="slides" id="slides_2" />
		<input type="radio" name="slides" id="slides_3" />
		<input type="radio" name="slides" id="slides_4" />
		<ul>
			<li>
				<div class="banner-top">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info text-center">
								<h3 class="text-wh">Clean & Care</h3>
								<p class="text-li mx-auto mt-2"></p>
								
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="banner-top1">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info text-center">
								<h3 class="text-wh">Clean & Care</h3>
								<p class="text-li mx-auto mt-2"> </p>
								
							</div>
						</div>
					</div>
				</div>
			</li>
		
		</ul>
		<div class="arrows">
			<label for="slides_1"></label>
			<label for="slides_2"></label>
			<label for="slides_3"></label>
			<label for="slides_4"></label>
		</div>
	</div>
</section> -->
<!-- //banner -->
<section class="admin-outer">
<div class="breadcrumb-agile">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Change Password</li>
		</ol>
	</div>
</div>
<section class="inner-banner">
	<div class="container">
		<h3 class="text-center" >Change Password</h3>
	</div>
</section>
<div class="container">
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6 ">
                        
    <form action="manager_pass.php" method="post">
					
					<div class="form-group">
						<input type="password" name="newpassword" class="form-control" placeholder="New Password" required="">
					</div>
										
					<div class="form-group">
						<input class="form-control" name="cpassword" type="passwod" placeholder="Confirm Password">
					</div>				
					
					<button type="submit" class="btn btn-success mt-4" name="submit">Submit</button>
				</form>
                       
    
                </div>
        </div>
	</div>
</div>
</section>
<!-- copyright -->
<section class="copy-right py-4">
	
</section>
<!-- copyright -->

<!-- move top icon -->
<a href="#home" class="move-top text-center"></a>
<!-- //move top icon -->
	
	<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>
</html>