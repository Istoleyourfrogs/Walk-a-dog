<?php
require "database.inc.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<!--head start-->
<head>
    <!--meta tag start-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="walk·a·dog">
    <meta name="keywords" content="dogs, walking dogs, service for walking dogs">
    <meta name="description" content="service for walking your dog">
    <meta name="author" content="Linolada">
    <meta name="copyright" content="Linolada">
    <meta name="robots" content="index,follow">


    <!--title-->
    <title>walk·a·dog</title>
    <!--title end-->

    <!-- faveicon start   -->
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">

    <!-- stylesheet start -->
    <link href="https://fonts.googleapis.com/css?family=Kalam:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<!--head end-->

<body>
<!--header start-->
<header class="main-header" id="home">

    <!-- Start Navigation -->
    <div id="masthead" class="site-header menu">
        <div class="container">
            <div class="site-branding">
                <a href="../index.php" class="logo"><img src="../images/logo.svg" alt="logo"></a>

            </div>
            <!-- .site-branding -->
            <div class="header-nav-search">

                <div class="toggle-button">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div id="main-navigation">
                    <nav class="main-navigation">
                        <div class="close-icon">
                            <i class="fa fa-close"></i>
                        </div>
                        <form action="logout.inc.php" method="post">
                            <ul>
                                <li><a href="../index.php#home">Home</a></li>
                                <li><a href="../index.php#about">About</a> </li>
                                <li><a href="../index.php#pricing">Pricing</a></li>
                                <li><a href="../index.php#booking">Booking</a></li>
                                <li><a href="../index.php#contact">Contact</a></li>
                                <?php
                                if(isset($_SESSION['username'])){
                                    //displaying the logout button and the Admin link if the session has started
                                    $logout = "<li><button class=\"btn btn-primary\" type=\"submit\" name=\"submit\">Logout</button></li>";
                                    $admin = "<li><a href=\"admin.php\">Admin</a></li>";
                                    echo $admin;
                                    echo $logout;
                                }
                                ?>
                            </ul>
                        </form>


                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navigation -->

</header>
<!--header end-->



<div class="clearfix"></div>
<!-- breadcrumb start -->
<section class="bizface-breadcrumb" style="background: url(images/dogBoneBackground.jpg) no-repeat center;">
    <div class="bizface-breadcrumb-overlay"></div>
    <div class="bizface-breadcrumb-title">
        <h1>Verification page</h1>
    </div>
</section>
<!-- breadcrumb end -->

<!--error-->
<div class="page error404-page">
    <div class="error-page">
        <div class="container">
            <div class="bizface-errorpage">
                <strong>VERIFICATION</strong> <br />
                <?php
                    if(isset($_GET['code'])){
                        $code = $_GET['code'];
                        //depending on the query display the appropriate message
                        $sql = "UPDATE users SET verified=1 WHERE code='$code';";
                        $query = mysqli_query($connect,$sql);
                        if(!$query){
                            echo "
                                <b>Verification unsuccessful</b> 
                                <em>Sorry something went wrong</em>
                                <p>Try to verify again in a few minutes.</p>
                                <br />
                            ";
                        }else{
                            echo "
                                <b>Verification successful<</b> 
                                <em>Thank you for registering</em>
                                <p>Can't wait to see you soon.</p>
                                <br />";
                        }

                    }else{
                        echo "
                            <b>Verification unsuccessful</b> 
                            <em>Oops something went wrong!</em>
                            <p>Please try again later!</p>
                            <br />
                        ";
                    }
                    ?>
                <a href="../index.php" class="btn btn-primary"> Go Back</a>
            </div>
        </div>
    </div>
</div>


<!-- js library start -->
<script  src="js/jquery-3.2.1.min.js"></script>
<script  src="js/bootstrap.min.js"></script>
<script  src="js/owl.carousel.min.js"></script>
<script  src=js/jquery.mixitup.min.js></script>
<script  src="js/jquery.magnific-popup.min.js"></script>
<script  src="js/waypoints.min.js"></script>
<script  src="js/jquery.counterup.min.js"></script>
<script  src=js/wow.js></script>
<script  src="js/script.js"></script>

<!-- js library end -->

</body>
</html>
