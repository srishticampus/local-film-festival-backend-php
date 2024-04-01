<?php
include 'header.php';
require 'connection.php';
?>
        
       


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap4.css">
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
                           <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Coordinator</th>
                                        <th>Event Name</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Director</th>
                                        <th>Producer</th>
                                        
                                    <th>Screen Writer</th>
                                    <th>Genre</th>
                                    <th>Language</th>
                                    <th>Duration</th>
                                    <th>Synopsis</th>
                                    <th>Trailer Link</th>
                                    <th>Release Year</th>
                                    <th>Country of Origin</th>
                                    <th>Cast</th>
                                    <th>Production Company</th>
                                   
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $sql = "SELECT * FROM film";
                                    $result = $con->query($sql);
                                    $count = $result->num_rows;
                                    if ($count > 0) {
                                        $i = 1; // Initialize the counter outside the loop
                                        while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php 
                                                $coordinator_id=$row['coordinator_id'];
                                                $sq="select * from coordinator where id=$coordinator_id";
                                                $res=$con->query($sq);
                                                $ro=$res->fetch_assoc();
                                                echo $ro['name'];



                                                 ?></td>
                                                 <td><?php 
                                                $event_id=$row['event_id'];
                                                $sq="select * from event where id=$event_id";
                                                $res=$con->query($sq);
                                                $ro=$res->fetch_assoc();
                                                echo $ro['event_name'];



                                                 ?></td>
                                                <td><?php echo $row['title']; ?></td>
                                                <td><img width="100" style="height: 200px"  src="../Film_Coordinator/uploads/<?php echo $row['poster'];?>"></td>
                                                <td><?php echo $row['director']; ?></td>
                                                <td><?php echo $row['producer']; ?></td>
                                                <td><?php echo $row['screenwriter']; ?></td>
                                                <td><?php echo $row['genre']; ?></td>
                                                <td><?php echo $row['language']; ?></td>
                                                <td><?php echo $row['duration']; ?></td>
                                                <td><?php echo $row['synopsis']; ?></td>
                                                <td><?php echo $row['trailer_link']; ?></td>
                                                <td><?php echo $row['release_year']; ?></td>
                                                <td><?php echo $row['country_of_origin']; ?></td>
                                                <td><?php echo $row['cast']; ?></td>
                                                <td><?php echo $row['production_company']; ?></td>
                                               
                                                
                                                 <td>
<?php
if($row['is_film_status']==1){
    echo 'Approved';

}
else if($row['is_film_status']==2){
     echo 'Rejected';
}
else{
    echo 'Requested';
}

?>



                                                 </td>
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





<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap4.js"></script>
<script type="text/javascript">
  $("#example").DataTable({
    "scrollX": true
});
</script>

</body>
</html>
