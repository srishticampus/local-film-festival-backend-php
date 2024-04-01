<?php
require 'connection.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$event=$_POST['event'];
$sql="INSERT INTO `jury`( `name`, `email`, `password`,`event_id`) VALUES ('$name','$email','$password','$event')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
header("location:add_jury.php?status=success");
}
else{
	header("location:add_jury.php?status=failed");
}
?>