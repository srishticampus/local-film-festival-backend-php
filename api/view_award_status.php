<?php
require 'connection.php';
$data=array();
$award_category_id=$_REQUEST['award_category_id'];
$sql="SELECT announcement.id,film.title,film.director,film.producer,film.screenwriter,event.event_name,event.event_date,screening.screening_date,award_category.category,feedback.jury_id,feedback.mark,feedback.feedback FROM `feedback` INNER join screening on screening.id=feedback.screening_id INNER JOIN film on film.id=screening.film_id INNER JOIN event on event.id=film.event_id INNER JOIN award_category on award_category.event_id=event.id INNER JOIN announcement on announcement.award_category_id=award_category.id where announcement.award_category_id=$award_category_id"; // Corrected the syntax for ordering
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
    while($row=$result->fetch_assoc()){
        $data[]=array(
            "announcement_id"=>$row['id'],
            "category"=>$row['category'],
            "film_name"=>$row['title'],
            "director"=>$row['director'],
            "producer"=>$row['producer'],
            "screenwriter"=>$row['screenwriter'],
            "event_name"=>$row['event_name'],
            "screening_date"=>$row['screening_date'],
            "feedback"=>$row['feedback']



        );
    }
    $post=array(
        "status"=>true,
        "message"=>"Award Details",
        "awardDetails"=>$data
    );
}
else{
    $post=array(
        "status"=>false,
        "message"=>"No Award Details found",
        "awardDetails"=>$data
    );
}
echo json_encode($post); // Changed to encode $post instead of $data
?>
