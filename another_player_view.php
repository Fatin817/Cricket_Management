<?php
session_start();
include 'config.php';
// Check if player ID is set in the URL
if (isset($_GET['player_id'])) {
    $player_id = mysqli_real_escape_string($conn, $_GET['player_id']);

 if (isset($_SESSION['playeremail'])) {
    $sender_id = $_SESSION['playeremail'];
} else {
    echo "Sender's ID not found in the session";
} // Fetch player data based on the player ID
   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Another Player</title>
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
                            <a href="playerhome.php" class="nav-item nav-link">My Home</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
    <?php 
  $query = mysqli_query($conn, "SELECT * FROM player_info WHERE Player_ID = '$player_id'");
  $result = mysqli_fetch_assoc($query);

  // Check if the player exists
  if ($result) {
    ?>

        <div class="container">
            <div class="row">
                    <div class="col-12">
                        <div class="my-5">
                            <h3><?php echo $result['Name'];?> Profile</h3>
                            <hr>
                        </div>
                        <form class="file-upload" enctype="multipart/form-data" method="post">
                            
                            <div class="row mb-5 gx-5">
                                <div class="col-xxl-8 mb-5 mb-xxl-0">
                                    <div class="bg-secondary-soft px-4 py-5 rounded">
                                        <div class="row g-3">
                                            <h2 class="mb-4 mt-0">Details</h2>
                                           
                                            <div class="col-md-6">
                                                <label class="form-label">Name *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="First name" name="name" value="<?php echo $result['Name'];?>"readonly>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <label class="form-label">NID *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="nid" value="<?php echo $result['NID'];?>" readonly>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <label class="form-label">Address *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="Address" name="address" value="<?php echo $result['Address'];?>"readonly>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <label class="form-label">Phone number *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="Phone number" name="phone" value="<?php echo $result['Phone_Number'];?>"readonly>
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label">Position *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="position" value="<?php echo $result['Position'];?>"readonly>
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label">Player Match *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="playermatch" value="<?php echo $result['Played_Match'];?>"readonly>
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label">Runs *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="runs" value="<?php echo $result['Runs'];?>"readonly>
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label">Wickets*</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="wickets" value="<?php echo $result['Wickets'];?>"readonly>
                                            </div>
                                        
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Email *</label>
                                                <input type="email" class="form-control"  name="email" value="<?php echo $result['Email'];?>"readonly>
                                            </div>
                                        </div> 
                                    </div>
                                 
                                </div>
                                <!-- Upload profile -->
                                <div class="col-xxl-4">
                                    <div class="bg-secondary-soft rounded">
                                        <div class="row g-3">
                                            <h4 class="mb-4 mt-0">Profile Photo</h4></br></br>
                                            <div class="text-center">
                                                <!-- Image upload -->
                                                <div class="position-relative  mb-3 ">
                                                    <img src="./uploaded_img/<?php echo($result['Profile_Photo']); ?>"  alt="Profile image" style="max-width: 70%; max-height: 100%;">
                                                </div>
                                                <div class="col-md-12">
                                                <label class="form-label">Enter a Massage For This Player</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="msg" value="" >
                                            </div>
                                                <div class="gap-3 d-flex justify-content-start text-center">
                                <button type="submit" name="update" value="Update" class="btn btn-primary btn-lg m-2">Send Request</button>
                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            
                             <!-- Row END -->
                             
                        </form>
                        <?php } ?>   <!-- Form END -->
            </div></div></div>  
            <?php
include 'config.php';

// Check if the form is submitted
if (isset($_POST['update'])) {
    // Get the target player's email from the form
    $targetEmail = mysqli_real_escape_string($conn, $_POST['email']);
    $targetname = mysqli_real_escape_string($conn, $_POST['name']);
    $msg = mysqli_real_escape_string($conn, $_POST['msg']);
   // Fetch the sender's name
$senderQuery = mysqli_query($conn, "SELECT * FROM player_info WHERE Email = '$sender_id'");
$senderResult = mysqli_fetch_assoc($senderQuery);
if ($senderResult) {
    $senderName = $senderResult['Name'];  
    $senderemail = $senderResult['Email']; 
    $senderid = $senderResult['Player_ID']; 
    
} else {
   
    echo "No data found for the receiver";
}  
    // Check if the request already exists
    $checkRequestQuery = mysqli_query($conn, "SELECT * FROM friend_requests WHERE target_email = '$targetEmail' AND Sender_email = '$senderemail'");
    
    if (mysqli_num_rows($checkRequestQuery) > 0) {
        echo '<script>
            Swal.fire({
                icon: "warning",
                title: "Request already sent",
                showConfirmButton: false,
                timer: 3000
            });
        </script>';
    } else {
        // Insert the request into the database
        $insertRequestQuery = mysqli_query($conn, "INSERT INTO friend_requests (Reciver_name, target_email,Sender_name, Sender_email,Sender_id,reciver_id,msg) VALUES ('$targetname', '$targetEmail','$senderName','$senderemail','$senderid','$player_id','$msg')");

        if ($insertRequestQuery) {
            echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Request sent successfully",
                    showConfirmButton: false,
                    timer: 3000
                });
            </script>';
        } else {
            echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Error sending request",
                    showConfirmButton: false,
                    timer: 3000
                });
            </script>';
        }
    }
}
?>

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