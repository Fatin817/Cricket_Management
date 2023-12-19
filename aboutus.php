<?php
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>About Us</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="Css/css/vav.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
      <?php include 'top bar.php';?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a class="navbar-brand text-dark">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span> <i class="fas fa-bars fa-2x navbar-icon text-dark"></i></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="Homepage2.php" class="nav-item nav-link">Home</a>
                            <a href="aboutus.php" class="nav-item nav-link">About</a>
                            
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown">Login</a>
                                <div class="dropdown-menu">
                                    <a href="admin_login.php" class="dropdown-item">Admin</a>
                                    <a href="player_login.php" class="dropdown-item">Team</a>
                                   
                                </div>
                            </div>
                            <a href="contactus.php" class="nav-item nav-link ">Contact</a>
                        </div>
                       
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="1.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <p>About Us</p>
                            <h2>Finding a trusted place where you can find your desire match</h2>
                        </div>
                        <div class="about-content">
                            <ul>
                            <li><i class="far fa-check-circle"></i>Finding Team</li>
                                <li><i class="far fa-check-circle"></i>Pin Match Venue</li>
                                <li><i class="far fa-check-circle"></i>Player Details</li>
                                <li><i class="far fa-check-circle"></i>Simple Navigation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        <!-- Facts Start -->
        <div class="facts d-flex align-items-center justify-content-center" data-parallax="scroll" data-image-src="img/facts.jpg">
    <div class="container">
        <div class="row column"> <!-- Apply "column" class to the row -->
            <div class="col-lg-6 col-md-6">
                <div class="facts-item text-center">
                    <i class="fa fa-users"></i>
                    <div class="facts-text">
                        <?php
                        $sql = mysqli_query($conn,"SELECT COUNT(*) FROM player_info");
                        $result = mysqli_fetch_array($sql);
                        echo '<h3 data-toggle="counter-up" class="text-dark">' . $result[0] . '</h3>';
                        echo '<p class="text-dark">Player Number</p>';
                        ?>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6">
                <div class="facts-item text-center">
                    <i class="fa fa-users"></i>
                    <div class="facts-text">
                        <?php
                        $sql = mysqli_query($conn,"SELECT COUNT(*) FROM team");
                        $result = mysqli_fetch_array($sql);
                        echo '<h3 data-toggle="counter-up" class="text-dark">' . $result[0] . '</h3>';
                        echo '<p class="text-dark">Player Number</p>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

         <!-- Footer Start -->
         <?php include 'footer.php'; ?>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
