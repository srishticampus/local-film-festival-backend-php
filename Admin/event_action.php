<?php
require'connection.php';
$event_name=$_POST['event_name'];
$event_date=date('Y-m-d',strtotime($_POST['event_date']));
$event_time=$_POST['event_time'];
$sql="INSERT INTO `event`( `event_name`, `event_date`, `event_time`) VALUES ('$event_name','$event_date','$event_time')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	header("location:event_management.php?status=success");
}
else{
	header("location:event_management.php?status=failed");
}

?>