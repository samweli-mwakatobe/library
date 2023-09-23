<?php
		session_start();

		include ('connect.php');


	if ($con) {
		if (isset($_POST['submit'])) {
			
			$user_name=$_POST['user_name'];
			$password=$_POST['password'];
			$error='';
			$message='';

			$sql="SELECT * FROM user_info WHERE email='$user_name' AND password='$password'";
			$result=mysqli_query($con,$sql);

			if (mysqli_num_rows($result)> 0) {
				
				$row=mysqli_fetch_assoc($result);
				$user_name=$row['user_name'];

				$_SESSION['user_name']=$row['email'];
				header('location: home.php');
			}else{
				$error="<div class='alert alert-danger text-center'>
							 <strong>Wrong!</strong> username or password.
						</div>";
			}
		}

	}else{
		echo "Connection faild";
	}

	mysqli_close($con);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image" href="logo.png">
	<title>A-LIBRARY | Login</title>
	<link rel="stylesheet" type="text/css" href="signup-style.css">
	 <link rel="stylesheet" href="fonts-6/css/all.css">
     <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <script src="js/jquery.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>

    <script type="text/javascript">
    	function validateForm() {
    		var username=document.getElementById('username');
    		var password=document.getElementById('password');

    		if (username.value.trim() == "") {
    			user_name.innerHTML="username is required";
    			username.style.border="solid 1px red";
    			return false;
    		}
    		else if (password.value.trim() == "") {
    			pass.innerHTML="password is required";
    			password.style.border="solid 1px red";
    			return false;
    		}else{
    			return true;
    		}
    	}
    </script>
</head>
<body>
	<div class="col-12 container-fluid">
			<div class="col-12 container">
				<div class="row">
					<div class="col-12 col-md-12 col-lg-4 box-img">
						<img src="pngegg.png" class="mt-5">
					</div>
					<div class="col-12 col-md-12 col-lg-6 mb-5 box-form">
							<form name="login" action="#" method="POST" class="form-control mt-5" onsubmit="return validateForm()">
								<h2 class="text-center pt-3">Login <span>Here</span></h2>
								<hr>
								<?php
									if (!empty($error)) {
										echo "<div class='error'>
										         <p>".$error."</p>
										         </div>";
									}
								?>
								<label for="user name" class="pt-3">Enter Username</label><br>
								<input type="text" name="user_name" placeholder="Enter Your Email" class="form-control mt-2" id="username"><br>
								<p style="color: red; margin-top: -25px; margin-left: 10px; letter-spacing: 2px; font-size: 15px;" id="user_name"></p>

								<label for="password">Password</label><br>
								<input type="password" name="password" placeholder="Enter Password" class="form-control mt-2" id="password"><br>
								<p style="color: red; margin-top: -25px; margin-left: 10px; letter-spacing: 2px; font-size: 15px;" id="pass"></p>

								<button type="submit" name="submit" class="btn btn-warning w-100">login</button>
								<a href="index.html" class="btn btn-danger mt-3 mb-3 w-100">Back home</a>
								
								<div class="link">
									<p class="text-center"><a href="#">forget password!</a></p><br>
									<p class="text-center">I don't have account!<a href="signup.php" id="new"> Signup</a></p>
								</div>
								<hr>
								<div class="designer">
									<p class="text-center">All right reserved &copy 2023 SHM - SOFTWARE ENGENEERING</p>
								</div>
							</form>
					</div>
				</div>
			</div>
		</div>
</body>
</html>