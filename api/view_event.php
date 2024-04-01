<?php
require 'connection.php';
$data=array();
$sql="select * from event order by id desc"; // Corrected the syntax for ordering
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
    while($row=$result->fetch_assoc()){
        $data[]=array(
            "id"=>$row['id'],
            "event_name"=>$row['event_name'],
            "event_date"=>$row['event_date'],
            "event_time"=>$row['event_time']
        );
    }
    $post=array(
        "status"=>true,
        "message"=>"Event Details",
        "eventDetails"=>$data
    );
}
else{
    $post=array(
        "status"=>false,
        "message"=>"No Event Details found",
        "eventDetails"=>$data
    );
}
echo json_encode($post); // Changed to encode $post instead of $data
?>
