 
<?php
require 'header.php';
?>
 <section class="hero-section set-bg" data-setbg="img/hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero-text">
                        
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="img/hero-right.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Counter Section Begin -->
    
    <!-- Counter Section End -->

    <!-- Home About Section Begin -->
   
    <!-- Home About Section End -->

    <!-- Team Member Section Begin -->
    <br>
    <br>
    <section class="team-member-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Films</h2>
                       
                    </div>
                </div>
            </div>
        </div>
        <?php
$sql="select * from film where event_id=$event_id and is_film_status=1 ";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
    while ($row=$result->fetch_assoc()) {
       ?>


        <div class="member-item set-bg" data-setbg="../Film_Coordinator/uploads/<?php echo $row['poster'];?>">
            <div class="mi-social">
                <div class="mi-social-inner bg-gradient">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5>Emma Sandoval</h5>
                <span>Speaker</span>
            </div>
        </div>
       <?php
    }
}
        ?>
     
      
        
    </section>
    <br>
    <br>
    <br>

    <!-- Team Member Section End -->

    <!-- Schedule Section Begin -->
   
    <!-- Schedule Section End -->

    <!-- Pricing Section Begin -->
    
    <!-- latest BLog Section End -->

    <!-- Newslatter Section Begin -->
  
    <!-- Contact Section End -->

<?php
include 'footer.php';
?>