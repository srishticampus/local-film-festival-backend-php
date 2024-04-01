<?php
require 'connection.php';
$category_id=$_POST['category_id'];
$category=$_POST['category'];
$event=$_POST['event'];

$sql="UPDATE `award_category` SET `category`='$category',event_id=$event WHERE id=$category_id";
$result=$con->query($sql);
if(!$result){
	header("location:view_award_category.php?status=failed");
}
else{
	header("location:view_award_category.php?status=success");
}
?>