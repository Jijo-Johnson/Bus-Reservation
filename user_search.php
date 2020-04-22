<?php
// include 'db.php';
// if(isset($_POST['search']))
// {
// 	$starting = $_POST['starting'];
// 	$destination = $_POST['destination'];
// 	$date = $_POST['date'];
// 	//getting route id from table route
// 	$sql = "SELECT * FROM route WHERE place_from='$starting' AND place_to = '$destination' ";
// 	$query = mysqli_query($conn,$sql);
// 	$result = mysqli_fetch_array($query);
// 	//getting bus id using route id, from table schedule
// 	$sql = "SELECT * FROM schedule WHERE route_id='".$result['route_id']."' ";
// 	$query = mysqli_query($conn,$sql);
// 	$bus_result = mysqli_fetch_array($query);
// 	// print_r($result);


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
<!-- //header -->

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
				<form action="user_search_results.php" method="post" >
					<div class="form-group">
						<input type="text" name="starting" class="form-control" placeholder="Starting" required="">
					</div>
					<div class="form-group">
						<input type="text" name="destination" class="form-control" placeholder="Destination" required="">
					</div>
						
									
					<div class="form-group">
						<input class="form-control" name="date" id="date-pick" type="date">
					</div>				
					
					<button type="submit" name="search" class="btn btn-success mt-4">Search</button>
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
	<script>
	
	</script>

</body>
</html>