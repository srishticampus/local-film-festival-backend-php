<?php
require 'connection.php';
$id=$_GET['id'];
$sql="delete from category where id=$id";
$result=$con->query($sql);
if($result){
	header("location:view_category.php");
}
else{
		header("location:view_category.php");
}
?>