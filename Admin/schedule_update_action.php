<?php
require 'connection.php';
$film_name=$_POST['film_name'];
$event=$_POST['event'];
$s_date=$_POST['s_date'];
$start_time=$_POST['start_time'];
$end_time=$_POST['end_time'];

$screening_type=$_POST['screening_type'];
$schedule_id=$_POST['schedule_id'];
$sql="UPDATE `screening` SET `film_id`='$film_name',`event_id`='$event',`start_time`='$start_time',`end_time`='$end_time',`screening_Type`='$screening_type',`screening_date`='$s_date' WHERE id=$schedule_id";
$result=$con->query($sql);
if(!$result){
	header("location:view_screening.php?status=failed");
}
else{
	header("location:view_screening.php?status=success");
}

?>