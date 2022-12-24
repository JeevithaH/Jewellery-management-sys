<?php
   include('./config/pdoconfig.php');
    session_start();
	$new = '';
	$email = '';
	$readonly = '';
	$card = '';
	$link='';
	$card1 = '';
     if(isset($_GET['md5'])){
		 $card = "$('.card2').show();";
		 $card1 = "$('.card1').hide();";
         $md5 = $_GET['md5'];
         $sql = "SELECT * FROM login WHERE md = '$md5'";
         $statement = $connection->prepare($sql);
         $statement->execute();
         $result = $statement->fetchAll();
         if($result){
             foreach($result as $row){
                $email =  $row['email']; 
             }
             $new = '<div class="form-group">
			 <input type="password" id="password" class="form-control" placeholder="password" name="password" required>
		 </div>';
		 $readonly = 'readonly';
         }
		 else{
			$link = 'swal("user not found", "User does not exists", "error");';
			echo "error";
			$card = "$('.card2').hide();";
		    $card1 = "$('.card1').show();";
		 }
		}
		else{
			$card = "$('.card2').hide();";
		 $card1 = "$('.card1').show();";
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
					<div id="err"></div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
				<div class="login-wrap p-0 card1">
		      	<h3 class="mb-4 text-center">Forgot Password</h3>
		      		<div class="form-group">
		      			<input type="email" id='email' class="form-control" placeholder="Email" name="email"  required>
		      		</div>
					<p id='p'></p>
	            <div class="form-group">
	            	<button type="submit" id='sub-btn' class="form-control btn btn-primary submit px-3">check</button>
	            </div>
	            
								
	            </div>
					<div class="login-wrap p-0 card2">
		      	<h3 class="mb-4 text-center">Forgot Password</h3>
		      		<div class="form-group">
		      			<input type="email" id='email-check' value='<?php echo $email ?>'class="form-control" placeholder="Email" name="email" <?php echo $readonly;?> required>
		      		</div>
	                <?php echo $new?>
					
	            <div class="form-group">
				
	            	<button type="submit" id='up-btn' class="form-control btn btn-primary submit px-3">Update</button>
					<a href="./index.php" id="index" class="form-control btn btn-primary mt-2 submit px-3 login">login</a>
	            </div>
	            
								
	            </div>

	          
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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
      $('.card2').hide();
	  $('.login').hide();
       <?php echo $card;  ?>
	   <?php echo $card1;  ?>
	   <?php echo $link;  ?>
      $(document).on('click','#sub-btn',function(){
        email = $('#email').val();
        if(email !=''){
			$(this).hide();
            $.ajax({
                url:'./valid.php',
				
                method:'POST',
                data:{email},
                success: function(data){
                    if(data == 'user exists'){
						swal("Email sent", "verify from Link", "success");
						$(this).show();  
					}
					else if(data == 'invalid user'){
						swal("user not found", "User does not exists", "error");  
						$(this).show();
					}
					else{
						swal("Error", data, "error");
						$(this).show();
					}
                }
            })
        }
        else{
            swal("Email required", "All feilds are required", "error");  
        }
      })
	  update();
      function update(){
		$('#up-btn').on('click',function(){
		 check = $('#email-check').val();
		 pass = $('#password').val();
		 $.ajax({
			 url:'./forget.php',
			 method:'POST',
			 data:{check,pass},
			 success:function(data){
				if(data == 'done'){
					swal("Passwrd Updated", "You can Login back", "success");  
					$('.login').show();
				}
				else{
					alert(data);
				}
			 }
		 })
		})
	  }
  </script>
	</body>
	
</html>