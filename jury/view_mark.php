  <?php
include 'header.php';
session_start();
require 'connection.php';
$event=	$_SESSION['event'];



?>
    <!-- Header End -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap4.css">
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Feedback</h2>
                        <div class="bt-option">
                            <a href="#">Home</a>
                            <span>Feedback</span>
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
                       <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="schedule-table-content">
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
$sql="SELECT film.title,film.director,film.producer,film.screenwriter,event.event_name,event.event_date,screening.screening_date,award_category.category,feedback.jury_id,feedback.mark,feedback.feedback FROM `feedback` INNER join screening on screening.id=feedback.screening_id INNER JOIN film on film.id=screening.film_id INNER JOIN event on event.id=film.event_id INNER JOIN award_category on award_category.event_id=event.id where event.id=$event";
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