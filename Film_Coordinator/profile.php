<?php
include 'header.php';
require 'connection.php';
session_start();
$id=$_SESSION['coordinator'];
$sql="select * from coordinator where id=$id";
$result=$con->query($sql);
$row=$result->fetch_assoc();
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
                          Profile
                        </div>
                        <div class="panel-body">
                             <?php
                    if(isset($_GET['status'])){
                        $msg=$_GET['status'];
                        if($msg=='success'){
                            echo ' <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>  Updated Successfull
  </div>';
                        }
                        else if($msg=='failed'){
                                   echo ' <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Failed!</strong> Updated Failed
  </div>';
                        }

                    }

                ?>
                            <form role="form" action="update_profile_action.php" method="post">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" value="<?php echo $row['name'];?>" type="text" name="name">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" value="<?php echo $row['email'];?>" type="text" name="email">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" value="<?php echo $row['phone'];?>" type="text" name="phone">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" value="<?php echo $row['password'];?>" type="text" name="password">
                                            
                                        </div>
                                
                                        <div class="form-group">
                                            <label>Role</label>
                                            <input class="form-control" value="<?php echo $row['role'];?>" type="text" name="role">
                                   
                                        </div>
                                         <div class="form-group">
                                            <label>Experience</label>
                                            <input class="form-control" value="<?php echo $row['experience'];?>" type="text" name="experience">
                                   
                                        </div>
                                         <div class="form-group">
                                            <label>Skill</label>
                                            <input class="form-control" value="<?php echo $row['skill'];?>" type="text" name="skill">
                                   
                                        </div>
                                        <div class="form-group">
                                            <label>References</label>
                                            <input class="form-control" value="<?php echo $row['referencess'];?>" type="text" name="referencess">
                                   
                                        </div>
                                        <div class="form-group">
                                            <label>Reference Contact Number</label>
                                            <input class="form-control" value="<?php echo $row['reference_contact'];?>" type="text" name="reference_contact">
                                   
                                        </div>
                                        
                                        <button type="submit" class="btn btn-info">Update </button>

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
