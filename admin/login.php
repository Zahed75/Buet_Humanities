<?php
session_start();
include('db/config.php');
//echo "<pre>";
//var_dump($_SERVER);
//echo "</pre>";
if($_SERVER['REQUEST_METHOD']!='POST'){
	header('location:index.php');
}
else{
	$email=$_POST['email'];
	$pass=$_POST['password'];

	$select_query="SELECT * FROM hum_admin WHERE email='$email' && password='$pass'";
	$run_query=mysqli_query($con,$select_query);
	$count=mysqli_num_rows($run_query);
	if($count>0){
		header('location:dashboard.php');
		$_SESSION['email']=$email;
		$_SESSION['pass']=$pass;
	}
	else{
		echo "Email or password is incorrect";
	}
}
?>
