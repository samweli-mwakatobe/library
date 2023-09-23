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
				$error = "sorry user alredy exist";
			}else{
				$query="INSERT INTO user_info(first_name, last_name, email, gender, password) VALUES('$fname', '$lname', '$email', '$gender', '$password');";

				$result2=mysqli_query($con,$query);

				if ($result2) {
					$message= "data successfuly saved";
				}else{
					$error="connection faild";
				}
			}


		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>READ BOOKS</title>
	<link rel="stylesheet" type="text/css" href="homee.css">
	 <link rel="stylesheet" href="fonts-6/css/all.css">
     <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script type="text/javascript">
    	function validateForm() {
    		var fname =document.forms["sign-up"]["fname"].value;
    		var lname =document.forms["sign-up"]["lname"].value;
    		var email =document.forms["sign-up"]["email"].value;
    		var gender =document.forms["sign-up"]["gender"].value;
    		var password =document.forms["sign-up"]["password"].value;

    		if (fname == "") {
    			first_name.innerHTML="welcoe";
    			return false;
    		}

    		if (lname == "") {
    			first_name.innerHTML="welcoe";
    			return false;
    		}
    		 return true;

    	}
    </script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 photo">
				<div class="container">
					<nav class="nav">
						<img src="pngegg.png" width="150" height="100">
						<ul class="hidden-lg">
							<li><a href="">Home</a></li>
							<li><a href="">About Us</a></li>
							<li><a href="">Contact</a></li>
							<li id="welcome"><i class="fa-solid fa-user"></i>Welcome <i class="fa-solid fa-chevron-down" style="font-size: 15px;"></i>
								<div class="sub" id="sub">
									<ul class="welcome">
										<li id="login"><i class="fa-solid fa-right-to-bracket"></i>Login</li>
										<li id="sign"><i class="fa-solid fa-user" onclick="openPopup"></i>Sign up</li>
									</ul>
								</div>
							</li>

						</ul>
						<i class="fa-solid fa-bars" id="menu"></i>
					</nav>
					
					<!-- signup form -->
					<div class="col-12 signup-box" id="up">
						<div class="signup">
							<i class="fa-solid fa-xmark" id="xmark" onclick="closePopup()"></i>
							<!-- <img src="login1.jpg" width="100" height="100"> -->
							<h2 class="text-center">Signup <span>Here</span></h2>

							<form class="form-control" method="POST" action="#" name="sign-up" onsubmit="return validateForm()">
								<div class="name">
									<div class="name1">
									<label>First Name</label><br>
									<input type="text" name="fname" placeholder="Type First Name" class="form-control"><br>
									<p style="color: red; margin-top: -25px; margin-left: 10px; letter-spacing: 2px; font-size: 15px;" id="first_name"></p>
									</div>

									<div class="name2">
									<label>Last Name</label><br>
									<input type="text" name="lname" placeholder="Type Last Name" class="form-control"><br>
									<p style="color: red; margin-top: -25px; margin-left: 10px; letter-spacing: 2px; font-size: 15px;" id="last_name"></p>
									</div>
								</div>

								<div class="email pb-3">
									<label>Email</label><Br>
									<input type="email" name="email" placeholder="Type Your Email" class="form-control"><br>
									<p style="color: red; margin-top: -25px; margin-left: 10px; letter-spacing: 2px; font-size: 15px;" id="email"></p>
								</div>

								<div class="number pb-3">
									<label>Gender</label><Br>
									<select class="form-control" name="gender">
										<option>-- Select your Gender type --</option>
										<option>Male</option>
										<option>Female</option>
										<option>Other</option>
									</select><br>
									<p style="color: red; margin-top: -25px; margin-left: 10px; letter-spacing: 2px; font-size: 15px;" id="gender"></p>
								</div>

								<div class="password d-flex">
									<div class="pass1">
									<label>Password</label><br>
									<input type="password" name="password" placeholder="Type Your Password" class="form-control"><br>
									<p style="color: red; margin-top: -25px; margin-left: 10px; letter-spacing: 2px; font-size: 15px;" id="pass"></p>
									</div>

									<div class="pass2">
									<label>Confirm Password</label><br>
									<input type="password" placeholder="Re-type password" class="form-control"><br>
									</div>
								</div>

								<button type="submit" name="submit_form" class="btn btn-warning w-100">Signup</button>

								<div class="have">
									<p class="text-center pt-3">I have an account! <a href="" id="log">Login.</a></p>
								</div>

							</form>

							<script type="text/javascript">
								$(document).ready(function(){
									$("#sign").click(function(){
										$("#up").toggle(500);
									})
								})

								$(document).ready(function(){
									$("#xmark").click(function(){
										$("#up").hide(500);
									})								
								})
							</script>
						</div>
					</div>

					<!-- login form -->
					<div class="login-box" id="login-open">
						<div class="login">
							<form name="login" action="#" method="POST" class="form-control">
								<i class="fa-solid fa-xmark" id="mark"></i>
								<h2 class="text-center">Login <span>Here</span></h2>
								<label for="user name">Enter Username</label><br>
								<input type="text" name="user_name" placeholder="Enter Username" class="form-control mt-2"><br>

								<label for="password">Password</label><br>
								<input type="password" name="password" placeholder="Enter Password" class="form-control mt-2"><br>

								<button type="submit" name="submit" class="btn btn-warning w-100">login</button><br>
								
								<div class="link">
									<p><a href="#">forget password!</a></p><br>
									<p>I don't have account!<a href="register.php" id="new"> Signup</a></p>
							</div>
							</form>

							<script type="text/javascript">
								$(document).ready(function(){
									$("#login").click(function(){
										$("#login-open").show(500);
									})
								})

								$(document).ready(function(){
									$("#mark").click(function(){
										$(".login-box").hide(500);
									})
								})
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>