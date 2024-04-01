<?php
require 'connection.php';
session_start();

$email=$_POST['email'];
$password=$_POST['password'];
$sql="select * from jury where email='$email' and password='$password'";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	$row=$result->fetch_assoc();
	$_SESSION['jury']=$row['id'];
		$_SESSION['event']=$row['event_id'];
	header("location:home.php?status=success");
}
else{
	header("location:index.php?status=failed");
}
?>