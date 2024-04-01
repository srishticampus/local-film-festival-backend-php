<?php
require 'connection.php';
$ticket_id=$_POST['ticket_id'];
$ticket_type=$_POST['ticket_type'];
$event=$_POST['event'];
$ticket_price=$_POST['ticket_price'];
$total_seat=$_POST['total_seat'];
$sql="UPDATE `ticket` SET `ticket_type`='$ticket_type',`event_id`='$event',`price`='$ticket_price',`total_seat`='$total_seat' WHERE id=$ticket_id";
$result=$con->query($sql);
if(!$result){
	header("location:view_ticket.php?status=failed");
}
else{
	header("location:view_ticket.php?status=success");
}
?>