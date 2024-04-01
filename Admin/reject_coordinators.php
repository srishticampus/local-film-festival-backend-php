<?php
require 'connection.php';
$id=$_GET['id'];
$sql="update coordinator set is_status=2  where id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:view_film_coordinators.php?status=failed");
}
else{
	header("location:view_film_coordinators.php?status=success");
}
?>