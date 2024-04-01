<?php
require'connection.php';
$category=$_POST['category'];

$category_id=$_POST['category_id'];
$sql="UPDATE `category` SET `category_name`='$category'WHERE id=$category_id";
$result=$con->query($sql);

if($result){
	header("location:view_category.php?status=success");
}
else{
	header("location:view_category.php?status=failed");
}

?>