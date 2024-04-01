
<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['jury'])&&!(isset($_SESSION['event']))){
  echo "please login";
 echo '<a href="index.php">Click Here...</a>';
  exit();
}

$jury=$_SESSION['jury'];
$event_id=$_SESSION['event'];
$s="select * from event where id=$event_id";
$r=$con->query($s);
$ro1=$r->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $ro1['event_name'];?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">


    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="logo">
                <a href="./home.php">
                    <h3><?php echo $ro1['event_name'];?></h3>
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li class="active"><a href="./home.php">Home</a></li>
                       <li><a href="./list_film.php">Film </a></li>
                        
                        <li><a href="./schedule.php">Schedule</a></li>
                      
                        <li><a href="./view_mark.php">Feedback</a></li>
                    </ul>
                </nav>
                <a href="logout.php" class="primary-btn top-btn"> Logout</a>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
   