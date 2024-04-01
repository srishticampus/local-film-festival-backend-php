<?php
include 'header.php';
?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Film</h2>
                        <div class="bt-option">
                        
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
               
                        <?php
                        $sql="select * from film where is_film_status=1 and event_id=$event_id";
                        $result=$con->query($sql);
                        $count=$result->num_rows;
                        if($count>0){
                            while($row=$result->fetch_assoc()){
                                ?>

                                <div class="col-md-3">
                            <div class="blog-item set-bg" data-setbg="../Film_Coordinator/uploads/<?php echo $row['poster'];?>">
                                <div class="bi-tag bg-gradient"><?php echo $row['title']?></div>
                                <div class="bi-text">
                                    <h5><a href="list_film-details.php?id=<?php echo $row['id'];?>">Director:<?php echo $row['director'];?></a></h5>
                                    <!-- <span><i class="fa fa-clock-o"></i> 19th May, 2019</span> -->
                                </div>
                            </div>
                        </div>
                                <?php


                            }
                        }
                        ?>
                        
                       
                 
                
            </div>
          
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
   <?php
include 'footer.php';
?>