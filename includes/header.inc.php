<?php
session_start();
$host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
echo "<!DOCTYPE html>
<html lang=\"en\">

<!--head start-->
<head>
    <!--meta tag start-->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"title\" content=\"walk·a·dog\">
    <meta name=\"keywords\" content=\"dogs, walking dogs, service for walking dogs\">
    <meta name=\"description\" content=\"service for walking your dog\">
    <meta name=\"author\" content=\"Linolada\">
    <meta name=\"copyright\" content=\"Linolada\">
    <meta name=\"robots\" content=\"index,follow\">
    

    <!--title-->
    <title>walk·a·dog</title>
    <!--title end-->

    <!-- faveicon start   -->
    <link rel=\"icon\" href=\"images/favicon.png\" type=\"image/x-icon\">

    <!-- stylesheet start -->
    <link href=\"https://fonts.googleapis.com/css?family=Kalam:400,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">";
    if($host == 'localhost/PHP/walk-a-dog/Walk-a-dog/admin.php' or $host == 'localhost/PHP/walk-a-dog/Walk-a-dog/admin.php?login=success' or $host == 'localhost/PHP/walk-a-dog/Walk-a-dog/admin.php?login=error' or $host == 'localhost/PHP/walk-a-dog/Walk-a-dog/admin.php?login=char' or $host == 'localhost/PHP/walk-a-dog/Walk-a-dog/admin.php?login=fatalError')
    {
        echo "<link rel=\"stylesheet\" href=\"css/admin.css\">";
    }
echo"
</head>
<!--head end-->

<body>
    <!--header start-->
    <header class=\"main-header\">

        <!-- Start Navigation -->
        <div id=\"masthead\" class=\"site-header menu\">
            <div class=\"container\">
                <div class=\"site-branding\">
                    <a href=\"index.php\" class=\"logo\"><img src=\"images/dog.svg\" alt=\"logo\"></a>

                </div>
                <!-- .site-branding -->
                <div class=\"header-nav-search\">

                    <div class=\"toggle-button\">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div id=\"main-navigation\">
                        <nav class=\"main-navigation\">
                            <div class=\"close-icon\">
                                <i class=\"fa fa-close\"></i>
                            </div>
                            <ul>
                                <li><a href=\"#home\">Home</a></li>
                                <li><a href=\"#about\">About</a> </li>
                                <li><a href=\"#pricing\">Pricing</a></li>
                                <li><a href=\"#booking\">Booking</a></li>
                                <li><a href=\"#contact\">Contact</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navigation -->
    
    </header>
    <!--header end-->
";
