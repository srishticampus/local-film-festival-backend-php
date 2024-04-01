<?php
require 'connection.php';
$id=$_GET['id'];
$sql="update film set is_film_status=2 where id=$id";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	header("location:view_film.php?status=failed");
}
else{
	header("location:view_film.php?status=success");
}
?>