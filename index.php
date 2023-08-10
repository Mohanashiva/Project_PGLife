<!DOCTYPE html>
<html>

<head>

    <title> PG Life homepage </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap.min-->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!--Font-awesome - This CSS file will help you to create the icons in the modals, amenities section, etc.-->
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <!--Google fonts - you can use the following CSS for the open sans font used in the web application.-->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />
    <!-- linking my css files -->
    <link href="css/common.css" rel="stylesheet" />
    <link href="css/home.css" rel="stylesheet" />
</head>

<body>
    <!-- creating header with sticky-top i.e.,fixed on top-->
    <div class="header sticky-top">
        <!-- creating navbar -->
        <nav class="navbar navbar-expand-md navbar-light">
            <!-- navbar element -->
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" />
            </a>
            <!-- button that appears when collapsed -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <!-- spans default three line - icon -->
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- content on RHS/collapse button -->
            <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!-- using modal functionality for item-1-->
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
                            <i class="fas fa-user"></i>Signup
                        </a>
                    </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <!-- and item-2 -->
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
                            <i class="fas fa-sign-in-alt"></i>Login
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- modal code data for item-1 -->
    <!--  -->
    <!--  -->
    <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signup-heading">Signup with PGLife</h5>
                    <!-- button to close modal -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- creating signup form -->
                <div class="modal-body">
                    <form id="signup-form" class="form" role="form">
                        <!--  Bootstrap's "input-group" class is often used to style input fields with additional elements like icons or buttons. -->
                        <div class="input-group form-group">
                            <!-- used to create space for the icon that will be displayed before the input field. -->
                            <div class="input-group-prepend">
                                <!--  Bootstrap class used for styling elements within an input group. It's often used to style icons, like in this case -->
                                <span class="input-group-text">
                                    <!-- icon -->
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="full_name" placeholder="Full Name"
                                maxlength="30" required>
                        </div>
                        <!-- phone number -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-phone-alt"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number"
                                maxlength="10" minlength="10" required>
                        </div>
                        <!-- email -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <!-- password -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                minlength="6" required>
                        </div>
                        <!-- college name -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-university"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="college_name" placeholder="College Name"
                                maxlength="150" required>
                        </div>
                        <!-- gender details -->
                        <div class="form-group">
                            <span>I'm a</span>
                            <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" /> Male
                            <label for="gender-male">
                            </label>
                            <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
                            <label for="gender-female">
                                Female
                            </label>
                        </div>
                        <!-- create button -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Create Account</button>
                        </div>
                    </form>
                </div>
                <!-- if exists redirect -->
                <div class="modal-footer">
                    <span>Already have an account?
                        <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Login</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- similarly we create modal for login -->

    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login-heading">Login with PGLife</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- user login -->
                <div class="modal-body">
                    <form id="login-form" class="form" role="form">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <!-- user password -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                minlength="6" required>
                        </div>
                        <!-- enter -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Login</button>
                        </div>
                    </form>
                </div>
                <!-- if not a user redirect -->
                <div class="modal-footer">
                    <span>
                        <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">Click here</a>
                        to register a new account
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <!--  -->
    <!--  -->


    <!-- image banner and text -->
    <div class="banner-container">
        <h2 class="white pb-3">happines something heading here</h2>

        <!-- adding search bar -->
        <form id="search-form">
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
                <a href="property_list.php">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.png" class="city-img">
                    </div>
                </a>
            </div>
            <!-- item-2 -->
            <div class="city-card-container col-md">
                <a href="property_list.php">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" class="city-img">
                    </div>
                </a>
            </div>
            <!-- item-3 -->
            <div class="city-card-container col-md">
                <a href="property_list.php">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" class="city-img">
                    </div>
                </a>
            </div>
            <!-- item-4 -->
            <div class="city-card-container col-md">
                <a href="property_list.php">
                    <div class="city-card rounded-circle">
                        <img src="img/hyderabad.png" class="city-img">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- end of elements -->
    <!-- footer of page begin -->
    <div class="footer">
        <!-- footer-container and did css -->
        <div class="page-container footer-container">
            <!-- footer cities css -->
            <div class="footer-cities">
                <!-- applied flex to cities -->
                <div class="footer-city">
                    <!-- footer city - css -->
                    <a href="property_list.php">PG in</a>
                </div>
                <div class="footer-city">
                    <a href="property_list.php">PG in Mumbai</a>
                </div>
                <div class="footer-city">
                    <a href="property_list.php">PG in Bangalore</a>
                </div>
                <div class="footer-city">
                    <a href="property_list.php">PG in Hyderabad</a>
                </div>
            </div>
            <!-- css for final text -->
            <div class="footer-copyright">
                © 2020 Copyright PG Life
            </div>
        </div>
    </div>
</body>
<!-- to perform bootstrap functionality  -->
<!-- necessary to add Bootstrap JavaScript file and jQuery script -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- end of html -->
</html>