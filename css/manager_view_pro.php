<?php
include 'db.php';
session_start();
$mid = $_SESSION['mid'];
echo $mid;
$sql = "SELECT * from manager where id = '$mid'";
$query = mysqli_query($conn, $sql);
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
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
					<li class="mr-lg-4 mr-2"><a href="manager_index.php">Home</a></li>	
					<li class="mr-lg-4 mr-2 active"><a href="manager_view_pro.php">View Profile</a></li>				
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
					<li class="mr-lg-4 mr-2"><a href="manager_pass.php">Change Password</a></li>
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
			<li class="breadcrumb-item active" aria-current="page">View Profile</li>
		</ol>
	</div>
</div>
<section class="inner-banner">
	<div class="container">
		<h3 class="text-center" >View Profile</h3>
	</div>
</section>
<div class="container">
<div class="container">

<?php
				foreach ($results as $result) {
					// $_SESSION['id']=$result['id'];
					// echo $_SESSION['id'];
					// print_r($result);
					$id=$result['id'];
					// echo $id;
				?>

    <div class="row justify-content-center">
        <div class="col-6">
            <form action="#" method="post">
                <div class="form-group">
                    <input type="text" name="Name" class="form-control" value="<?php echo $result['name']; ?>" readonly>
                </div>
                <div class="form-group">
                    <input type="email" name="Email" class="form-control" value="<?php echo $result['email']; ?>" readonly>
                </div>
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" value="<?php echo $result['phone']; ?>" readonly>
                </div>
                <div class="form-group">
                    <input type="text" name="Message" value="<?php echo $result['location']; ?>" readonly>
                </div>
                <div class="form-group">
                    <input type="text" name="Name" class="form-control" value="<?php echo $result['username']; ?>" readonly>
                </div>
                
            </form>
        </div>
		</div>
		<?php }?>
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