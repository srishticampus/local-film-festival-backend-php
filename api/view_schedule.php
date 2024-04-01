<?php
require 'connection.php';
$data=array();
$schedule_id=$_REQUEST['schedule_id'];
$sql="select * from screening where id=$schedule_id order by id desc"; // Corrected the syntax for ordering
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
   $row=$result->fetch_assoc();
        $data[]=array(
            "id"=>$row['id'],
            "film_id"=>$row['film_id'],
            "event_id"=>$row['event_id'],
            "start_time"=>$row['start_time'],
             "end_time"=>$row['end_time'],
                 "screening_Type"=>$row['screening_Type'],
                  "screening_status"=>$row['screening_status'],
                   "screening_date"=>$row['screening_date'],
                    "created_at"=>$row['created_at']
        );
   
    $post=array(
        "status"=>true,
        "message"=>"Screening Details",
        "eventDetails"=>$data
    );
}
else{
    $post=array(
        "status"=>false,
        "message"=>"No Screening Details found",
        "eventDetails"=>$data
    );
}
echo json_encode($post); // Changed to encode $post instead of $data
?>
