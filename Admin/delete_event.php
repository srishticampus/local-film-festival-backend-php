<?php
require 'connection.php';
$id=$_GET['id'];
$sql="delete from event where id=$id";
$result=$con->query($sql);
if($result){
	header("location:view_event.php");
}
else{
		header("location:view_event.php");
}
?>