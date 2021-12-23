<?php
session_start();
include("includes/config.php");
$_SESSION['login']="";
date_default_timezone_set('America/New_York');

	$_SESSION['logoutTime']=date('l jS \of F Y h:i:s A');
	
	
	$useri=$_SESSION['useri'];
	$ip_address = $_SERVER['HTTP_CLIENT_IP'];
	$lin=$_SESSION['loginTime'];
	$lout=$_SESSION['logoutTime'];
	$sql="INSERT INTO userlog (userEmail,userIP,loginTime,logout,orderStatus) VALUES ('$useri','$ip_address','$lin','$lout','1')";	
	$result=mysqli_query($con,$sql);
    session_destroy();

					

?>
<script language="javascript">
document.location="index.php";
</script>
