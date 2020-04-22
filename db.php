<?php
$conn = mysqli_connect('localhost', 'root', '', 'bus');
if(!$conn)
{
    die('Unable to connect to database!!!');
}