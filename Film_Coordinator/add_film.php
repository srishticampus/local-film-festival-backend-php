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
            <!-- <div class="col-md-6 col-sm-6 col-xs-12"> -->
                <div class="col-md-12">

               <div class="panel panel-info">
                        <div class="panel-heading">
                           ADD FILMS HERE
                        </div>
                        <div class="panel-body">
                             <?php
                    if(isset($_GET['status'])){
                        $msg=$_GET['status'];
                        if($msg=='success'){
                            echo ' <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>  Added Successfull
  </div>';
                        }
                        else if($msg=='failed'){
                                   echo ' <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Failed!</strong> Added Failed
  </div>';
                        }

                    }

                ?>
                            <form role="form" action="film_action.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                         <label>Event Name</label>
                                                                <select required name="event" class="form-control">
    <option value="">-----------</option>
    <?php
    $sql1="SELECT * FROM `event`";
    $result1=$con->query($sql1);
    $count1=$result1->num_rows;
    if($count1>0){
        while($row1=$result1->fetch_assoc()){
    ?>
    <option value="<?php echo $row1['id'];?>"><?php echo $row1['event_name'];?></option>
    <?php
        }
    }
    ?>
</select>
                                   
                                        </div>
                                        

                                        <div class="form-group">
                                            <label>Film Title</label>
                                            <input required class="form-control" type="text" name="title">
                                   
                                        </div>

                                        <div class="form-group">
                                            <label>Director</label>
                                            <input required class="form-control" type="text" name="director">
                                   
                                        </div>

                                        <div class="form-group">
                                            <label>Producer</label>
                                            <input required class="form-control" type="text" name="producer">
                                   
                                        </div>

                                        <div class="form-group">
                                            <label>Screen Writer</label>
                                            <input required class="form-control" type="text" name="screen_writer">
                                   
                                        </div>

                                        <div class="form-group">
                                            <label>Genre</label>
                                            <select required class="form-control" name="genre" >
                                                <option value="">----</option>
                                                

                                                <?php
    $sql="SELECT * FROM `category`";
    $result=$con->query($sql);
    $count=$result->num_rows;
    if($count>0){
        while($row=$result->fetch_assoc()){
            ?>
            <option value="<?php echo $row['id'];?>"><?php echo $row['category_name'];?></option>
            <?php
   }}

                                                ?>
                                                <!-- Add more options based on your analytics types -->
                                            </select>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Language</label>
                                            <select class="form-control" name="language" required>
                                                <option value="">----</option>
                                                <option value="English">English</option>
                                                <option value="Spanich">Spanich</option>
                                                <option value="Malayalam">Malayalam</option>
                                                <option value="French">French</option>
                                                <option value="German">German</option>
                                                <option value="Mandarin">Mandarin</option>
                                                <option value="Hindi">Hindi</option>
                                                <option value="Arabic">Arabic</option>
                                                <option value="Portuguese">Portuguese</option>
                                                <option value="Bengali">Bengali</option>
                                                <option value="Russian">Russian</option>
                                                <option value="Japenese">Japenese</option>
                                                <option value="Punjabi">Punjabi</option>
                                                <option value="Urdu">Urdu</option>
                                                <option value="Korean">Korean</option>
                                                <option value="Italian">Italian</option>
                                                <option value="Turkish">Turkish</option>
                                                <option value="Tamil">Tamil</option>
                                                <option value="Telugu">Telugu</option>
                                                <option value="Marathi">Marathi</option>
                                                <option value="Gujarathi">Gujarathi</option>
                                            
                                                <!-- Add more options based on your analytics types -->
                                            </select>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Duration</label>
                                            <input required class="form-control" type="text" name="duration">
                                   
                                        </div>

                                        <div class="form-group">
                                            <label>Synopsis</label>
                                            <input required class="form-control" type="text" name="synopsis">
                                   
                                        </div>

                                        <div class="form-group">
                                            <label>Trailer Link</label>
                                            <input required class="form-control" type="text" name="trailer_link">
                                   
                                        </div>

                                        <div class="form-group">
                                            <label>Release Year</label>
                                            <input required class="form-control" type="text" name="release_year">
                                   
                                        </div>

                                        <div class="form-group">
                                            <label>Country of Origin</label>
                                            <input required class="form-control" type="text" name="country_of_origin">
                                   
                                        </div>

                                        <div class="form-group">
                                            <label>Cast</label>
                                            <input required class="form-control" type="text" name="cast">
                                   
                                        </div>

                                        <div class="form-group">
                                            <label>Production Company</label>
                                            <input required class="form-control" type="text" name="production_company">
                                   
                                        </div>

                                        <div class="form-group">
                                            <label>Poster/Image</label>
                                            <input required class="form-control" type="file" name="poster">
                                   
                                        </div>

                                        <div class="form-group">
                                            <label>Additional Notes/Comments</label>
                                            <input required class="form-control" type="text" name="comments">
                                   
                                        </div>


                                 
                                        <button type="submit" class="btn btn-info">Add Film </button>

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
</html>
