
<!doctype html>
<html lang="en">

<head>
	<title>Admin Login</title>
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
			background-color:lavender;
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
<?php
session_start();
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['login'])){

    // Retrieve values from form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Retrieve plain text password from database
    $query = "SELECT password FROM admin WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result))
        {
			echo "Entered Password: $password<br>";
            echo "Hashed Password from DB: {$row['password']}<br>";

            // Check if password is correct
            if (password_verify($password, $row['password'])){
                $_SESSION['username'] = $username;
                header("Location:adminhome.php");
                exit();
            }
            else {
                echo ".";
                $error_message = "Invalid Password";
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
    else {
        echo ".";
        $error_message = "User Not Existed";
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
<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(img/nathana-reboucas-enaNfAjiDGg-unsplash.jpg);">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4 ">Admin Login</h3>
								</div>
								<div class="w-100">
								</div>
							</div>
							<form action="#" class="signin-form" method="post" >
								<div class="form-group mb-3">
									<i class="fas fa-user"></i>
									<label class="label" for="password">Username</label>
									<input type="text" class="form-control" placeholder="Enter your Username"
										name="username" required>
								</div>
						
								<div class="form-group mb-3">
									<i class="fas fa-lock"></i>
									<label class="label" for="password">Password</label>
									<input type="password" class="form-control" placeholder="Enter your Password"
										name="password" required>
								</div>
					
								<div class="form-group">
									<button type="submit" name="login" value="Login"class="form-control btn rounded submit px-3">Login</button>
								</div>
							</form>
							
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


	

</body>

</html>