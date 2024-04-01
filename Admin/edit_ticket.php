<?php
include 'header.php';
require 'connection.php';
$ticket_id=$_GET['id'];
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
                          Ticket
                        </div>
                        <div class="panel-body">
                            <form role="form" action="update_ticket_action.php" method="post">
                                <?php
                                $sql="select * from ticket where id=$ticket_id";
                                $result=$con->query($sql);
                                $count=$result->num_rows;
                                if($count>0){
                                    $row=$result->fetch_assoc();
                                    $event_id=$row['event_id'];
                                        ?>

<input type="hidden" name="ticket_id" value="<?php echo $ticket_id;?>">
                                        <div class="form-group">
                                            <label>Ticket Type</label>
                                            <input class="form-control" type="text" name="ticket_type" value="<?php echo $row['ticket_type'];?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Ticket Price</label>
                                            <input class="form-control" type="text" name="ticket_price" value="<?php echo $row['price'];?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Total Seat</label>
                                            <input class="form-control" type="text" name="total_seat" value="<?php echo $row['total_seat'];?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Event</label>
                                            <select class="form-control" type="text" name="event" >
                                                <option value="">------------</option>
                                                <?php
                                                $event_id=$row['event_id'];
$sq="select * from event where id=$event_id";
$res=$con->query($sq);
$co=$res->num_rows;
if($co>0){
    while($ro=$res->fetch_assoc()){
        $select ="selected";
        $event=$ro['id'];
        ?>
        <option  value="<?php echo $event_id;?>" <?php if($event==$event_id){echo 'selected';}?>><?php echo $ro['event_name'];?>  </option>

        <?php
    }
}

                                                ?>
                                            </select>
                                            
                                        </div>
                                
                                 
                                        <button type="submit" class="btn btn-info">Update Ticket </button>
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
