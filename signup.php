<?php
		include('connect.php');


		if (isset($_POST['submit_form'])) {

			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$email=$_POST['email'];
			$gender=$_POST['gender'];
			$password=$_POST['password'];
			$error='';
			$message='';

			$sql="SELECT * FROM user_info WHERE email='$email'";
			$result=mysqli_query($con,$sql);

			if (mysqli_num_rows($result)>0) {
				$error = "<div class='alert alert-danger text-center'>
								  <strong>Sorry!</strong> User already exist
								</div>";
			}else{
				$query="INSERT INTO user_info(first_name, last_name, email, gender, password) VALUES('$fname', '$lname', '$email', '$gender', '$password');";

				$result2=mysqli_query($con,$query);

				if ($result2) {
					$message= "<div class='alert alert-success text-center'>
								  <strong>Success!</strong> Signup now <a href='login.php'>Login.</a>
								</div>";
				}else{
					$error="<div class='alert alert-danger text-center'>
								  <strong>Sorry!</strong> Connection faild
								</div>";
				}
			}


		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image" href="logo.png">
	<title>A-LIBRARY | Signup</title>
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
    		var fname= document.getElementById('first');
    		var lname= document.getElementById('last');
    		var email= document.getElementById('em');
    		var gender= document.getElementById('gnd');
    		var password= document.getElementById('password');
    		var confirm= document.getElementById('confirm');

    		// for first name
    		if (fname.value.trim() == "") {
    			first_name.innerHTML="First name is required";
    			fname.style.border="solid 1px red";
    			return false;
    		}
    		else if(fname.value.trim().length>10){
    			first_name.innerHTML="Name is too long";
    			fname.style.border="solid 1px red";
    			return false;
    		}
    		else if(lname.value.trim() == "") {
    			last_name.innerHTML="Last name is required";
    			lname.style.border="solid 1px red";
    			return false;
    		}
    		else if(lname.value.trim().length>20){
    			last_name.innerHTML="Name is too long";
    			lname.style.border="solid 1px red";
    			return false;
    		}
    		else if(email.value.trim() == "") {
    			emaill.innerHTML="Email is required";
    			email.style.border="solid 1px red"
    			return false;
    		}
    		else if(password.value.trim() == "") {
    			passw.innerHTML="password is required";
    			password.style.border="solid 1px red";
    			return false;
    		}
    		else if (password.value.trim().length<8) {
    			passw.innerHTML="password is too short";
    			password.style.border="solid 1px red";
    			return false;
    		}
    		else if(confirm.value.trim() !== password.value.trim()) {
    			conf.innerHTML="password not match";
    			confirm.style.border="solid 1px red";
    			return false;
    		}
    		else{
    			return true;
    		}

    		
    		// if (confirmP.value.trim() == "") {
    		// 	conf.innerHTML="password not match";
    		// 	confirmP.style.border="solid 1px red";
    		// 	return false;
    		// }
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
							<form class="form-control mt-5 w-10" method="POST" action="#" name="sign-up" onsubmit="return validateForm()">
								<div class="text-center pt-3">
									<h2>Signup <span>Here</span></h2>
								</div>
								<hr>
								<?php
									if (!empty($message)) {
										echo "<div class='message'>
										         <p>".$message."</p>
										         </div>";
									}

									if (!empty($error)) {
										echo "<div class='error'>
										         <p>".$error."</p>
										         </div>";
									}
								?>
								<div class="name d-flex pt-1">
									<div class="name1">
									<label>First Name</label><br>
									<input type="text" name="fname" placeholder="Type First Name" class="form-control" id="first"><br>
									<p style="color: red; margin-top: -25px; margin-left: 10px; letter-spacing: 2px; font-size: 15px;" id="first_name"></p>
									</div>

									<div class="name2">
									<label>Last Name</label><br>
									<input type="text" name="lname" placeholder="Type Last Name" class="form-control" id="last"><br>
									<p style="color: red; margin-top: -25px; margin-left: 10px; letter-spacing: 2px; font-size: 15px;" id="last_name"></p>
									</div>
								</div>

								<div class="email pb-3">
									<label>Email</label><Br>
									<input type="email" name="email" placeholder="Type Your Email" class="form-control" id="em"><br>
									<p style="color: red; margin-top: -25px; margin-left: 10px; letter-spacing: 2px; font-size: 15px;" id="emaill"></p>
								</div>

								<div class="number pb-3">
									<label>Gender</label><Br>
									<select class="form-control" name="gender" id="gnd">
										<option>-- Select --</option>
										<option>Male</option>
										<option>Female</option>
										<option>Other</option>
									</select><br>
									<p style="color: red; margin-top: -25px; margin-left: 10px; letter-spacing: 2px; font-size: 15px;" id="gend"></p>
								</div>

								<div class="password d-flex">
									<div class="pass1">
									<label>Password</label><br>
									<input type="password" name="password" placeholder="Type Your Password" class="form-control" id="password"><br>
									<p style="color: red; margin-top: -25px; margin-left: 10px; letter-spacing: 2px; font-size: 15px;" id="passw"></p>
									</div>

									<div class="pass2">
									<label>Confirm Password</label><br>
									<input type="password" placeholder="Re-type password" class="form-control" id="confirm"><br>
									<p style="color: red; margin-top: -25px; margin-left: 10px; letter-spacing: 2px; font-size: 15px;" id="conf"></p>
									</div>
								</div>

								<button type="submit" name="submit_form" class="btn btn-warning w-100">Signup</button>
								<a href="index.html" class="btn btn-danger w-100 mt-3">Back home</a>

								<div class="have">
									<p class="text-center pt-3">I have an account! <a href="login.php" id="log">Login.</a></p>
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