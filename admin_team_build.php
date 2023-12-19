
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
                            <a href="adminhome.php" class="nav-item nav-link">Main</a>
                            <a href="Homepage2.php" class="nav-item nav-link text-danger">Logout</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
        <div class="container">
            <div class="row">
                    <div class="col-12">
                        <div class="my-5">
                            <h3>Team Build</h3>
                            <hr>
                        </div>
                        <form class="file-upload" enctype="multipart/form-data" method="post">
                            
                            <div class="row mb-5 gx-5">
                                <div class="col-xxl-8 mb-5 mb-xxl-0">
                                    <div class="bg-secondary-soft px-4 py-5 rounded">
                                        <div class="row g-3">
                                            <div class="col-md-12">
                                                <label class="form-label">Team Name *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="First name" name="Venue" >
                                            </div>

                                          
                                            
        
                                            <div class="col-md-6">
                                                <label class="form-label">Player 1 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player1" >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">ID 1 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="ID1" >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Player 2 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player2">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">ID 2 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="ID2" >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Player 3 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player3">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">ID 3 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="ID3" >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Player 4 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player4" >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">ID 4 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="ID4" >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Player 5 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player5">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">ID 5 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="ID5" >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Player 6 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player6" >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">ID 6 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="ID6" >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Player 7 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player7" >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">ID 7 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="ID7" >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Player 8 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player8" >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">ID 8 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="ID8" >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Player 9 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player9" >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">ID 9 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="ID9" >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Player 10 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player10" >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">ID 10 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="ID10" >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Player 11 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="Player11">
                                            </div> 
                                            <div class="col-md-6">
                                                <label class="form-label">ID 11 *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="ID11" >
                                            </div>
                                         
                                    </div>
                                    <br><br>
                                    <div class="gap-3 d-flex justify-content-start text-center">
                                <button type="submit" name="update" value="Update" class="btn btn-primary btn-lg m-2">Build Team</button>
                            </div>
                                </div>
                              
                            
                        </form>
   <!-- Form END -->
            </div></div></div>  
            <?php
        include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $venue = mysqli_real_escape_string($conn, $_POST['Venue']);

    $player1 = mysqli_real_escape_string($conn, $_POST['Player1']);
    $player2 = mysqli_real_escape_string($conn, $_POST['Player2']);
    $player3 = mysqli_real_escape_string($conn, $_POST['Player3']);
    $player4 = mysqli_real_escape_string($conn, $_POST['Player4']);
    $player5 = mysqli_real_escape_string($conn, $_POST['Player5']);
    $player6 = mysqli_real_escape_string($conn, $_POST['Player6']);
    $player7 = mysqli_real_escape_string($conn, $_POST['Player7']);
    $player8 = mysqli_real_escape_string($conn, $_POST['Player8']);
    $player9 = mysqli_real_escape_string($conn, $_POST['Player9']);
    $player10 = mysqli_real_escape_string($conn, $_POST['Player10']);
    $player11 = mysqli_real_escape_string($conn, $_POST['Player11']);
    $ID1 = mysqli_real_escape_string($conn, $_POST['ID1']);
    $ID2 = mysqli_real_escape_string($conn, $_POST['ID2']);
    $ID3 = mysqli_real_escape_string($conn, $_POST['ID3']);
    $ID4 = mysqli_real_escape_string($conn, $_POST['ID4']);
    $ID5 = mysqli_real_escape_string($conn, $_POST['ID5']);
    $ID6 = mysqli_real_escape_string($conn, $_POST['ID6']);
    $ID7 = mysqli_real_escape_string($conn, $_POST['ID7']);
    $ID8 = mysqli_real_escape_string($conn, $_POST['ID8']);
    $ID9 = mysqli_real_escape_string($conn, $_POST['ID9']);
    $ID10 = mysqli_real_escape_string($conn, $_POST['ID10']);
    $ID11 = mysqli_real_escape_string($conn, $_POST['ID11']);
  $sql = "INSERT INTO team(venue,player1,player2,player3,player4,player5,player6,player7,player8,player9,player10,player11,ID1,ID2,ID3,ID4,ID5,ID6,ID7,ID8,ID9,ID10,ID11) VALUES ('$venue','$player1','$player2','$player3','$player4','$player5','$player6','$player7','$player8','$player9','$player10','$player11','$ID1','$ID2','$ID3','$ID4','$ID5','$ID6','$ID7','$ID8','$ID9','$ID10','$ID11')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    $success_message = "Team build successfully";
    echo '<script>
            Swal.fire({
              position: "center",
              icon: "success",
              title: "' . $success_message . '",
              showConfirmButton: false,
              timer: 1500
            });
          </script>';
  } else {
    // Display SweetAlert error message
    $error_message = "Oops! There is a problem for team build";
    echo '<script>
            Swal.fire({
              position: "center",
              icon: "error",
              title: "' . $error_message . '",
              showConfirmButton: false,
              timer: 1500
            });
          </script>';
  }
 
}
?>
 
         </body>
</html>
            