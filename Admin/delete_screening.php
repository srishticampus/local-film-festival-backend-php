<?php
require 'connection.php';
session_start();
$id=$_GET['id'];
$sql="delete from screening where id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:view_screening.php");
}
else{
	header("location:view_screening.php");
}
?>