<?php
session_start();
include 'config.php';
if(isset($_GET['team'])) {
  $_SESSION['team'] = $_GET['team'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Admin Profile</title>
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
    $id = $_SESSION['team'];
 $query=mysqli_query($conn,"select * from team where venue='$id'");
 while($result=mysqli_fetch_array($query))
{ ?>
        <div class="container">
            <div class="row">
                    <div class="col-12">
                        <div class="my-5">
                            <h3>Team Member</h3>
                            <hr>
                        </div>
                        <form class="file-upload" enctype="multipart/form-data" method="post">
                            
                            <div class="row mb-5 gx-5">
                                <div class="col-xxl-8 mb-5 mb-xxl-0">
                                    <div class="bg-secondary-soft px-4 py-5 rounded">
                                        <div class="row g-3">
                                            <div class="col-md-12">
                                                <label class="form-label">Team Name *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="First name" name="Venue" value="<?php echo $result['venue'];?>"readonly >
                                            </div>

                                          
                                            <div class="col-md-4">
                                                <label class="form-label">Player 1 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player1"value="<?php echo $result['player1'];?>"readonly  >
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <label class="form-label">Player 2 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player2"value="<?php echo $result['player2'];?>"readonly >
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Player 3 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player3"value="<?php echo $result['player3'];?>"readonly >
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Player 4 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player4" value="<?php echo $result['player4'];?>"readonly >
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Player 5 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player5"value="<?php echo $result['player5'];?>"readonly >
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Player 6 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player6"value="<?php echo $result['player6'];?>"readonly  >
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Player 7 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player7"value="<?php echo $result['player7'];?>"readonly  >
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Player 8 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player8" value="<?php echo $result['player8'];?>"readonly >
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Player 9 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player9"value="<?php echo $result['player9'];?>"readonly  >
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Player 10 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player10" value="<?php echo $result['player10'];?>"readonly >
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Player 11 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player11"value="<?php echo $result['player11'];?>"readonly >
                                            </div> 
                                         
                                    
                              
                            
                        </form>
                        <?php } ?>
   <!-- Form END -->
            </div></div></div>  
  
 
         </body>
</html>
<?php } ?>