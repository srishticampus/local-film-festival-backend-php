
<?php
require 'connection.php';
@session_start();
if(!isset($_SESSION['coordinator'])){
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
    <title>Responsive Bootstrap Advance Admin Template</title>

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
                            <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Film Coordinator</a>
                        </li>
                    <!--     <li>
                            <a href="#"><i class="fa fa-desktop "></i>Register <span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                              
                                 <li>
                                    <a href="register.php"><i class="fa fa-desktop "></i>Register Here</a>
                                </li>
    
           
    
                                
                                
                               
                            </ul>
                        </li> -->
                         <li>
                            <a href="#"><i class="fa fa-yelp "></i>Add a film for Screening <span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                             
                                
    
                                <li>
                                    <a href="add_film.php"><i class="fa fa-flash "></i>Add Film</a>
                                </li>
                                  <li>
                                    <a href="view_films.php"><i class="fa fa-flash "></i>View All Film</a>
                                </li>
                                
                             
                                
                               
                            </ul>
                        </li>
    
                      
    
                        <li>
                            <a href="#"><i class="fa fa-yelp "></i>View status of films submitted <span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                             
                                <li>
                                    <a href="view_status.php"><i class="fa fa-flash "></i>View Status</a>
                                </li>
    
              
                            </ul>
                        </li>
    
                        <li>
                            <a href="#"><i class="fa fa-yelp "></i>View Submitted Films <span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                             
                                <li>
                                    <a href="View_film.php"><i class="fa fa-flash "></i>View Films</a>
                                </li>
    
                            </ul>
                        </li>
    
                        <li>
                            <a href="#"><i class="fa fa-yelp "></i>View Status of Award selection <span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                             
                                <li>
                                    <a href="view_awards.php"><i class="fa fa-flash "></i>View Awards</a>
                                </li>
                              
    
                            </ul>
                        </li>
                           <li>
                            <a class="" href="profile.php"><i class="fa fa-dashboard "></i>Profile</a>
                        </li>
                           <li>
                            <a class="" href="logout.php"><i class="fa fa-dashboard "></i>Logout</a>
                        </li>   
    
                    </ul>
    
                </div>
    
            </nav>