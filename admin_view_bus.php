<?php
include 'db.php';
session_start();
if(isset($_POST['delete']))
	{
		
		$did = $_SESSION['id'];
		$dsql = "DELETE FROM bus WHERE id='$did'"; 
		$dquery = mysqli_query($conn,$dsql);
		if($dquery)
		{
			echo "<script>alert('bus deleted!');</script>";
		}
		else
		{
			 echo "<script>alert('delete failed');</script>";
		}
	}
	if(isset($_POST['edit']))
	{
		
		$eid = $_SESSION['id'];
		$permitno = $_POST['permitno'];
		$busno = $_POST['busno'];
		$bustype = $_POST['bustype'];
		$regno = $_POST['regno'];
		$seats = $_POST['seats'];
		$esql = "UPDATE bus SET permit_no='$permitno',bus_no='$busno',bus_type='$bustype',reg_no='$regno' WHERE id='$eid'"; 
		$equery = mysqli_query($conn,$esql);
		if($equery)
		{
			echo "<script>alert('bus edited!');</script>";
		}
		else
		{
			 echo "<script>alert('edit failed');</script>";
		}
	}
$sql = "SELECT * from bus";
$query = mysqli_query($conn, $sql);
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
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
					<li class="mr-lg-4 mr-2"><a href="admin_index.php">Home</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Bus
						</a>
						<div class="dropdown-menu active" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="admin_add_bus.php">Add Bus</a>
							<a class="dropdown-item active" href="admin_view_bus.php">View/Delete Bus</a>
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
	<section class="admin-outer">
		<!-- page details -->
		<div class="breadcrumb-agile">
			<div class="container">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="index.html">Home</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">View/Delete Bus</li>
				</ol>
			</div>
		</div>
		<!-- //page details -->
		<!-- inner banner -->
		<section class="inner-banner">
			<div class="container">
				<h3 class="text-center">View/Delete Bus</h3>
			</div>
		</section>
		<!-- //inner banner -->

		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-6">


					<form action="admin_view_bus.php" method="post">
						<div class="form-group form-row justify-content-md-center">
							<select class="form-control" id="exampleFormControlSelect1" name="reg">
								<option value=" ">---Select---</option>
								<?php foreach ($results as $result) {
									$selectReg = $result['reg_no'];
									echo "<option value='".$selectReg."'>".$selectReg."</option>";
								}
								?>
								<!-- <option>KL-15-BA 1318</option> -->
								<!-- <option>KL-15-BA 1344</option>
										<option>KL-15-AA 5678</option>
										<option>KL-15-BA 4532</option>
										<option>KL-15-BA 8955</option> -->
							</select>
							<button type="submit" class="btn btn-success mt-4" name="submit">Submit</button>
						</div>
					</form>
				</div>

			</div>
			<div class="row justify-content-md-center">
				<?php
				if (isset($_POST['submit'])) {
					$reg = $_POST['reg'];
					$sql02 = "SELECT * FROM bus WHERE reg_no='$reg'"; 
					$query02 = mysqli_query($conn, $sql02);
					$results02 = mysqli_fetch_all($query02, MYSQLI_ASSOC);
					foreach ($results02 as $result02) {
						//print_r($result02);
						
						$_SESSION['id']=$result02['id'];
				?>
						<div class="col-md-6 staff-box" style="text-align: left;">

							<form action="admin_view_bus.php" method="post">
								<div class="form-group">
									<label for="">Permit no.</label> <input type="text" name="permitno" value="<?php echo $result02['permit_no']; ?>" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Bus no.</label><input type="text" name="busno" value="<?php echo $result02['bus_no']; ?>" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Bus Type</label>
									<input type="text" name="bustype" class="form-control" value="<?php echo $result02['bus_type']; ?>">
								</div>
								<div class="form-group form-row">
									<label for="">Registration</label>
									<input type="text" name="regno" value="<?php echo $result02['reg_no']; ?>" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Seats</label>
									<input class="form-control" name="seats" value="<?php echo $result02['seats']; ?>" type="text">
								</div>
								<button type="submit" class="btn btn-success" name="edit">Edit</button>
								<button type="submit" class="btn btn-danger" name="delete">Delete</button>
							</form>
						</div>
				<?php }
				}		?>

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