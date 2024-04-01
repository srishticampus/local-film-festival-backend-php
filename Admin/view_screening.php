<?php
include 'header.php';
require 'connection.php';
?>
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">WELCOME TO FILM FESTIVAL HUB</h1>
                        <h1 class="page-subhead-line">We are using a best Administartive Panel for Managing Film Festival. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    
                    <div class="col-md-12">
                         <!--   Basic Table  -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                View Screening
                            </div>
                            <div class="panel-body">
                                     <?php
                    if(isset($_GET['status'])){
                        $msg=$_GET['status'];
                        if($msg=='success'){
                            echo ' <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Updated Successfully
  </div>';
                        }
                        else if($msg=='failed'){
                                   echo ' <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Updated Failed
  </div>';
                        }

                    }

                ?>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Film Name</th>
                                                <th>Event Name</th>
                                                <th>Date</th>
                                                 <th>Start Time</th>
                                                 <th>End Time</th>
                                                 <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i=1;
$sql="SELECT film.title,screening.event_id,screening.start_time,screening.end_time,screening.id FROM `screening` inner join film on screening.film_id=film.id INNER JOIN event on event.id=film.event_id";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
    while($row=$result->fetch_assoc()){
        ?>
         <tr>
                                                <td><?php echo $i++;?></td>
                                                <td><?php echo $row['title'];?></td>
                                                <td><?php
                                                $event_id=$row['event_id'];
                                                $sq="select * from event where id=$event_id";
                                                $res=$con->query($sq);
                                                $ro=$res->fetch_assoc(); 

                                                echo $ro['event_name'];?></td>
                                                <td><?php echo $row['screening_date'];?></td>
                                                <td><?php echo $row['start_time'];?></td>
                                                <td><?php echo $row['end_time'];?></td>
                                                <td><a href="update_screening.php?id=<?php echo $row['id'];?>">View</a>|<a href="delete_screening.php?id=<?php echo $row['id'];?>">Delete</a></td>
                                            </tr>
        <?php
    }
}
                                            ?>

                                           
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                          <!-- End  Basic Table  -->
                    </div>
                </div>


             
             
<!-- row close -->
        </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2024 YourCompany | Film Festival Hub
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
