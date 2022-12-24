<?php
include('./config/pdoconfig.php');
session_start();
$err = "";
if (isset($_POST['submit'])) {
   $email = $_POST['email'];
   $password = $_POST['password'];
   $query = "select * from login where email = '$email' AND password = '$password'";
   $statement = $connection->prepare($query);
   $statement->execute();
   $row_count = $statement->fetchColumn();
   if ($row_count > 0) {
      $query = "SELECT * FROM login WHERE id = '$row_count'";
      $statement = $connection->prepare($query);
      $statement->execute();
      $result =  $statement->fetchAll();
      foreach ($result as $row) {
       if($row['user'] == 'admin'){
		$_SESSION['id'] = $row['id'];
		
            header('location:./admin/examples/dashboard.php');
	   }
      
           
           
         
      }
   } else {
      $err = '<div class="alert alert-danger"><small><center>Login Details Incorrect</center></small></div>';
   }
}
?>



<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style1.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<div class="error"><?php echo $err ?></div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Login</h3>
		      	<form method="POST" class="signin-form">
		      		<div class="form-group">
		      			<input type="email" class="form-control" placeholder="Email" name="email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" name="password" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            
								<div class="w-50 text-md-right">
									<a href="./forgot.php" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
	          
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

	</body>
	
</html>

