<?php
include 'db.php';
session_start();
if (isset($_POST['delete'])) {
// echo $_SESSION['id'];
  $did = $_POST['id'];
//   echo $did;
	// $did = $_SESSION['id'];
	$dsql = "DELETE FROM route WHERE id='$did'";
	$dquery = mysqli_query($conn, $dsql);
	if ($dquery) {
		echo "<script>alert('route deleted!');</script>";
	} else {
		echo "<script>alert('delete failed');</script>";
	}
}
if (isset($_POST['edit'])) {

	$eid = $_SESSION['id'];
	$route_no = $_POST['route_no'];
	$route = $_POST['route'];
	$source = $_POST['source'];
	$duration = $_POST['duration'];
	$starting_time = $_POST['starting_time'];
	$destination_time = $_POST['destination_time'];
	$esql = "UPDATE route SET route_no='$route_no',route='$route',source='$source',duration='$duration',starting_time='$starting_time',destination_time='$destination_time' WHERE id='$eid'";
	$equery = mysqli_query($conn, $esql);
	if ($equery) {
		echo "<script>alert('route edited!');</script>";
	} else {
		echo "<script>alert('edit failed');</script>";
	}
}




$sql = "SELECT * from route";
$query = mysqli_query($conn, $sql);
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Bus Reservation | Manager</title>
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
	<header class="" id="home">
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
					<li class="mr-lg-4 mr-2"><a href="manager_index.php">Home</a></li>	
					<li class="mr-lg-4 mr-2 "><a href="manager_view_pro.php">View Profile</a></li>				
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Routes
						</a>
						<div class="dropdown-menu active" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="manager_add_route.php">Add Route</a>
						<a class="dropdown-item active" href="manager_view_route.php">View/Delete Route</a>						
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
					<li class="mr-lg-4 mr-2"><a href="manager_pass.php">Change Password</a></li>
					<li class=""><a href="common.php">Logout</a></li>
				</ul>
			</nav>

			<!-- //nav -->
		</div>
	</header>
	
	<!-- //banner -->
	<section class="admin-outer">
		<!-- page details -->
		<div class="breadcrumb-agile">
			<div class="container">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="index.html">Home</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">View/Delete Route</li>
				</ol>
			</div>
		</div>
		<!-- //page details -->
		<!-- inner banner -->
		<section class="inner-banner">
			<div class="container">
				<h3 class="text-center">View/Delete Route</h3>
			</div>
		</section>
		<!-- //inner banner -->

		<div class="container">

			<div class="row justify-content-md-center">
				<?php
				foreach ($results as $result) {
					// $_SESSION['id']=$result['id'];
					// echo $_SESSION['id'];
					// print_r($result);
					$id=$result['id'];
					// echo $id;
				?>

					<div class="col-12 d-flex justify-content-center">
						<div class="col-md-6 staff-box" style="text-align: center;">

							<form action="manager_view_route.php" method="post">
								<div class="form-group">
									<input type="text" name="route_no" class="form-control" value="<?php echo $result['route_no']; ?>">
								</div>
								<div class="form-group">
									<input type="text" name="route" class="form-control" value="<?php echo $result['route']; ?>">
								</div>
								<div class="form-group">
									<input type="text" name="source" class="form-control" value="<?php echo $result['source']; ?>">
								</div>
								<div class="form-group">
									<input type="text" name="duration" class="form-control" value="<?php echo $result['duration']; ?>">
								</div>
								<div class="form-group">
									<input type="text" name="starting_time" value="<?php echo $result['starting_time']; ?>" class="form-control">
								</div>
								<div class="form-group">
									<input type="text" name="destination_time" value="<?php echo $result['destination_time']; ?>" class="form-control">
								</div>
								<button type="submit" class="btn btn-success" name="edit">Edit</button>
								<button type="submit" class="btn btn-danger" name="delete">Delete</button>
							</form>


							

						</div>
					</div>
				<?php } ?>

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

				reader.onload = function(e) {
					$('#blah')
						.attr('src', e.target.result);
				};

				reader.readAsDataURL(input.files[0]);
			}
		}
	</script>

</body>

</html>