<?php
require 'connection.php';
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM `coordinator` where email='$email' and password='$password' and is_status=1";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	$row=$result->fetch_assoc();
	$_SESSION['coordinator']=$row['id'];
	header("location:index.php?status=success");
}
else{
	header("location:login.php?status=failed");
}
?>