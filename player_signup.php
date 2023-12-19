
<!doctype html>
<html lang="en">

<head>
	<title>Player Signup</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
	<link href="lib/animate/animate.min.css" rel="stylesheet">
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
		integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="Css/style.css">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: "Poppins", sans-serif;
		}

		body {
			background-color: lightgrey;
		}

		.btn {
			background-color: lightgoldenrodyellow;

		}

		.submit:hover {
			background-color: #007bff;
			color: #fff;
		}

		i {
			color: dodgerblue;
			font-size: 17px;

		}
		a{
			color: goldenrod;
		}

		
	</style>

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(DecodingCricket.jpg);">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4 ">Signup</h3>
								</div>
								<div class="w-100">
								</div>
							</div>
							<form action="#" class="signin-form" method="Post" enctype="multipart/form-data">
								<div class="form-group mb-3">
									<i class="fas fa-user"></i>
									<label class="label" for="name">Name</label>
									<input type="text" class="form-control" placeholder="Enter your Name"
										name="playername" required>
								</div>
								<div class="form-group mb-3">
									<i class="fa fa-credit-card"></i>
									<label class="label" for="password">NID</label>
									<input type="text" class="form-control" placeholder="Enter your NID"
										name="playernid" required>
								</div>
								<div class="form-group mb-3">
									<i class="fas fa-map-marker-alt"></i>
									<label class="label" for="password">Address</label>
									<input type="text" class="form-control" placeholder="Enter your Address"
										name="playeraddress" required>
								</div>
								<div class="form-group mb-3">
									<i class="fas fa-phone"></i>
									<label class="label" for="password">Number</label>
									<input type="text" class="form-control" placeholder="Enter your Number"
										name="playernumber" required>
								</div>
								<div class="form-group mb-3">
									<i class="fas fa-envelope"></i>
									<label class="label" for="password">Email</label>
									<input type="email" class="form-control" placeholder="Enter your Email"
										name="playeremail" required>
								</div>
								<div class="form-group mb-3">
									<i class="fas fa-lock"></i>
									<label class="label" for="password">Password</label>
									<input type="password" class="form-control" placeholder="Enter your Password"
										name="password" required>
								</div>
								<div class="form-group mb-3">
									<i class="fas fa-image"></i>
									<label class="label" >Profile Image</label>
									<input type="file" name="image" accept="image/jpg, image/jpeg, image/png">
								</div>
								<div class="form-group">
									<button type="submit" value="Submit" class="form-control btn rounded submit px-3">Submit</button>
								</div>
							</form>
							<p class="  text-center">Have Any Account! <a href="player_login.php">Login</a></p>
							<br><br>
							<p class="text-start"><a href="Homepage2.php">Return To Homepage
								</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<script src="lib/easing/easing.min.js"></script>
	<script src="lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="lib/waypoints/waypoints.min.js"></script>
	<script src="lib/counterup/counterup.min.js"></script>

	<?php
include 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

   // process form data for post method
   $name = mysqli_real_escape_string($conn, $_POST['playername']);
   $nid = mysqli_real_escape_string($conn, $_POST['playernid']);
   $address = mysqli_real_escape_string($conn, $_POST['playeraddress']);
   $number = mysqli_real_escape_string($conn, $_POST['playernumber']);
   $email = mysqli_real_escape_string($conn, $_POST['playeremail']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);
   $hashed_password = password_hash($password, PASSWORD_DEFAULT);
   $image = $_FILES['image']['name'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;
   $select = mysqli_query($conn, "SELECT * FROM player_info WHERE NID = '$nid'") or die('query failed');
   if(mysqli_num_rows($select) > 0){
	echo 'mysqli_num_rows($select) ';
      $warning_message = "Player with this NID already exists";
      echo '<script>
            Swal.fire({
              position: "center",
              icon: "warning",
              title: "' .  $warning_message. '",
              showConfirmButton: false,
              timer: 3000
            });
          </script>';
   }
   elseif(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM player_info WHERE Email='$email' "))>0){
	$warning_message2 = "Player with this Email already exists";
      echo '<script>
            Swal.fire({
              position: "center",
              icon: "warning",
              title: "' .  $warning_message2. '",
              showConfirmButton: false,
              timer: 3000
            });
          </script>';
 }
   else{
         $insert = mysqli_query($conn, "INSERT INTO player_info (Name,NID,Address,Phone_Number, Email, Password, Profile_Photo) VALUES('$name', '$nid', '$address', '$number', '$email', '$hashed_password', '$image')") or die('query failed');
        echo "insert";
		 if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $success_message = "Player registered successfully";
            echo '<script>
                  Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "' . $success_message . '",
                    showConfirmButton: false,
                    timer: 3000
                  });
                </script>';
         }else{
            $error_message = "Player registration unsuccessful";
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


</body>

</html>