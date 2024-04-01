<?php
require 'connection.php';
$ticket_id=$_REQUEST['ticket_id'];
$data=array();
$sql="select * from ticket where id=$ticket_id";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
    $row=$result->fetch_assoc();
        $data[]=array("id"=>$row['id'],
            "ticket_type"=>$row['ticket_type'],
            "event_id"=>$row['event_id'],
            "price"=>$row['price'],
            "total_seat"=>$row['total_seat']);

   
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