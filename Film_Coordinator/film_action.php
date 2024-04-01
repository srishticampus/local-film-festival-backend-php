<?php
require 'connection.php';
session_start();
 $upload_dir="uploads/";
$server_url = '/home/ubuntu/html/Project/Local_Film_Festival/Film_Coordinator/';
$coordinator_id=$_SESSION['coordinator'];
$title=$_POST['title'];
$director=$_POST['director'];
$producer=$_POST['producer'];
$screen_writer=$_POST['screen_writer'];
$genre=$_POST['genre'];
$event=$_POST['event'];
$language=$_POST['language'];
$duration=$_POST['duration'];
$synopsis=$_POST['synopsis'];
$trailer_link=$_POST['trailer_link'];
$release_year=$_POST['release_year'];
$country_of_origin=$_POST['country_of_origin'];
$cast=$_POST['cast'];
$production_company=$_POST['production_company'];
//$poster=$_POST['poster'];
$comments=$_POST['comments'];
$poster=$_FILES['poster']['name'];
$random_name = rand(1000,1000000)."-".$poster;
 $image_tmp_name = $_FILES["poster"]["tmp_name"];
        $upload_name = $upload_dir.strtolower($random_name);
        $upload_name = preg_replace('/\s+/', '-', $upload_name);
        $upload_name=$server_url."/".$upload_name;
        if(move_uploaded_file($image_tmp_name , $upload_name)){
           $photo=basename($upload_name); 
        }
        else{
            $photo="";
        }
$sql="INSERT INTO `film`(`title`, `director`, `producer`, `screenwriter`, `genre`, `language`, `duration`, `synopsis`, `trailer_link`, `release_year`, `country_of_origin`, `cast`, `production_company`, `poster`, `comments`, `coordinator_id`,`event_id`) VALUES ('$title','$director','$producer','$screen_writer','$genre','$language','$duration','$synopsis','$trailer_link','$release_year','$country_of_origin','$cast','$production_company','$photo','$comments','$coordinator_id','$event')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	header("location:add_film.php?status=success");
}
else{
	header("location:add_film.php?status=failed");
	//echo $sql;
}
?>