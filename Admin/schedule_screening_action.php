<?php
require 'connection.php';
$film_name=$_POST['film_name'];
$event=$_POST['event'];
$s_date=$_POST['s_date'];
$start_time=$_POST['start_time'];
$end_time=$_POST['end_time'];

$screening_type=$_POST['screening_type'];

$sql="INSERT INTO `screening`(`film_id`, `event_id`, `start_time`, `end_time`, `screening_type`, `screening_date`) VALUES ('$film_name','$event','$start_time','$end_time','$screening_type','$s_date')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	header("location:schedule_screening.php?status=success");
}
else{
	header("location:schedule_screening.php?status=failed");
}

?>