<?php
require 'connection.php';
$id=$_GET['id'];
$sql="delete from jury where id=$id";
$result=$con->query($sql);
if($result){
	header("location:view_jury.php");
}
else{
		header("location:view_jury.php");
}
?>