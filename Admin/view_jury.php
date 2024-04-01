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
                <h1 class="page-subhead-line">We are using a best Administrative Panel for Managing Film Festival. </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            
            <div class="col-md-12">
                 <!--   Basic Table  -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        View Jury
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Event</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $sql = "SELECT * FROM jury";
                                    $result = $con->query($sql);
                                    $count = $result->num_rows;
                                    if ($count > 0) {
                                        $i = 1; // Initialize the counter outside the loop
                                        while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['password']; ?></td>
                                                <td><?php 
                                                $event=$row['event_id'];
                                                $sq="select * from event where id=$event";
                                                $res=$con->query($sq);
                                                $ro=$res->fetch_assoc();
                                                echo $ro['event_name'];

                                            ?></td>
                                                <td><a href="edit_jury.php?id=<?php echo $row['id'] ?>">View</a>|<a href="delete_jury.php?id=<?php echo $row['id'] ?>">Delete</td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        // If no events found
                                        echo "<tr><td colspan='5'>No events found</td></tr>";
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
<!-- SCRIPTS -AT THE BOTTOM TO REDUCE THE LOAD TIME-->
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
