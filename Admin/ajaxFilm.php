<?php 
// Include the database config file 
require 'connection.php';

 $event=$_POST["event"];

//if(!empty($_POST["semester"])){ 
    // Fetch state data based on the specific country 

$query = " SELECT * FROM film where event_id=$event"; 
    $result = $con->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
        echo '<option value="">---------Select Film---------</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['id'].'">'.$row['title'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Film not available</option>'; 
        
    } 
//}
?>