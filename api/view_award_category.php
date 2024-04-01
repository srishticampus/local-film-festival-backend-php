<?php
require 'connection.php';
$data=array();
$event_id=$_REQUEST['event_id'];
$sql="select * from award_category where event_id=$event_id order by id desc"; // Corrected the syntax for ordering
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
    while($row=$result->fetch_assoc()){
        $data[]=array(
            "id"=>$row['id'],
            "category"=>$row['category']
        );
    }
    $post=array(
        "status"=>true,
        "message"=>"Category Details",
        "awardDetails"=>$data
    );
}
else{
    $post=array(
        "status"=>false,
        "message"=>"No Category Details found",
        "awardDetails"=>$data
    );
}
echo json_encode($post); // Changed to encode $post instead of $data
?>
