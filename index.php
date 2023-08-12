<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> PG Life homepage </title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "includes/header.php";
    ?>

    <!-- image banner and text -->
    <div class="banner-container">
        <h2 class="white pb-3">happines something heading here</h2>

        <!-- adding search bar -->
        <form id="search-form" action="property_list.php" method="GET">
            <!-- contentents will be wrapped inside the input-group container. -->
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id='city' name='city'
                    placeholder="Enter your city to search for PGs" />
                <!--  input-group-append class is used to attach the button to the input on the right side. -->
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="page-container">
        <h1 class="city-heading">
            Major Cities
        </h1>
        <!-- creating row and add elements -->
        <div class="row">
            <!-- city-card-container apply css -->
            <!-- col-md specify it to occupy columns in medium sized devices -->
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Delhi">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.png" class="city-img">
                    </div>
                </a>
            </div>
            <!-- item-2 -->
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Mumbai">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" class="city-img">
                    </div>
                </a>
            </div>
            <!-- item-3 -->
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Bengaluru">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" class="city-img">
                    </div>
                </a>
            </div>
            <!-- item-4 -->
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Hyderabad">
                    <div class="city-card rounded-circle">
                        <img src="img/hyderabad.png" class="city-img">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- end of elements -->
   
    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php"
    ?>
<!-- end of html -->
</html>