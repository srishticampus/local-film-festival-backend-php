  <?php
include 'header.php';
session_start();
require 'connection.php';
$event=	$_SESSION['event'];
$date=date('Y-m-d');
$secreening=$_GET['id'];
$sq="SELECT * FROM `screening` where id=$secreening";
$res=$con->query($sq);
$ro=$res->fetch_assoc();
$film_id=$ro['film_id'];

?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Add Mark</h2>
                        <div class="bt-option">
                            <a href="#">Home</a>
                            <span>Add Mark</span>
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
                              <form action="mark_action.php" method="post">
                              	<input type="hidden" name="film_id" value="<?php echo $film_id;?>">
                              	<input type="hidden" name="screening" value="<?php echo $secreening;?>">
  <div class="form-group">
    <label for="email">Award Category:</label>
    <select  class="form-control" id="Category" name="Category">
    	<option value="">----------</option>
    	<?php
$sql="SELECT * FROM `award_category` where event_id=$event";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	while($row=$result->fetch_assoc()){
	?>
	<option value="<?php echo $row['id'];?>"><?php echo $row['category'];?></option>
	<?php
}}
    	?>
    </select>
  </div>
  <div class="form-group">
    <label for="pwd">Mark (Out of 10)</label>
    <input type="text" class="form-control" id="mark" name="mark">
  </div>
   <div class="form-group">
    <label for="pwd">Feedback</label>
    <textarea  class="form-control" id="feedback" name="feedback">
    </textarea>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
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