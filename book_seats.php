<?php
include 'db.php';
$seats = $_POST['data'];

$sql = "UPDATE booking SET seat_no ='$seats' WHERE schedule_id='1'";
$query = mysqli_query($conn,$sql);
