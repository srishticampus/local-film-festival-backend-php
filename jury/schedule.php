<?php
include 'header.php';
 $film_id=0;
 $jury=$_SESSION['jury'];
if(isset($_GET['id'])){
    $film_id=$_GET['id'];
}
$i=1;
$date=date('Y-m-d');
?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Event Schedule</h2>
                        <div class="bt-option">
                            <a href="#">Home</a>
                            <span>Our Schedule</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Schedule Table Section Begin -->
    <section class="schedule-table-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="schedule-table-tab">
                        <ul class="nav nav-tabs" role="tablist">
                           <?php
                        $sql="select * from film where is_film_status=1 and event_id=$event_id";
                        $result=$con->query($sql);
                        $count=$result->num_rows;
                        $i=1;
                        if($count>0){
                            while($row=$result->fetch_assoc()){
                           
                                ?>
                            <li class="nav-item">
                                <a class="nav-link"  href="schedule.php?id=<?php echo $row['id'];?>" ><?php echo $row['title']; ?></a>
                            </li>
                               <?php


                            }
                        }
                        ?>
                        </ul><!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="schedule-table-content">
                                    <table>
                                        <thead>
                                            <tr>
                                                 <th><strong>Screening Date</strong></th>
                                                <th>
                                                    <strong>Screening Type</strong>
                                               
                                                </th>
                                                <th>
                                                    <strong>Start Time</strong>
                                                   
                                                </th>
                                                <th>
                                                    <strong>End Time</strong>
                                                    
                                                </th>
                                                <th>
                                                    <strong>Screening Status</strong>
                                                    
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php


                                               $sq="select * from screening where event_id=$event_id and film_id=$film_id";
                                              
                                                $res=$con->query($sq);
                                                $co=$res->num_rows;
                                                $roo=$res->fetch_assoc();?>
                                              <tr>

                                                <td class="event-time"><h5><?php echo $roo['screening_date'];?></h5></td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $roo['screening_Type'];?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $roo['start_time'];?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $roo['end_time'];?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                     <?php
                                                     $scrr=$roo['id'];
                                                        $sq1="select * from feedback where film_id=$film_id and jury_id=$jury";
                                                        $res1=$con->query($sq1);
                                                        $co1=$res1->num_rows;
                                                        if($co1>0){
                                                            ?>
                                                            <h5>


                                                        <button class="btn btn-primary"><a href="view_mark.php" style="color:white;">View Mark</a></button>
                                                    </h5>
                                                            <?php

                                                        }else{
                                                            ?>




                                                            <?php

if($date==$roo['screening_date']){
 

    ?>




                                                    <h5>


                                                        <button class="btn btn-primary"><a href="add_mark.php?id=<?php echo $_GET['id'];?>" style="color:white;">Add Mark</a></button>
                                                    </h5>
                                                        <?php
}else if($date!=$roo['screening_date'] && $roo['screening_date']!=""){?>
    Current Date and Screening Date are not Equal
    <?php

}
                                                    ?>
                                                            <?php
                                                        }

                                                        ?>
                                                    
                                                </td>
                                            </tr>
                                           
                                            
                                     
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Schedule Table Section End -->

    <!-- Newslatter Section Begin -->
 
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <?php
include 'footer.php';
?>