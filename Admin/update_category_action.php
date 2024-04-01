<?php
require 'connection.php';
$category_id=$_POST['category_id'];
$category=$_POST['category'];
$sql="UPDATE `category` SET `category_name`='$category' WHERE id=$category_id";
$result=$con->query($sql);
if(!$result){
	header("location:view_category.php?status=failed");
}
else{
	header("location:view_category.php?status=success");
}
?>