<?php
require 'connection.php';
$data=array();
$event_id=$_REQUEST['event_id'];
$attendees_id=$_REQUEST['attendees_id'];
$ticket_id=$_REQUEST['ticket_id'];
$amount=$_REQUEST['amount'];
$sql="select * from payment where attendees_id=$attendees_id and event_id=$event_id";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	$data=array("status"=>false,
           "message"=>"Payment already added");
}
else{
$sql="INSERT INTO `payment`( `event_id`, `attendees_id`, `ticket_id`, `amount`) VALUES ('$event_id','$attendees_id','$ticket_id','$amount')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
$data=array("status"=>true,
           "message"=>"Payment added successfully");
}
else{
	$data=array("status"=>false,
           "message"=>"Payment added Failed");
}
}
echo json_encode($data);
?>