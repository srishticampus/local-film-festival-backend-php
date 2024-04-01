<?php
require 'connection.php';
session_start();
$event=	$_SESSION['event'];
$jury=	$_SESSION['jury'];
$film_id=$_POST['film_id'];
$screening=$_POST['screening'];
$Category=$_POST['Category'];
$mark=$_POST['mark'];
$feedback=$_POST['feedback'];
$sql="select * from feedback where screening_id=$screening and award_category_id='$Category'";
$result=$con->query($sql);
$count=$result->fetch_assoc();
if($count>0){
	$sq="update feedback set mark='$mark',feedback='$feedback' where screening_id=$screening and award_category_id='$Category'";
	$res=$con->query($sq);
	header("location:view_mark.php?status=success");
}
else{
$sql="INSERT INTO `feedback`( `event_id`, `film_id`, `screening_id`, `mark`, `award_category_id`,`jury`,`feedback`) VALUES ('$event','$film_id','$screening','$mark','$Category','$jury','$feedback')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	header("location:view_mark.php?status=success");
}
else{
	 header("location:schedule.php?status=failed");
	
}}
?>