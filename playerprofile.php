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
 $query=mysqli_query($conn,"select * from player_info where email='$id'");
 while($result=mysqli_fetch_array($query))
{
    $msg= $result['Name'];
    $success_message = "Welcome $msg";
                echo '<script>
                      Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "' . $success_message . '",
                        showConfirmButton: false,
                        timer: 2000
                      });
                    </script>';
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
                                                <input type="text" class="form-control" placeholder="" aria-label="First name" name="name" value="<?php echo $result['Name'];?>">
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <label class="form-label">NID *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="nid" value="<?php echo $result['NID'];?>" readonly>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <label class="form-label">Address *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="Address" name="address" value="<?php echo $result['Address'];?>">
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <label class="form-label">Phone number *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="Phone number" name="phone" value="<?php echo $result['Phone_Number'];?>">
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
                                    <div class="gap-3 d-flex justify-content-start text-center">
                                <button type="submit" name="update" value="Update" class="btn btn-primary btn-lg m-2">Update Information</button>
                            </div>
                                </div>
                                <!-- Upload profile -->
                                <div class="col-xxl-4">
                                    <div class="bg-secondary-soft rounded">
                                        <div class="row g-3">
                                            <h4 class="mb-4 mt-0">Upload your profile photo</h4></br></br>
                                            <div class="text-center">
                                                <!-- Image upload -->
                                                <div class="position-relative  mb-3 ">
                                                    <img src="./uploaded_img/<?php echo($result['Profile_Photo']); ?>"  alt="Profile image" style="max-width: 70%; max-height: 100%;">
                                                </div>
                                                <label class="custom-file-upload">
									<input type="file" name="image" accept="image/jpg, image/jpeg, image/png">Choose Image</label>
                                    <button type="submit" class="btn btn-success btn-lg m-2" name="update2" > Upload</button>
                                    <p class="text-muted mt-3 mb-0"><span class="me-1">Note:</span>Maximum size 11.2px x 16px</p>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                             <!-- Row END -->
                           <!-- change password -->
                                <div class="col-xxl-6">
                                    <div class="bg-secondary-soft px-4 py-3 rounded">
                                        <div class="row g-1">
                                            <h4 class="my-4">Change Password</h4>
                                            <!-- Old password -->
                                            <div class="col-md-6">
                                                <label for="exampleInputPassword1" class="form-label">Old password *</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" name="current_password">
                                            </div>
                                            <!-- New password -->
                                            <div class="col-md-6">
                                                <label for="exampleInputPassword2" class="form-label">New password *</label>
                                                <input type="password" class="form-control" id="exampleInputPassword2" name="new_password">
                                            </div>
                                            <!-- Confirm password -->
                                            <div class="col-md-12">
                                                <label for="exampleInputPassword3" class="form-label">Confirm Password *</label>
                                                <input type="password" class="form-control" id="exampleInputPassword3" name="confirm_password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Row END -->
                            <!-- button -->
                            <div class="gap-3 d-flex justify-content-start text-center">
                                <button type="submit" name="update3" value="Update" class="btn btn-primary btn-lg m-2">Update Password</button>
                            </div>  
                        </form>

                        <?php } ?> 
                          <!-- Form END -->
            </div></div></div>  
            <?php
 if (isset($_POST['update'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$number = mysqli_real_escape_string($conn, $_POST['phone']);
    $id = $_SESSION['playeremail'];
    $sql= mysqli_query($conn, "UPDATE player_info SET Name='$name', Address='$address', Phone_Number='$number'WHERE Email='$id'");
    if(empty($name) || empty($address) || empty($number)){
        $error_message1 = "Please fill all fields." ;
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
                $success_message = "$name's Information update successfully";
                echo '<script>
                      Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "' . $success_message . '",
                        showConfirmButton: false,
                        timer:-100
                      }).then(function() {
                        // Reload the current page after the timer expires
                        window.location.href = "playerprofile.php";
                      });
                    </script>';}
     if(!$sql){
        $error_message = "Update unsuccessful";
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
if(isset($_POST["update3"])) {
    $current_password = mysqli_real_escape_string($conn, $_POST['current_password']);
    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
    
    $id= $_SESSION['playeremail'];
    $get_password_query = mysqli_query($conn, "SELECT password FROM player_info WHERE Email='$id'");
    $get_password_result = mysqli_fetch_assoc($get_password_query);
    $current_hashed_password = $get_password_result['password'];
    
    if (password_verify($current_password, $current_hashed_password)) {
        if ($new_password === $confirm_password) {
            $id= $_SESSION['playeremail'];
            $update_query = mysqli_query($conn, "UPDATE player_info SET Password='$hashed_password' WHERE Email='$id'");
            if ($update_query) {
                $success_message = "Password updated successfully";
                echo '<script>
                      Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "' . $success_message . '",
                        showConfirmButton: false,
                        timer: 3000
                      });
                    </script>';
            } else {
                $error_message = mysqli_error($conn);
                echo '<script>
                      Swal.fire({
                        position: "center",
                        icon: "error",
                        title: "Error updating password",
                        text: "'.$error_message.'",
                        showConfirmButton: false,
                        timer: 3000
                      });
                    </script>';
            }
        } else {
            $error_message = "New password and confirm password do not match";
            echo '<script>
                  Swal.fire({
                    position: "center",
                    icon: "warning",
                    title: "Error updating password",
                    text: "'.$error_message.'",
                    showConfirmButton: false,
                    timer: 3000
                  });
                </script>';
        }
    } else {
        $error_message = "Current password is incorrect";
        echo '<script>
              Swal.fire({
                position: "center",
                icon: "warning",
                title: "Error updating password",
                text: "'.$error_message.'",
                showConfirmButton: false,
                timer: 3000
              });
            </script>';
    } 

}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['update2'])) {
        $id = $_SESSION['playeremail'];
        // Specify the target directory for file uploads
        $targetDirectory = "./uploaded_img/";
        // Get the uploaded file name
        $fileName = basename($_FILES["image"]["name"]);
        // Specify the target file path
        $targetFilePath = $targetDirectory . $fileName; 
        // Check if the file is an actual image or fake image
        $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
        if (isset($_POST["update2"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
                // Upload the file
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                    // Update the database with the file name
                    $sql = "UPDATE player_info SET Profile_Photo='$fileName' WHERE Email='$id'";
                    mysqli_query($conn, $sql);
                    
                    $success_message = "The image has been updated";
                    echo '<script>
                          Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "'.$success_message.'",
                            showConfirmButton: false,
                            timer: 3000
                          });
                        </script>';
                } else {
                    $error_message = "Sorry, there was an error uploading your file.";
                    echo '<script>
                          Swal.fire({
                            position: "center",
                            icon: "error",
                            title: "'.$error_message.'",
                            showConfirmButton: false,
                            timer: 3000
                          });
                        </script>';
                }
            } else {
                $error_message = "File is not an image.";
                echo '<script>
                      Swal.fire({
                        position: "center",
                        icon: "error",
                        title: "'.$error_message.'",
                        showConfirmButton: false,
                        timer: 3000
                      });
                    </script>';
            }
        }
    }
}


?>
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