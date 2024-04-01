<?php
include 'header.php';
require 'connection.php';
$id=$_GET['id'];
$sql1="select * from screening where id=$id";
$result1=$con->query($sql1);
$row1=$result1->fetch_assoc();
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
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Schedule Screening
                        </div>
                        <div class="panel-body">
                             <?php
                    if(isset($_GET['status'])){
                        $msg=$_GET['status'];
                        if($msg=='success'){
                            echo ' <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Added Successfully
  </div>';
                        }
                        else if($msg=='failed'){
                                   echo ' <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Added Failed
  </div>';
                        }

                    }

                ?>
                            <form role="form" action="schedule_update_action.php" method="post">
                                <input type="hidden" name="schedule_id" value="<?php echo $id;?>">
                                        <div class="form-group">
                                            <label>Film Name</label>
                                           <select class="form-control" required name="film_name">
    <option value="">-----------</option>
    <?php
    $sql="SELECT * FROM `film`";
    $result=$con->query($sql);
    $count=$result->num_rows;
    if($count>0){
        while($row=$result->fetch_assoc()){
    ?>
    <option <?php if($row1['film_id']==$row['id']){ echo 'selected';}?> value="<?php echo $row['id'];?>"><?php echo $row['title'];?></option>
    <?php
        }
    }
    ?>
</select>

                                            
                                        </div>
                                 <div class="form-group">
                                            <label>Event Name</label>
                                                                <select required name="event" class="form-control">
    <option value="">-----------</option>
    <?php
    $sql="SELECT * FROM `event`";
    $result=$con->query($sql);
    $count=$result->num_rows;
    if($count>0){
        while($row=$result->fetch_assoc()){
    ?>
    <option <?php if($row1['event_id']==$row['id']){ echo 'selected';}?> value="<?php echo $row['id'];?>"><?php echo $row['event_name'];?></option>
    <?php
        }
    }
    ?>
</select>
                                   
                                        </div>
                                         <div class="form-group">
                                            <label>Screening Date</label>
                                            <input required class="form-control" type="date" name="s_date" value="<?php echo $row1['screening_date']?>">
                                   
                                        </div>
                                         <div class="form-group">
                                            <label>Start Time</label>
                                            <input required class="form-control" type="text" name="start_time" value="<?php echo $row1['start_time']?>">
                                   
                                        </div>
                                        <div class="form-group">
                                            <label>End Time</label>
                                            <input required class="form-control" type="text" name="end_time" value="<?php echo $row1['end_time']?>">
                                   
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Screening Type</label>
                                            <select required class="form-control" type="text" name="screening_type" >
                                                <option value="">-----</option>
                                                <option <?php if($row1['screening_Type']=='Regular Screening'){ echo 'selected';}?> value="Regular Screening">Regular Screening</option>
                                                <option <?php if($row1['screening_Type']=='Premiere'){ echo 'selected';}?> value="Premiere">Premiere</option>
                                                <option <?php if($row1['screening_Type']=='Special Event'){ echo 'selected';}?> value="Special Event">Special Event</option>
                                            </select>
                                   
                                        </div>
                                        

                                 
                                        <button type="submit" class="btn btn-info">Update Screening Schedule </button>

                                    </form>
                            </div>
                        </div>
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
