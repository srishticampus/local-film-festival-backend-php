<?php
include 'header.php';
require 'connection.php';
$id=$_SESSION['coordinator'];
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
                                 Screening Schedule
                            </div>
                            <div class="panel-body">
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

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i=1;
$sql="SELECT * FROM `screening` inner join film on screening.film_id=film.id INNER JOIN event on event.id=film.event_id where film.coordinator_id=$id";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
    while($row=$result->fetch_assoc()){
        ?>
         <tr>
                                                <td><?php echo $i++;?></td>
                                                <td><?php echo $row['title'];?></td>
                                                <td><?php echo $row['event_name'];?></td>
                                                <td><?php echo $row['screening_date'];?></td>
                                                <td><?php echo $row['start_time'];?></td>
                                                <td><?php echo $row['end_time'];?></td>
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
