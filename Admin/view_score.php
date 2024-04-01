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
                                        <th>Film Title</th>
                                        <th>Event Name</th>
                                       
                                        <th>Director</th>
                                        <th>Producer</th>
                                        
                                    <th>Screen Writer</th>
                                    <th>Score</th>
                                    <th>Feedback</th>
                                    <th>Screening Date</th>
                                    <th>Award Category</th>

                                   
                                   
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$sql="SELECT film.title,film.director,film.producer,film.screenwriter,event.event_name,event.event_date,screening.screening_date,award_category.category,feedback.jury_id,feedback.mark,feedback.feedback FROM `feedback` INNER join screening on screening.id=feedback.screening_id INNER JOIN film on film.id=screening.film_id INNER JOIN event on event.id=film.event_id INNER JOIN award_category on award_category.event_id=event.id";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
    $i=1;
    while($row=$result->fetch_assoc()){
        ?>
        <tr><td>
            <?php echo $i++;?>
        </td>
        <td><?php echo $row['title'];?></td>
    <td><?php echo $row['event_name'];?></td>
<td><?php echo $row['director'];?></td>
<td><?php echo $row['producer'];?></td>
<td><?php echo $row['screenwriter'];?></td>
<td><?php echo $row['mark'];?></td>
<td><?php echo $row['feedback'];?></td>
<td><?php echo $row['screening_date'];?></td>
<td><?php echo $row['category'];?></td>
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
