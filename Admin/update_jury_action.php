<?php
require'connection.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$jury_id=$_POST['jury_id'];
$sql="UPDATE `jury` SET `name`='$name',`email`='$email',`password`='$password' WHERE id=$jury_id";
$result=$con->query($sql);

if($result){
	header("location:view_jury.php?status=success");
}
else{
	header("location:view_jury.php?status=failed");
}

?>