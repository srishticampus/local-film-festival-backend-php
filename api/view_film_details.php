<?php
require 'connection.php';
$data=array();
$film_id=$_REQUEST['film_id'];
$sql="select * from film inner join coordinator on film.coordinator_id=coordinator.id where film.id=$film_id and is_film_status=1";
$result=$con->query($sql);
$count=$result->num_rows;
if($count){
	$row=$result->fetch_assoc();
	$data[]=array("film_id"=>$row['id'],
                 "title"=>$row['title'],
                 "director"=>$row['director'],
                 "producer"=>$row['producer'],
                 "screenwriter"=>$row['screenwriter'],
                 "genre"=>$row['genre'],
                 "language"=>$row['language'],
                 "duration"=>$row['duration'],
                 "synopsis"=>$row['synopsis'],
                 "trailer_link"=>$row['trailer_link'],
                 "release_year"=>$row['release_year'],
                 "country_of_origin"=>$row['country_of_origin'],
                 "cast"=>$row['cast'],
                 "production_company"=>$row['production_company'],
                 "poster"=>"http://campus.sicsglobal.co.in/Project/Local_Film_Festival/Film_Coordinator/uploads/".$row['poster'],
                 "comments"=>$row['comments'],
                 "coordinator_id"=>$row['coordinator_id'],
                 "coordinator_name"=>$row['name'],
                 "coordinator_email"=>$row['email'],
                 "coordinator_phone"=>$row['phone'],
                 "coordinator_password"=>$row['password'],
                 "coordinator_company"=>$row['company'],
                 "coordinator_role"=>$row['role'],
                 "coordinator_experience"=>$row['experience'],
                 "coordinator_skill"=>$row['skill'],
                 "coordinator_portfolio"=>$row['portfolio'],
                 "coordinator_referencess"=>$row['referencess'],
                 "reference_contact	"=>$row['reference_contact	'],
                 "agreement"=>$row['agreement'],
                 "coordinator_is_status"=>$row['is_status'],
                 "is_film_status"=>$row['is_film_status']);
	$post=array("status"=>true,
                "message"=>"Film Details",
                "filmDetails"=>$data);
}
else{
	$post=array("status"=>false,
                "message"=>"No Film Details Listed",
                "filmDetails"=>$data);
}
echo json_encode($post);
?>