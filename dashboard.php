<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard or profile page</title>

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
    <link href="css/dashboard.css" rel="stylesheet" />

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
                    <div class="nav-name">
                        Hi shiva!
                    </div>
                    <li class="nav-item">
                        <!-- using modal functionality for item-1-->
                        <a class="nav-link" href="dashboard.php">
                            <i class="fas fa-user"></i>Dashboard
                        </a>
                    </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <!-- and item-2 -->
                        <a class="nav-link" href="#">
                            <i class="fas fa-sign-in-alt"></i>Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- breadcurmb code -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Dashboard
            </li>
        </ol>
    </nav>
    <!-- CONTAINER -->
    <div class="my-profile page-container">
        <h1>my profile</h1>
        <!-- ROWS INSIDE CONTAINER -->
        <div class="row">
            <!-- CONTAINER INSIDE CONTAINER FOR IMAGE -->
            <!-- column width of an element in a responsive grid system -->
            <div class="col-md-3 profile-img-container">
                <i class="fas fa-user profile-img"></i>
            </div>
            <div class="col-md-9">
                <div class="row no-gutters justify-content-between align-items-end">
                    <div class="profile">
                        <div class="name">Shiva Raju</div>
                        <div class="email">Shiva@gmail.com</div>
                        <div class="phone">7893451234</div>
                        <div class="college">Internshala</div>
                    </div>
                    <div class="edit">
                        <div class="edit-profile">Edit Profile</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-interested-properties">
        <div class="page-container">
            <h1>My Interested Properties</h1>

            <div class="property-card property-id-1 row">
                <div class="image-container col-md-4">
                    <img src="img/properties/1/eace7b9114fd6046.jpg" />
                </div>
                <div class="content-container col-md-8">
                    <div class="row no-gutters justify-content-between">
                        <div class="star-container" title="4.8">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="interested-container">
                            <i class="is-interested-image fas fa-heart" property_id="1"></i>
                        </div>
                    </div>
                    <div class="detail-container">
                        <div class="property-name">Ganpati Paying Guest</div>
                        <div class="property-address">Police Beat, Sainath Complex, Besides, SV Rd, Daulat Nagar,
                            Borivali East, Mumbai - 400066</div>
                        <div class="property-gender">
                            <img src="img/unisex.png">
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="rent-container col-6">
                            <div class="rent">Rs 8,500/-</div>
                            <div class="rent-unit">per month</div>
                        </div>
                        <div class="button-container col-6">
                            <a href="property_detail.php" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="property-card property-id-2 row">
                <div class="image-container col-md-4">
                    <img src="img/properties/1/1d4f0757fdb86d5f.jpg" />
                </div>
                <div class="content-container col-md-8">
                    <div class="row no-gutters justify-content-between">
                        <div class="star-container" title="4.5">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="interested-container">
                            <i class="is-interested-image fas fa-heart" property_id="2"></i>
                        </div>
                    </div>
                    <div class="detail-container">
                        <div class="property-name">Navkar Paying Guest</div>
                        <div class="property-address">44, Juhu Scheme, Juhu, Mumbai, Maharashtra 400058</div>
                        <div class="property-gender">
                            <img src="img/male.png">
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="rent-container col-6">
                            <div class="rent">Rs 9,500/-</div>
                            <div class="rent-unit">per month</div>
                        </div>
                        <div class="button-container col-6">
                            <a href="property_detail.php" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
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