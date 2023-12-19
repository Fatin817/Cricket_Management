<?php
session_start();
include 'config.php';
if(isset($_GET['ID'])) {
  $_SESSION['ID'] = $_GET['ID'];
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
                        <a href="admin_set_matchresult.php" class="nav-item nav-link">Back</a>
                            <a href="adminhome.php" class="nav-item nav-link">Main</a>
                            <a href="Homepage2.php" class="nav-item nav-link text-danger">Logout</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
    <?php 
   $id = $_SESSION['ID'];
 $query=mysqli_query($conn,"select * from matchplay where ID='$id'");
 while($result=mysqli_fetch_array($query))
{
    
    ?>

        <div class="container">
            <div class="row">
                    <div class="col-12">
                        <div class="my-5">
                            <h3>Match</h3>
                            <hr>
                        </div>
                        <form class="file-upload" enctype="multipart/form-data" method="post">
                            
                            <div class="row mb-5 gx-5">
                                <div class="col-xxl-8 mb-5 mb-xxl-0">
                                    <div class="bg-secondary-soft px-4 py-5 rounded">
                                        <div class="row g-3">
                                        <h2 class="mb-4 mt-0">Match Details</h2>
                                           
                                           <div class="col-md-6">
                                               <label class="form-label">First Team*</label>
                                               <input type="text" class="form-control" placeholder="" aria-label="First name" name="name" value="<?php echo $result['team1'];?>"readonly>
                                           </div>
                                           
                                           <div class="col-md-6">
                                               <label class="form-label">Second Team*</label>
                                               <input type="text" class="form-control" placeholder="" aria-label="NID" name="nid" value="<?php echo $result['team2'];?>" readonly>
                                           </div>
                                           
                                           <div class="col-md-6">
                                               <label class="form-label">Venue*</label>
                                               <input type="text" class="form-control" placeholder="" aria-label="Address" name="address" value="<?php echo $result['venue'];?>"readonly>
                                           </div>
                                           
                                           <div class="col-md-6">
                                               <label class="form-label">Time and Date*</label>
                                               <input type="text" class="form-control" placeholder="" aria-label="Phone number" name="phone" value="<?php echo $result['time'];?>"readonly>
                                           </div>

                                           <div class="col-md-6">
    <label class="form-label">Winner*</label>
    <select class="form-select" aria-label="Team Name" name="winer">
        <?php
        $id = $_SESSION['ID'];
        $query = mysqli_query($conn, "SELECT * FROM matchplay WHERE ID='$id';");
        while ($result = mysqli_fetch_array($query)) {
        ?>
           <option value="<?php echo $result['team1']; ?>"><?php echo $result['team1']; ?></option>
           <option value="<?php echo $result['team2']; ?>"><?php echo $result['team2']; ?></option>

        <?php } ?>
    </select>
</div>

                                    </div></br>
                                    <div class="gap-3 d-flex justify-content-start text-center">
                                <button type="submit" name="update" value="Update" class="btn btn-primary btn-lg m-2">Match Winner</button>
                            </div>
                                </div>
                               
                           
                           
               
                        </form>
                        <?php } ?>   <!-- Form END -->
            </div></div></div>  
            <?php
 if (isset($_POST['update'])) {
   $winer = mysqli_real_escape_string($conn, $_POST['winer']);

    $id = $_SESSION['ID'];
    $sql= mysqli_query($conn, "UPDATE matchplay SET winer='$winer' WHERE ID='$id' ");
    if(empty($winer)){
        $error_message1 = "Please set the winner" ;
        echo '<script>
              Swal.fire({
                position: "center",
                icon: "warning",
                title: "'.$error_message1.'",
                showConfirmButton: false,
                timer: 3000
              });
            </script>';
            }
            else{
                $success_message = "Winner Declared";
                echo '<script>
                      Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "' . $success_message . '",
                        showConfirmButton: false,
                        timer:1000
                      }).then(function() {
                        // Reload the current page after the timer expires
                        window.location.href = "admin_set_matchresult.php";
                      });
                    </script>';}
     if(!$sql){
        $error_message = "Winner not Declared";
        echo '<script>
              Swal.fire({
                position: "center",
                icon: "error",
                title: "' . $error_message . '",
                showConfirmButton: false,
                timer: 3000
              });
            </script>';
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