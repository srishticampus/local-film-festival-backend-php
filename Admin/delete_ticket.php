<?php
require 'connection.php';
$id=$_GET['id'];
$sql="delete from ticket where id=$id";
$result=$con->query($sql);
if($result){
	header("location:view_ticket.php");
}
else{
		header("location:view_ticket.php");
}
?>