<?php session_start();
include 'config.php';
if (strlen($_SESSION['username']) == 0){
  echo "hoy nai";
  } else{   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Admin Home</title>
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

        <style>
    /* Add this style block to your HTML or include it in your external stylesheet */

    .button-row {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap; /* Allow items to wrap to the next line if necessary */
    }

    .button-item {
        position: relative;
        flex: 0 0 30%;
        box-sizing: border-box;
        text-align: center; /* Center the content within the button-item */
        margin-bottom: 20px; /* Adjust the margin as needed */
    }

    .button-item img {
        width: 260px;
        height: 250px;
    }

    .btn {
        display: block;
        margin-top: 10px; /* Adjust the margin as needed */
    }
</style>


    </head>

    <body>
         <!-- Top Bar Start -->
      <?php include 'top bar.php';?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <?php 
$us = $_SESSION['username'];
$query=mysqli_query($conn,"select * from admin where username='$us'");
while($result=mysqli_fetch_array($query))
{?>  
        <div class="nav-bar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a class="navbar-brand text-dark">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span> <i class="fas fa-bars fa-2x navbar-icon text-dark"></i></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                           
                            <a href="adminprofile.php" class="nav-item nav-link">Profile</a>
                            <a href="Homepage2.php" class="nav-item nav-link text-danger">Logout</a>
                            
                        </div>
                       
                    </div>
                </nav>
            </div>
        </div>
        <?php } ?>
        <!-- Nav Bar End -->


<!-- Button Section Start -->
<div class="button-section">
    <div class="container">
        <div class="button-row">
            <div class="button-item">
                <img src="1.jpg" alt="Image">
                <a class="btn btn-custom" href="admin_view_playerlist.php">Player List</a>
            </div>
            <div class="button-item">
                <img src="6.jpg" alt="Image">
                <a class="btn btn-custom" href="admin_team_build.php">Team build</a>
            </div>
            <div class="button-item">
                <img src="1.jpg" alt="Image">
                <a class="btn btn-custom" href="admin_player_request.php">Player Request</a>
            </div>
            <div class="button-item">
                <img src="match.jpg" alt="Image">
                <a class="btn btn-custom" href="admin_set_match.php">Create Match</a>
            </div>
            <div class="button-item">
                <img src="6.jpg" alt="Image">
                <a class="btn btn-custom" href="admin_update_team.php">Edit Team</a>
            </div>
            <div class="button-item">
                <img src="no.jpg" alt="Image">
                <a class="btn btn-custom" href="admin_set_matchresult.php">Match result</a>
            </div>
        </div>
    </div>
</div>
<!-- Button Section End -->




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
<?php } ?>