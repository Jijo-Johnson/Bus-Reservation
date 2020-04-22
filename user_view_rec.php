<!DOCTYPE html>
<html lang="en">
<head>
<title>Bus Reservation | Admin </title>
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
					<li class="mr-lg-4 mr-2"><a href="#">Home</a></li>									
					<li class="mr-lg-4 mr-2"><a href="user_search.php">Search Bus</a></li>
					<li class="mr-lg-4 mr-2"><a href="user_add_feed.php">Add Feedback</a></li>
					<li class="mr-lg-4 mr-2 active"><a href="user_viewrec.php">View Tickets</a></li>
					<li class="mr-lg-4 mr-2"><a href="user_pass.php">Change Password</a></li>
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
			<li class="breadcrumb-item active" aria-current="page">View Tickets</li>
		</ol>
	</div>
</div>
<section class="inner-banner">
	<div class="container">
		<h3 class="text-center" >View Tickets</h3>
	</div>
</section>
<div class="container">
		<div class="row justify-content-md-center">
        <div class="col-12">
            <div class="row staff-tile">
                <div class="col-12">
				<table class="table table-bordered">
				  <thead class="thead-light">
				    <tr>
				      <th scope="col">Bus Name</th>
				      <th scope="col">Depature</th>
				      <th scope="col">Arrival</th>
				      <th scope="col">Duration</th>
					  <th scope="col">Fare</th>
                      <th scope="col"></th>		
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">asdd</th>
				      <td>Mark</td>
				      <td>Otto</td>
					  <td>@mdo</td>
					  <td>568</td>
					  <td><button type="button" class="btn btn-success">Print Receipt</button></td>

				    </tr>
				    <tr>
				      <th scope="row">hjkhhj</th>
				      <td>Jacob</td>
				      <td>Thornton</td>
					  <td>@fat</td>
					  <td>758</td>
					  <td><button type="button" class="btn btn-success">Print Receipt</button></td>

				    </tr>
				    <tr>
				      <th scope="row">thytuy</th>
				      <td>Larry</td>
				      <td>the Bird</td>
					  <td>@twitter</td>
					  <td>456</td>
					  <td><button type="button" class="btn btn-success">Print Receipt</button></td>

				    </tr>
				  </tbody>

				</table>
            </div>
            </div>
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