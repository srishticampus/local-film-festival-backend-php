<?php
include 'header.php';
require 'connection.php';
$category_id=$_GET['id'];
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
                         CATEGORY
                        </div>
                        <div class="panel-body">
                            <form role="form" action="update_category_action.php" method="post">
                                <?php
                                $sql="select * from category where id=$category_id";
                                $result=$con->query($sql);
                                $count=$result->num_rows;
                                if($count>0){
                                    $row=$result->fetch_assoc();
                                        ?>

<input type="hidden" name="category_id" value="<?php echo $category_id;?>">
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input class="form-control" type="text" name="category" value="<?php echo $row['category_name'];?>">
                                            
                                        </div>
                                
                                 
                                        <button type="submit" class="btn btn-info">Update Category </button>
                                        <?php
                                    
                                }

                                ?>
                                        

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
