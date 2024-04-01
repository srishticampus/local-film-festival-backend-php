<?php
require 'connection.php';
$event=$_POST['event'];
$type=$_POST['type'];
$price=$_POST['price'];
$seat=$_POST['seat'];
$sql="INSERT INTO `ticket`(`ticket_type`, `event_id`, `price`, `total_seat`) VALUES ('$type','$event','$price',$seat)";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	header("location:ticketmanagement.php?status=success");
}
else{
	header("location:ticketmanagement.php?status=failed");
}
?>