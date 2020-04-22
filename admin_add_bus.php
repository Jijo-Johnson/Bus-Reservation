<?php
include 'db.php';
if(isset($_POST['submit'])) {
    //echo "added";
    $permitno = $_POST['permit_no'];
    $busno = $_POST['bus_no'];
    $bustype = $_POST['bus_type'];
    $reg1 = $_POST['reg1'];
    $reg2 = $_POST['reg2'];
    $reg3 = $_POST['reg3'];
    $reg4 = $_POST['reg4'];
    $regno = "";
    $regno .= $reg1.$reg2.$reg3." ".$reg4;
    $seats = $_POST['seats'];
     //print_r($regno);
     $sql = "INSERT INTO bus (permit_no,bus_no,bus_type,reg_no,seats) VALUES ('$permitno','$busno',' $bustype','$regno','$seats')"; 
     $query = mysqli_query($conn,$sql);
     if($query)
     {
         echo "<script>alert('bus added!');</script>";
        // header('location:view_bus.php');
     }
     else
     {
         echo "<script>alert('adding failed');</script>";
     }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Bus Reservation | Admin</title>
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
<header class="" id="home">
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
					<li class="mr-lg-4 mr-2"><a href="admin_index.php">Home</a></li>					
					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Bus
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item active" href="admin_add_bus.php">Add Bus</a>
						<a class="dropdown-item" href="admin_view_bus.php">View/Delete Bus</a>						
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Manager
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="admin_add_manager.php">Add Manager</a>
						<a class="dropdown-item" href="admin_view_manager.php">View/Delete Manager</a>						
						</div>
					</li>
					
					
					<li class="mr-lg-4 mr-2"><a href="admin_view_schedule.php">View Schedule</a></li>
					<li class="mr-lg-4 mr-2"><a href="admin_view_route.php">View Routes</a></li>
					<li class="mr-lg-4 mr-2"><a href="admin_view_feed.php">View Feedbacks</a></li>
					<li class="mr-lg-4 mr-2"><a href="admin_view_user.php">View User</a></li>
					<li class=""><a href="common.html">Logout</a></li>
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
	<!-- page details -->
<div class="breadcrumb-agile">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Add Bus</li>
		</ol>
	</div>
</div>
<!-- //page details -->
	<!-- inner banner -->
<section class="inner-banner">
	<div class="container">
		<h3 class="text-center" >Add Bus</h3>
	</div>
</section>
<!-- //inner banner -->

	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-6">
				<form action="admin_add_bus.php" method="post">
					<div class="form-group">
						<input type="text" name="permit_no" class="form-control" placeholder="Permit Number" maxlength="6" required="" onkeypress="return (event.keyCode==8) || (event.keyCode==32)||event.charCode>=48 && event.charCode<=57">
					</div>
					<div class="form-group">
						<input type="text" name="bus_no" class="form-control" placeholder="Bus Number" maxlength="8" required="" onkeypress="return (event.keyCode==8) || (event.keyCode==32)||event.charCode>=48 && event.charCode<=57">
					</div>
					<div class="form-group">
						<select class="form-control" id="exampleFormControlSelect1" name="bus_type">
							<option value="">Bus Type</option>
							<option value="Superfast">Superfast</option>
							<option value="SuperExpress">Super Express</option>
							<option value="SuperDeluxe">Super Deluxe</option>
							<option value="Ordinary">Ordinary</option>
						  </select>
					</div>	
					<div class="form-group form-row">
						<select class="form-control" id="exampleFormControlSelect1" style="width: 100px;  margin-left: 5px;" name="reg1">
							<option value="KL">KL</option>
							<option value="TN">TN</option>
							<option value="KA">KA</option>
							
						  </select>
						  <input class="form-control" type="text" placeholder="15" readonly style="width: 50px; margin-left: 10px;" name="reg2" value="15">
						  <input type="text" name="reg3" class="form-control" placeholder="BA" required="" style="width: 100px; margin-left: 10px;">
						  <input type="text" name="reg4" class="form-control" placeholder="0001" required="" style="width: 150px; margin-left: 10px;">
					</div>				
					<div class="form-group">
						<input class="form-control" type="text" placeholder="No. of Seats : 50" value="50" name="seats" readonly>
					</div>				
					
					<button type="submit" name="submit" class="btn btn-success mt-4">Submit</button>
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
				<p class="">© 2020 Bus Reservation. All rights reserved | Design by Bus Reservation System</p>
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
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

        <script type="text/javascript">
           function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

</body>
</html>