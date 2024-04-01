<?php
include 'header.php';
require 'connection.php';
$event_id="";
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
                          Announcement
                        </div>
                        <div class="panel-body">
                                          <?php
                    if(isset($_GET['status'])){
                        $msg=$_GET['status'];
                        if($msg=='success'){
                            echo ' <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>  Successfull
  </div>';
                        }
                        else if($msg=='failed'){
                                   echo ' <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Failed!</strong> Failed
  </div>';
                        }

                    }

                ?>

                            <form role="form" action="announcement_action.php" method="post">
                                <div class="form-group">
                                         <label>Event Name</label>
                                                                <select required name="event" id="event" class="form-control">
    <option value="">-----------</option>
    <?php
    $sql="SELECT * FROM `event`";
    $result=$con->query($sql);
    $count=$result->num_rows;
    if($count>0){
        while($row=$result->fetch_assoc()){
            $event_id=$row['id'];
    ?>
    <option value="<?php echo $row['id'];?>"><?php echo $row['event_name'];?></option>
    <?php
        }
    }
    ?>
</select>
                                   
                                        </div>


                                          <div class="form-group">
                                         <label>Film </label>
                                                                <select required name="film" id="film" class="form-control">
    <option value="">-----------</option>
   
</select>
                                   
                                        </div>


                                       <div class="form-group">
                                         <label>Award Category</label>
                                                                <select required name="category" id="category" class="form-control">
    <option value="">-----------</option>
    <?php
    $sql="SELECT * FROM `award_category` where event_id=$event_id";
    $result=$con->query($sql);
    $count=$result->num_rows;
    if($count>0){
        while($row=$result->fetch_assoc()){
    ?>
    <option value="<?php echo $row['id'];?>"><?php echo $row['category'];?></option>
    <?php
        }
    }
    ?>
</select>
                                   
                                        </div>
                               
                                 
                                        <button type="submit" class="btn btn-info">Generate Report </button>

                                    </form>
                            </div>
                        </div>
                            </div>
<!-- <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                           SINGUP FORM
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                        
                                 <div class="form-group">
                                            <label>Enter Email</label>
                                            <input class="form-control" type="text">
                                     <p class="help-block">Help text here.</p>
                                        </div>
                                            <div class="form-group">
                                            <label>Enter Password</label>
                                            <input class="form-control" type="password">
                                     <p class="help-block">Help text here.</p>
                                        </div>
                                <div class="form-group">
                                            <label>Re Type Password </label>
                                            <input class="form-control" type="password">
                                     <p class="help-block">Help text here.</p>
                                        </div>
                                 
                                        <button type="submit" class="btn btn-danger">Register Now </button>

                                    </form>
                            </div>
                        </div>
                            </div>
        </div> -->
             <!--/.ROW-->
             

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
<script type="text/javascript">
    $(document).ready(function () {
        $('#event').on('change', function () {
            // alert('hai');
            var event = $(this).val();

            if (event) {
                $.ajax({
                    type: 'POST',
                    url: 'ajaxFilm.php',
                    data: 'event=' + event,
                    success: function (html) {
                        $('#film').html(html);

                    }
                });
            } else {
                $('#film').html('<option value="">Select </option>');
            }
        });
        $('#film').on('change', function () {
            // alert('hai');
            var event = $('#event').val();
            // alert(countryID);
            if (event) {
                $.ajax({
                    type: 'POST',
                    url: 'ajaxCategory.php',
                    data: 'event=' + event,
                    success: function (html) {
                        $('#category').html(html);
                    }
                });
            } else {
                $('#category').html('<option value="">Select category</option>');
            }
        });
    });
</script>
</html>

