<?php
$servername = "localhost";
$username = "GrpD";
$password = "010";
$dbname = "car_rental_system";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die(mysqli_connect_error());
}


?>