<?php
$host = "localhost:3308";
$username="root";
	$password='';
	$dbName='thecdesi_paintingportal';
	$con=mysqli_connect($host,$username,$password,$dbName);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>