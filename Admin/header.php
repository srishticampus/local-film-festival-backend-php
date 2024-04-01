<?php
require 'connection.php';
@session_start();
if(!isset($_SESSION['admin'])){
  echo "please login";
 echo '<a href="login.php">Click Here...</a>';
  exit();
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOCAL FILM FESTIVAL HUB</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">FILM FESTIVAL HUB</a>
            </div>

            
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                      

                    </li>


                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Admin</a>
                    </li>
 <li>
                        <a href="#"><i class="fa fa-desktop"></i>Category <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                        <li>
                                <a href="add_Category.php"><i class="fa fa-desktop"></i>Add Genre Category</a>
                            </li>

                            <li>
                                <a href="view_category.php"><i class="fa fa-desktop"></i>View Genre Category</a>
                            </li>
                            <li>
                                <a href="add_award_Category.php"><i class="fa fa-desktop"></i>Add Award Category</a>
                            </li>
                            <li>
                                <a href="view_award_category.php"><i class="fa fa-desktop"></i>View Award Category</a>
                            </li>
                         
                         
                            
                         
                            
                           
                        </ul>
                    </li>





                       <li>
                        <a href="#"><i class="fa fa-desktop"></i>Coordinators <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                        

                            <li>
                                <a href="view_film_coordinators.php"><i class="fa fa-desktop"></i>Coordinators</a>
                            </li>
                          <li>
                                <a href="view_film.php"><i class="fa fa-desktop"></i>Film</a>
                            </li>
                         
                            
                         
                            
                           
                        </ul>
                    </li>
                      <li>
                        <a href="#"><i class="fa fa-desktop"></i>Jury <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                        

                            <li>
                                <a href="add_jury.php"><i class="fa fa-desktop"></i>Add Jury</a>
                            </li>
                          <li>
                                <a href="view_jury.php"><i class="fa fa-desktop"></i>View Jury</a>
                            </li>
                         
                            
                         
                            
                           
                        </ul>
                    </li>
                   <!--  <li>
                        <a href="#"><i class="fa fa-desktop "></i>Film Selection <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                          
                             <li>
                                <a href="film_selection.php"><i class="fa fa-desktop "></i>Select Films</a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-desktop "></i>Review Film</a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-desktop "></i>Final Selection</a>
                            </li>

                            
                            
                           
                        </ul>
                    </li> -->
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>Event Management <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                        

                            <li>
                                <a href="event_management.php"><i class="fa fa-flash "></i>Create Event</a>
                            </li>
                            <li>
                                <a href="view_event.php"><i class="fa fa-flash "></i>View Event</a>
                            </li>
                            
                         
                            
                           
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>Screening <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                        

                            <li>
                                <a href="schedule_screening.php"><i class="fa fa-flash "></i>Schedule Screening</a>
                            </li>
                            <li>
                                <a href="view_screening.php"><i class="fa fa-flash "></i>View Screening</a>
                            </li>
                             <li>
                                <a href="view_score.php"><i class="fa fa-flash "></i>View Feedback</a>
                            </li>
                         
                            
                           
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>Ticket Management <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                         
                            <li>
                                <a href="ticketmanagement.php"><i class="fa fa-flash "></i>Add Ticket</a>
                            </li>

                            <li>
                                <a href="view_ticket.php"><i class="fa fa-flash "></i>Manage Ticket</a>
                            </li>
                             <li>
                                <a href="view_payment.php"><i class="fa fa-flash "></i>Payment Details</a>
                            </li>
                            
                         
                            
                           
                        </ul>
                    </li>

                    <!-- <li>
                        <a href="#"><i class="fa fa-yelp "></i>User Support <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                         
                            <li>
                                <a href="user_support.php"><i class="fa fa-flash "></i>Add Inquiries</a>
                            </li>

                        </ul>
                    </li> -->

                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>Analytics & Reporting <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                         
                            <!-- <li>
                                <a href="analytics_report.php"><i class="fa fa-flash "></i>Generate Report</a>
                            </li> -->
    
    <li>
                                <a href="announcement.php"><i class="fa fa-flash "></i>Announcement</a>
                                <a href="view_winners.php"><i class="fa fa-flash "></i>View Winners</a>
                            </li>

                        </ul>
                    </li>

                    <!-- <li>
                        <a href="#"><i class="fa fa-yelp "></i>Communication </span></a>
                         <ul class="nav nav-second-level">
                         
                            <li>
                                <a href="communication.php"><i class="fa fa-flash "></i>Add Communication</a>
                            </li>
                            

                        </ul>
                    </li> -->
                     <li>
                        <a href="logout.php"><i class="fa fa-dashboard "></i>Logout</a>
                    </li>

                    

                </ul>

            </div>

        </nav>