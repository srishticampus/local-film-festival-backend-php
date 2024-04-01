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
                         <!--   Basic Table  -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                View Payment
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Language</th>
                                        
                                       
                                        <th>Ticket</th>
                                        <th>Amount</th>
                                        
                                    <th>Event Name</th>
                                    

                                   
                                   
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$sql="SELECT attendees.name,attendees.email,attendees.phone,attendees.address,attendees.age,attendees.gender,attendees.language,ticket.ticket_type,event.event_name,ticket.price FROM `attendees` INNER join payment on payment.attendees_id=attendees.id INNER JOIN ticket on ticket.id=payment.ticket_id INNER JOIN event on event.id=ticket.event_id";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
    $i=1;
    while($row=$result->fetch_assoc()){
        ?>
        <tr><td>
            <?php echo $i++;?>
        </td>
        <td><?php echo $row['name'];?></td>
    <td><?php echo $row['email'];?></td>
<td><?php echo $row['phone'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['age'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['language'];?></td>

<td><?php echo $row['ticket_type'];?></td>
<td><?php echo $row['price'];?></td><td><?php echo $row['event_name'];?></td>
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
                          <!-- End  Basic Table  -->
                    </div>
                </div>


             
             
<!-- row close -->
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
