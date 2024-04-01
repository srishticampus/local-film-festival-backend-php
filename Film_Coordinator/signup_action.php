<?php
require 'connection.php';
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$company=$_POST['company'];
$role=$_POST['role'];
$experience=$_POST['experience'];
$skill=$_POST['skill'];

$references=$_POST['references'];
$reference_contact=$_POST['reference_contact'];
$agreement=$_POST['agreement'];
$sql="INSERT INTO `coordinator`(`name`, `email`, `phone`, `password`, `company`, `role`, `experience`, `skill`, `referencess`, `reference_contact`, `agreement`) VALUES ('$fullname','$email','$phone','$password','$company','$role','$experience','$skill','$references','$reference_contact','$agreement')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	header("location:login.php?status=success");
}
else{
	header("location:signup.php?status=failed");
}
?>