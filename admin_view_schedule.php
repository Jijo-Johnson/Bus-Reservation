<?php
	include 'db.php';
	$sql="SELECT * FROM schedule";
	$query=mysqli_query($conn,$sql);
	$results=mysqli_fetch_all($query,MYSQLI_ASSOC);
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
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Bus
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="admin_add_bus.php">Add Bus</a>
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
					
					
					<li class="mr-lg-4 mr-2 active"><a href="admin_view_schedule.php">View Schedule</a></li>
					<li class="mr-lg-4 mr-2"><a href="admin_view_route.php">View Routes</a></li>
					<li class="mr-lg-4 mr-2"><a href="admin_view_feed.php">View Feedbacks</a></li>
					<li class="mr-lg-4 mr-2"><a href="admin_view_user.php">View User</a></li>
					<li class=""><a href="common.php">Logout</a></li>
				</ul>
			</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->


<section class="admin-outer">
	<!-- page details -->
<div class="breadcrumb-agile">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">View Schedules</li>
		</ol>
	</div>
</div>
<!-- //page details -->
	<!-- inner banner -->
<section class="inner-banner">
	<div class="container">
		<h3 class="text-center" >View Schedules</h3>
	</div>
</section>
<!-- //inner banner -->




<div class="container">
    <div class="row justify-content-md-center">
        
            <!-- <div class="col-12">


                <form action="#" method="post">
                    <div class="form-group form-row justify-content-md-center">
                    
                            <div class="input-group date" id="datetimepicker2">
                              <input type="text" class="form-control" placeholder="Date"><span class="input-group-addon" ><i class="glyphicon glyphicon-th"></i></span>
                            </div>
                      
                          <button type="button" class="btn btn-success mt-4">Submit</button>
                    </div>
                    
                </form>
            </div>
         -->
        <div class="col-12">
            <div class="row staff-tile">

			
                <div class="col-12">
				<table class="table table-bordered">
				  <thead class="thead-light">
				    <tr>
				      <th scope="col">Date</th>
				      <th scope="col">Schedule</th>
				      <th scope="col">Bus No.</th>
				      <th scope="col">Route No.</th>
				      <th scope="col">Starting Time</th>
					  <th scope="col">Destination Time</th>	
				    </tr>
				  </thead>
				  <tbody>
				  <?php 
					foreach($results as $result)
					{

					?>
				    <tr>
				      <th scope="row"><?php echo $result['date'];?></th>
				      <td><?php echo $result['schedule_no'];?></td>
				      <td><?php echo $result['bus_no'];?></td>
					  <td><?php echo $result['route_no'];?></td>
					  <td><?php echo $result['starting_time'];?></td>
					  <td><?php echo $result['destination_time'];?></td>

					</tr>
					<?php }?>
				  </tbody>
				</table>
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
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.es.min.js"></script>
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
        $('#datetimepicker2').datepicker({
            weekStart: 0,
            todayBtn: "linked",
            language: "en",
            orientation: "bottom auto",
            keyboardNavigation: false,
            autoclose: true
        });
    </script>

</body>
</html>