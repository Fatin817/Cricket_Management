<?php
session_start();
include 'config.php';
if (strlen($_SESSION['playeremail']) == 0) {
    echo "hoy nai";
} else {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Player Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="Css/css/profile.css">
        <link href="Css/css/style4.css" rel="stylesheet">
        <!-- Extra libraries -->
     <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        input[type="file"] {
  display: none;
}
.custom-file-upload {
  display: inline-block;
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 12px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  font-weight: 100px;
}
.custom-file-upload:hover {
  background-color: #0069d9;
}


</style>
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
                            <a href="playerhome.php" class="nav-item nav-link">Main</a>
                            <a href="Homepage2.php" class="nav-item nav-link text-danger">Logout</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
    <?php 
    $id = $_SESSION['playeremail'];
 $query=mysqli_query($conn," SELECT team.*, 
 player_info_1.*, 
 player_info_2.*, 
 player_info_3.*, 
 player_info_4.*, 
 player_info_5.*, 
 player_info_6.*, 
 player_info_7.*, 
 player_info_8.*, 
 player_info_9.*, 
 player_info_10.*, 
 player_info_11.*
FROM team
LEFT JOIN player_info AS player_info_1 ON team.ID1 = player_info_1.Player_ID
LEFT JOIN player_info AS player_info_2 ON team.ID2 = player_info_2.Player_ID
LEFT JOIN player_info AS player_info_3 ON team.ID3 = player_info_3.Player_ID
LEFT JOIN player_info AS player_info_4 ON team.ID4 = player_info_4.Player_ID
LEFT JOIN player_info AS player_info_5 ON team.ID5 = player_info_5.Player_ID
LEFT JOIN player_info AS player_info_6 ON team.ID6 = player_info_6.Player_ID
LEFT JOIN player_info AS player_info_7 ON team.ID7 = player_info_7.Player_ID
LEFT JOIN player_info AS player_info_8 ON team.ID8 = player_info_8.Player_ID
LEFT JOIN player_info AS player_info_9 ON team.ID9 = player_info_9.Player_ID
LEFT JOIN player_info AS player_info_10 ON team.ID10 = player_info_10.Player_ID
LEFT JOIN player_info AS player_info_11 ON team.ID11 = player_info_11.Player_ID
");
 while($result=mysqli_fetch_array($query))
{
    ?>

        <div class="container">
            <div class="row">
                    <div class="col-12">
                        <div class="my-5">
                            <h3>Team <?php echo $result['venue'];?></h3>
                            <hr>
                        </div>
                        <form class="file-upload" enctype="multipart/form-data" method="post">
    <div class="row mb-5 gx-5">
        <div class="col-xxl-8 mb-5 mb-xxl-0">
            <div class="bg-secondary-soft px-4 py-5 rounded">
                <div class="row g-3">
                    <h2 class="mb-4 mt-0">Team Details</h2>
                    <div class="col-md-4">
                                                <label class="form-label">Player 1 *</label>
                                                <a href="player_profile.php?player_id=<?php echo $result['ID1']; ?>" class="form-control" aria-label="NID" name="Player1"><?php echo $result['player1'];?></a>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <label class="form-label">Player 2 *</label>
                                                <a href="player_profile.php?player_id=<?php echo $result['ID2']; ?>" class="form-control" aria-label="NID" name="Player2"><?php echo $result['player2'];?></a>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Player 3 *</label>
                                                <a href="player_profile.php?player_id=<?php echo $result['ID3']; ?>" class="form-control" aria-label="NID" name="Player3"><?php echo $result['player3'];?></a>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Player 4 *</label>
                                                <a href="player_profile.php?player_id=<?php echo $result['ID4']; ?>" class="form-control" aria-label="NID" name="Player4"><?php echo $result['player4'];?></a>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Player 5 *</label>
                                                <a href="player_profile.php?player_id=<?php echo $result['ID5']; ?>" class="form-control" aria-label="NID" name="Player5"><?php echo $result['player5'];?></a>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Player 6 *</label>
                                                <a href="player_profile.php?player_id=<?php echo $result['ID6']; ?>" class="form-control" aria-label="NID" name="Player6"><?php echo $result['player6'];?></a>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Player 7 *</label>
                                                <a href="player_profile.php?player_id=<?php echo $result['ID7']; ?>" class="form-control" aria-label="NID" name="Player7"><?php echo $result['player7'];?></a>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Player 8 *</label>
                                                <a href="player_profile.php?player_id=<?php echo $result['ID8']; ?>" class="form-control" aria-label="NID" name="Player8"><?php echo $result['player8'];?></a>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Player 9 *</label>
                                                <a href="player_profile.php?player_id=<?php echo $result['ID9']; ?>" class="form-control" aria-label="NID" name="Player9"><?php echo $result['player9'];?></a>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Player 10 *</label>
                                                <a href="player_profile.php?player_id=<?php echo $result['ID10']; ?>" class="form-control" aria-label="NID" name="Player10"><?php echo $result['player10'];?></a>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Player 11 *</label>
                                                <a href="player_profile.php?player_id=<?php echo $result['ID11']; ?>" class="form-control" aria-label="NID" name="Player11"><?php echo $result['player11'];?></a>
                                            </div> 


                </div>
            </div>
        </div>
    </div>
</form>


                        <?php } ?> 
                          <!-- Form END -->
            </div></div></div>  


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