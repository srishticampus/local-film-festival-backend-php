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
                          ADD JURY
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
                            <form role="form" action="jury_action.php" method="post">
                                        <div class="form-group">
                                            <label>Jury Name</label>
                                            <input class="form-control" required type="text" name="name">
                                            
                                        </div>
                                 <div class="form-group">
                                            <label>Jury Email</label>
                                            <input class="form-control" required type="text" name="email">
                                   
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" required type="text" name="password">
                                   
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
    <option value="<?php echo $row['id'];?>"><?php echo $row['event_name'];?></option>
    <?php
        }
    }
    ?>
</select>
                                   
                                        </div>
                                 
                                        <button type="submit" class="btn btn-info">Add </button>

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
