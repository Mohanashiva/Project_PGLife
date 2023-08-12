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
                    <?php
                    // check if user is logged in or not
                    if (!isset($_SESSION["user_id"])) {
                        ?>

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

                        <?php

                    } else {

                    ?>

                    <div class="nav-name">
                        Hi, <?php echo $_SESSION["full_name"] ?>
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

                        <?php
                    }
                        ?>
                        </ul>
                </div>
            </nav>
        </div>

        <div id="loading">

        </div>
