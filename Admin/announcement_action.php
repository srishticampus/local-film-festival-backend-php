<?php
require 'connection.php';
$event=$_POST['event'];
$film=$_POST['film'];
$category=$_POST['category'];
$sql="INSERT INTO `announcement`( `event_id`, `film_id`, `award_category_id`) VALUES ('$event','$film','$category')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	header("location:announcement.php?status=success");
}
else{
	header("location:announcement.php?status=failed");
	//echo $sql;
}
?>