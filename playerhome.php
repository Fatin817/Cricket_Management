<?php session_start();
include 'config.php';
if (strlen($_SESSION['playeremail']) == 0){
  echo "hoy nai";
  } else{
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Player Home</title>
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
    .card {
        border: none; /* Remove card border */
    }

    .card-img-top {
        width: 100px; /* Set the desired width */
        height: 200px; /* Set the desired height */
        object-fit: cover; /* Ensure the image covers the entire space */
        border-radius: 50%; /* Make the image round */
        display: block; /* Center the image */
        margin: 0 auto; /* Center the image */
    }

    .card-body {
        text-align: center; /* Center the card body content */
    }
</style>

    </head>

    <body>
        <!-- Top Bar Start -->
      <?php include 'top bar.php';?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <?php 
$email = $_SESSION['playeremail'];
$query=mysqli_query($conn,"select * from player_info where Email='$email'");
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
                            <a href="playerprofile.php" class="nav-item nav-link">My Profile</a>
                            <a href="player_request_pending.php" class="nav-item nav-link">Request</a>
                            <a href="player_see_match_details.php" class="nav-item nav-link">Match</a>
                            <a href="player_see_team.php" class="nav-item nav-link">Team</a>
                            <a href="Homepage2.php" class="nav-item nav-link text-danger">Logout</a>
                            
                        </div>
                       
                    </div>
                </nav>
            </div>
        </div>
        <?php } ?>
        <!-- Nav Bar End -->


<!-- Updated Card Start -->
<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-5 g-4">
    <?php
                // Retrieve all player information from the database excluding the currently logged-in player
                $query = mysqli_query($conn, "SELECT * FROM player_info WHERE Email != '$email'");
                while ($result = mysqli_fetch_array($query)) {
                ?>
            <div class="col">
                <div class="card h-100">
                    <img src="./uploaded_img/<?php echo $result['Profile_Photo']; ?>" class="card-img-top" alt="Player Image">
                    <div class="card-body">
                        <h6 class="card-title"><?php echo $result['Name']; ?></h6>
                        <p class="card-text small">Email: <?php echo $result['Email']; ?></p>
                        <p class="card-text small">Phone: <?php echo $result['Phone_Number']; ?></p>
                        <!-- Add any additional information you want to display -->
                        <a href="another_player_view.php?player_id=<?php echo $result['Player_ID']; ?>" class="btn btn-primary btn-sm">View Profile</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<!-- Updated Card End -->

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