<?php
session_start();
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
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
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="Css/css/vav.css">
        </head>
<style>
    .table-container {
        max-width: 500px;
        margin: 0 auto;
        border: 1px solid #ccc;
        padding: 20px;
      }
      
      table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
      }
      
      td {
        padding: 10px;
        border: 1px solid #ccc;
      }
      
      input[type="text"] {
        width: 100%;
        padding: 5px;
        box-sizing: border-box;
        border: none;
        
      }
      
      @media (min-width: 576px) {
        .modal-dialog {
          max-width: 900px;
        }
      }
      p{
        color: rgb(73, 23, 23);
        font-weight: 400px;
        font-size: 30px;
      }
      form{
        display: inline;
      }
      
</style>
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
        <header class="text-dark p-3 text-center">
            <h1 > Player List </h1><br>
               </header> 
               <form method="post">
        <div class="col-md-6 offset-md-3 text-center">
            <div class="input-group">
              <input type="text" name="searchTerm" class="form-control border border-primary border-rounded" placeholder="Enter the Player Name" ><br>
                 <div class="input-group-append">
                 <button type="submit" name="searchButton" value="Search" class="btn btn-primary">Search</button>
                 </div>
            </div>
        </div>
        </form>
        <br><br> <br>
    <table class="table table-borderless text-center">
        <thead class="table-primary">
          <tr >
          <th >Player ID</th>
            <th >Profile Image</th>
            <th >Name</th>
            <th >NID</th>
            <th >Position</th>
            <th >Action</th>   
          </tr>
        </thead>
        <tbody>
        <?php 
                  if (isset($_POST['searchButton'])) {
                    $key =$_POST['searchTerm'];
                    $query = "SELECT * FROM player_info WHERE Name LIKE '%$key%'";
                }
                else{
                  $query = "select * from player_info";
                }
                $sql= mysqli_query($conn,$query );    
 while($result=mysqli_fetch_array($sql))
{ 
  ?>
          <tr >
          <td><?php echo $result['Player_ID'];?></td>
          <td>
    <img src="./uploaded_img/<?php echo($result['Profile_Photo']); ?>" alt="Profile image" style="max-width: 20%; max-height: 30%; border-radius: 50%; overflow: hidden;">
</td>

            <td><?php echo $result['Name'];?></td>
            <td><?php echo $result['NID'];?></td>
            <td><?php echo $result['Position'];?></td>
           <td> 
           <a href="admin_edit_playerprofile.php?Email=<?php echo $result['Email']; ?>"class="btn btn-success btn-lg mr-2 mb-1 ">View</a> 
           <a href="admin_view_playerlist.php?Email=<?php echo $result['Email']; ?>"class="btn btn-danger btn-lg">Delete</a> 
          </tr>
          <?php } ?> 
        </tbody>
      </table>
    </div>
    <?php
if(isset($_GET['Email'])) {
    $_SESSION['Email'] = $_GET['Email'];
    $id = $_SESSION['Email'] ;
    if(isset($id)) {
      // get the id of the row to delete
      $sql = "DELETE FROM player_info WHERE Email = '$id'";
      if(mysqli_query($conn, $sql)) {
        $success_message = "User Delete successfully";
        echo '<script>
                Swal.fire({
                  position: "center",
                  icon: "success",
                  title: "' . $success_message . '",
                  showConfirmButton: false,
                  timer: 3000
                }).then(() => {
                  window.location.href = "admin_view_playerlist.php";
                });
              </script>';
      }
      
       else{
          $error_message = "User Delete unsuccessful";
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
}
?>


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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 

</body>
</html>
