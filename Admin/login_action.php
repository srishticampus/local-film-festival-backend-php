<?php
require 'connection.php';
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$sql="select * from admin_log where email='$username' and password='$password'";
$result=$con->query($sql);
$count=$result->num_rows;
//echo $count;die();
if($count>0){
	$_SESSION['admin']=true;
	header("location:index.php?status=success");
}
else{
	header("location:login.php?status=failed");
	//echo $sql;
}
?>