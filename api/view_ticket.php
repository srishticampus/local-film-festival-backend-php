<?php
require 'connection.php';
$event_id=$_REQUEST['event_id'];
$data=array();
$sql="select * from ticket where event_id=$event_id";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
    while($row=$result->fetch_assoc()){
        $data[]=array("id"=>$row['id'],
            "ticket_type"=>$row['ticket_type'],
            "event_id"=>$row['event_id'],
            "price"=>$row['price'],
            "total_seat"=>$row['total_seat']);

    }
    $post=array("status"=>true,
              "message"=>"ticket Listed",
              "ticketDetails"=>$data);
}
else{
     $post=array("status"=>false,
              "message"=>"No ticket Listed",
              "ticketDetails"=>$data);

}
echo json_encode($post);
?>