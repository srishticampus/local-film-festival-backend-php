<?php
require 'connection.php';
$data=array();
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$address=$_REQUEST['address'];
$age=$_REQUEST['age'];
$gender=$_REQUEST['gender'];
$language=$_REQUEST['language'];
$password=$_REQUEST['password'];
$sql="select * from  attendees where phone='$phone'";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
    $post =array(
        "status"=>false,
        "message"=>"User Already Exists",
        "userData"=>$data
    );
} else {
    $sql="INSERT INTO `attendees`( `name`, `email`, `phone`, `address`, `age`, `gender`, `language`,`password`) VALUES ('$name','$email','$phone','$address','$age','$gender','$language','$password')";
    $result=$con->query($sql);
    $count=$con->affected_rows;
    if($count>0){
        $last_id = $con->insert_id;
        $sq="select * from attendees where id=$last_id";
        $res=$con->query($sq);
        $row=$res->fetch_assoc();
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
            "message"=>"Registration Successful",
            "userData"=>$data
        );
    } else {
        $post=array(
            "status"=>false,
            "message"=>"Registration failed",
            "userData"=>$data
        );
    }
}
echo json_encode($post);
?>
