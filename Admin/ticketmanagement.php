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
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Ticket Management Form
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
                            <form role="form" action="ticket_action.php" method="post">
                              
                                      <div class="form-group">
                                            <label>Event Name</label>
                                            <select required class="form-control" name="event" >
                                                <option value="">-----------</option>
                                                 <?php
    $sql="SELECT * FROM `event`";
    $result=$con->query($sql);
    $count=$result->num_rows;
    if($count>0){
        while($row=$result->fetch_assoc()){
    ?>
    <option value="<?php echo $row['id'];?>"><?php echo $row['event_name'];?></option>
    <?php
        }
    }
    ?>
                                            </select>
                                            
                                        </div>   
                                        <div class="form-group">
                                            <label>Ticket Type</label>
                                            <select required class="form-control" name="type">
                                                <option>---------------</option>
                                                <option>General</option>
                                                <option>VIP</option>
                                                <option>Student</option>
                                                <option>Child</option>
                                            </select>
                                            
                                        </div>
                                 <div class="form-group">
                                            <label>Ticket Price</label>
                                            <input required class="form-control" type="text" name="price">
                                   
                                        </div>
                                         <div class="form-group">
                                            <label>Total Seat</label>
                                            <input required class="form-control" type="text" name="seat">
                                   
                                        </div>

                                        <button type="submit" class="btn btn-info">Add Ticket </button>

                                    </form>
                            </div>
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
</html>
