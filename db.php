<?php
$conn = mysqli_connect("localhost", "root", "", "bus_reservation");
if (!$conn) {
    echo "database connect error: " . mysqli_connect_error();
}
