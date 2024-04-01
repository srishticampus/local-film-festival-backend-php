<?php
require 'connection.php';
$data=array();
$sql="select * from category order by id desc"; // Corrected the syntax for ordering
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
    while($row=$result->fetch_assoc()){
        $data[]=array(
            "id"=>$row['id'],
            "category_name"=>$row['category_name']
        );
    }
    $post=array(
        "status"=>true,
        "message"=>"Category Details",
        "eventDetails"=>$data
    );
}
else{
    $post=array(
        "status"=>false,
        "message"=>"No Category Details found",
        "eventDetails"=>$data
    );
}
echo json_encode($post); // Changed to encode $post instead of $data
?>
