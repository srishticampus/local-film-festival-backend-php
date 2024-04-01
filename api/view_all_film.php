<?php
require 'connection.php';
$data=array();

$sql="SELECT 
    film.id,
    film.title,
    film.director,
    film.producer,
    film.screenwriter,
    film.genre,
    film.language,
    film.duration,
    film.synopsis,
    film.trailer_link,
    film.release_year,
    film.country_of_origin,
    film.cast,
    film.production_company,
    film.poster,
    film.comments,
    coordinator.id AS coordinator_id,
    coordinator.name,
    coordinator.email,
    coordinator.phone,
    coordinator.password,
    coordinator.role,
    coordinator.experience,
    coordinator.skill,
    coordinator.referencess,
    coordinator.reference_contact,
    coordinator.agreement,
    coordinator.is_status,
    film.is_film_status
FROM 
    film 
INNER JOIN 
    coordinator ON film.coordinator_id = coordinator.id
";
$result=$con->query($sql);
$count=$result->num_rows;
if($count){
	while($row=$result->fetch_assoc()){
	$data[]=array("film_id"=>$row['id'],
                 "title"=>$row['title'],
                 "director"=>$row['director'],
                 "producer"=>$row['producer'],
                 "screenwriter"=>$row['screenwriter'],
                 "category"=>$row['genre'],
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
                
                 "coordinator_role"=>$row['role'],
                 "coordinator_experience"=>$row['experience'],
                 "coordinator_skill"=>$row['skill'],
                 "coordinator_referencess"=>$row['referencess'],
                 "reference_contact	"=>$row['reference_contact	'],
                 "agreement"=>$row['agreement'],
                 "coordinator_is_status"=>$row['is_status'],
                 "is_film_status"=>$row['is_film_status']);
}
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