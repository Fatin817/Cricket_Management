<?php session_start();
include 'config.php';
if (strlen($_SESSION['playeremail']) == 0){
  echo "hoy nai";
  } else{
    $email = $_SESSION['playeremail'];
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
                       
                        <a href="playerhome.php" class="nav-item nav-link">Main</a>
                        <a href="Homepage2.php" class="nav-item nav-link text-danger">Logout</a>
                        
                    </div>
                   
                </div>
            </nav>
        </div>
    </div>
 
    <!-- Nav Bar End -->
    <div class="container">
  <header class="text-dark p-3 text-center">
    <h1>Player Request</h1><br>
  </header>
  <br><br> <br>
  <table class="table table-borderless text-center">
    <thead class="table-primary">
      <tr>
        <th>Player Name</th>
        <th>Player Email</th>
        <th>Player Phone</th>
        <th>Player massage</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Fetch and display pending requests
      $queryPending = "SELECT fr.*, pi.Name, pi.Email AS player_email, pi.Phone_Number
                        FROM friend_requests fr
                        JOIN player_info pi ON fr.Sender_id = pi.player_ID
                        WHERE fr.target_email = '$email' AND fr.status != 1";
      $sqlPending = mysqli_query($conn, $queryPending);
      while ($resultPending = mysqli_fetch_array($sqlPending)) {
        ?>
        <tr>
          <td><?php echo $resultPending['Sender_name']; ?></td>
          <td><?php echo $resultPending['Sender_email']; ?></td>
          <td><?php echo $resultPending['Phone_Number']; ?></td>
          <td><?php echo $resultPending['msg']; ?></td>
          <td>
           
            <a href="player_request_pending.php?accept_request_id=<?php echo $resultPending['request_id']; ?>" class="btn btn-success btn-lg mr-2 mb-1">Accept</a>
            <a href="player_request_pending.php?request_id=<?php echo $resultPending['request_id']; ?>" class="btn btn-danger btn-lg">Cancel</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<?php
if (isset($_GET['accept_request_id'])) {
    $acceptRequestId = $_GET['accept_request_id'];
    $name = 1;
    $sql = mysqli_query($conn, "UPDATE friend_requests SET status ='$name' WHERE request_id='$acceptRequestId'");

    if ($sql) {
        $success_message = "$name's accepted request";
        echo '<script>
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "' . $success_message . '",
                    showConfirmButton: false,
                    timer: -100
                }).then(function() {
                    // Redirect to the pending requests page after the timer expires
                    window.location.href = "player_request_pending.php";
                });
              </script>';
    } else {
        $error_message = "Not Accepted";
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





<?php  
if(isset($_GET['request_id'])) {
    $_SESSION['request_id'] = $_GET['request_id'];
    $id = $_SESSION['request_id'] ;
    if(isset($id)) {
      // get the id of the row to delete
      $sql = "DELETE FROM friend_requests WHERE request_id  = '$id'";
      if(mysqli_query($conn, $sql)) {
        $success_message = "Cancel Request";
        echo '<script>
                Swal.fire({
                  position: "center",
                  icon: "success",
                  title: "' . $success_message . '",
                  showConfirmButton: false,
                  timer: 3000
                }).then(() => {
                  window.location.href = "player_request_pending.php";
                });
              </script>';
      }
      
       else{
          $error_message = "Did Not Cancel Request";
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
<?php } ?>