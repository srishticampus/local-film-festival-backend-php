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
                        View Events
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                       
                                        <th>Company</th>
                                        <th>Role</th>
                                        <th>Experience</th>
                                        <th>Skill</th>
                                        <th>Portfolio</th>
                                        <th>References</th>
                                        <th>Reference Contact</th>
                                        <!-- <th>Agreement</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $sql = "SELECT * FROM coordinator";
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
                                                <td><?php echo $row['phone']; ?></td>
                                                <td><?php echo $row['company']; ?></td>
                                                <td><?php echo $row['role']; ?></td>
                                                <td><?php echo $row['experience']; ?></td>
                                                <td><?php echo $row['skill']; ?></td>
                                                <td><?php echo $row['portfolio']; ?></td>
                                                <td><?php echo $row['referencess']; ?></td>
                                                <td><?php echo $row['reference_contact']; ?></td>
                                                <!-- <td><?php echo $row['agreement']; ?></td> -->
                                                <td><a href="accept_coordinator.php?id=<?php echo $row['id'] ?>">

<?php
if($row['is_status']==1){
    echo 'Accepted';
}
else{
    echo 'Accept';
}
?>


                                               </a>|<a href="reject_coordinators.php?id=<?php echo $row['id'] ?>"><?php
if($row['is_status']==2){
    echo 'Rejected';
}
else{
    echo 'Reject';
}
?></td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        // If no events found
                                        echo "<tr><td colspan='5'>No Coordinators found</td></tr>";
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
