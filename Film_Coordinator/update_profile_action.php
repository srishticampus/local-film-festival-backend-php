<?php
require 'connection.php';
session_start();
$id=$_SESSION['coordinator'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$role=$_POST['role'];
$experience=$_POST['experience'];
$skill=$_POST['skill'];
$referencess=$_POST['referencess'];

$reference_contact=$_POST['reference_contact'];
$sql="UPDATE `coordinator` SET `name`='$name',`email`='$email',`phone`='$phone',`password`='$password',`role`='$role',`experience`='$experience',`skill`='$skill',`referencess`='referencess',`reference_contact`='$reference_contact' WHERE id=$id";
$result=$con->query($sql);

if(!$result){
	header("location:profile.php?status=failed");
}
else{
	header("location:profile.php?status=success");
}
?>