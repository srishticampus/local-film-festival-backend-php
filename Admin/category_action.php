<?php
require 'connection.php';
session_start();
$category=$_POST['category'];
$sql="INSERT INTO `category`( `category_name`) VALUES ('$category')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	header("location:add_Category.php?status=success");
}
else{
	header("location:add_Category.php?status=failed");
}

?>