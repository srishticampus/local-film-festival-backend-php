<?php
require'connection.php';
$event_name=$_POST['event_name'];
$event_date=date('Y-m-d',strtotime($_POST['event_date']));
$event_time=$_POST['event_time'];
$event_id=$_POST['event_id'];
$sql="UPDATE `event` SET `event_name`='$event_name',`event_date`='$event_date',`event_time`='$event_time' WHERE id=$event_id";
$result=$con->query($sql);

if($result){
	header("location:view_event.php?status=success");
}
else{
	header("location:view_event.php?status=failed");
}

?>