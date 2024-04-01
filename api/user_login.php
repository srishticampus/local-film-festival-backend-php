<?php
require 'connection.php';
$data=array();
$phone=$_REQUEST['phone'];
$password=$_REQUEST['password'];
$sql="select * from attendees where phone='$phone' and password='$password'";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	$row=$result->fetch_assoc();
	$data[]=array(
            "id"=>$row['id'],
            "name"=>$row['name'],
            "email"=>$row['email'],
            "phone"=>$row['phone'],
            "address"=>$row['address'],
            "age"=>$row['age'],
            "gender"=>$row['gender'],
            "language"=>$row['language'],
            "password"=>$row['password']
        );
        $post=array(
            "status"=>true,
            "message"=>"Login Successful",
            "userData"=>$data
        );
}
else{
	  $post=array(
            "status"=>false,
            "message"=>"Login Failed",
            "userData"=>$data
        );
}
echo json_encode($post);
?>