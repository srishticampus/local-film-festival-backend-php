<?php
include 'header.php';
$film_id=$_GET['id'];
?>
    <!-- Header End -->

    <!-- Blog Details Hero Section Begin -->
    
    <!-- Blog Details Hero Section End -->

    <!-- Blog Details Section Begin -->
   <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                </div>
               
                        <?php
                        $sql="select * from film where is_film_status=1 and id=$film_id";
                        $result=$con->query($sql);
                        $count=$result->num_rows;
                        if($count>0){
                            while($row=$result->fetch_assoc()){
                                ?>

                                <div class="col-md-8">
                            <img class="blog-item set-bg" width="800" style="height: 600px"  src="../Film_Coordinator/uploads/<?php echo $row['poster'];?>">
                                <div class="bi-tag bg-gradient"><?php echo $row['title']?></div>
                                <div class="bi-text">
                                    <h5><b>Director:</b><?php echo $row['director'];?></h5>
                                    <h5><b>Producer:</b><?php echo $row['producer'];?></h5>
                                    <h5><b>Screen Writer:</b><?php echo $row['screenwriter'];?></h5>
                                    <h5><b>Genre:</b><?php echo $row['genre'];?></h5>
                                    <h5><b>Language:</b><?php echo $row['language'];?></h5>
                                    <h5><b>Duration:</b><?php echo $row['duration'];?></h5>
                                    <h5><b>Synopsis:</b><?php echo $row['synopsis'];?></h5>
                                    <h5><b>Trailer Link:</b><?php echo $row['trailer_link'];?></h5>
                                    <h5><b>Release Year:</b><?php echo $row['release_year'];?></h5>
                                    <h5><b>Country of Origin:</b><?php echo $row['country_of_origin'];?></h5>
                                    <h5><b>Cast:</b><?php echo $row['cast'];?></h5>
                                    <h5><b>Production Company:</b><?php echo $row['production_company'];?></h5>
                                    <!-- <span><i class="fa fa-clock-o"></i> 19th May, 2019</span> -->
                                </div>
                            </div>
                        
                                <?php


                            }
                        }
                        ?>
                        
                       
                <div class="col-md-2">
                </div> 
                
            </div>
            
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Comment Form Section Begin -->
   
    <!-- Related Post Section End -->

    <!-- Footer Section Begin -->
  <?php
include 'footer.php';
?>