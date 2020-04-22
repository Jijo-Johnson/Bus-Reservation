<?php
  include 'db.php';
  session_start();
  $username= $_SESSION['username'];
  if(isset($_POST['submit']))
  {
	$text = $_POST['text'];
   $sql="INSERT INTO feedback(user,feedback) VALUES('$username','$text')";
   $result=mysqli_query($conn,$sql);
   if($result)
    {
      echo "<script>alert('Feedback Sent!');</script>";
    }
    else
    {
      echo "<script>alert('Failed to Sent!');</script>";
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
			
			
		</div>
		<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
				<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
				<input type="checkbox" id="drop" />
				<ul class="menu">
					<li class="mr-lg-4 mr-2"><a href="user_index.php">Home</a></li>													
					<li class="mr-lg-4 mr-2"><a href="user_search.php">Search Bus</a></li>
					<li class="mr-lg-4 mr-2 active"><a href="user_add_feed.php">Add Feedback</a></li>
					<li class="mr-lg-4 mr-2"><a href="user_view_rec.php">View Tickets</a></li>
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
			<li class="breadcrumb-item active" aria-current="page">Add Feedback</li>
		</ol>
	</div>
</div>
<section class="inner-banner">
	<div class="container">
		<h3 class="text-center" >Add Feedback</h3>
	</div>
</section>
<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-6">
				<form action="user_add_feed.php" method="post">
					<div class="form-group">
						<textarea name="text"> </textarea>
					</div>
									
									
									
					
					<button type="submit" class="btn btn-success mt-4" name="submit">Add</button>
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