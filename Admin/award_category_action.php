<?php
require 'connection.php';
session_start();
$category=$_POST['category'];
$event=$_POST['event'];
$sql="INSERT INTO `award_category`( `category`,`event_id`) VALUES ('$category','$event')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	header("location:add_award_Category.php?status=success");
}
else{
	header("location:add_award_Category.php?status=failed");
}

?>