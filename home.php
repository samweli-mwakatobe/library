<?php
		include ('connect.php');

		session_start();

		if ($_SESSION['user_name']) {
			$currentUser=$_SESSION['user_name'];
		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image" href="logo.png">
	<title>A-Library | Home</title>
	<link rel="stylesheet" type="text/css" href="header-stylee.css">
	 <link rel="stylesheet" href="fonts-6/css/all.css">
     <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <script src="js/jquery.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>

  <style type="text/css">
  	.fluid{
  		position: absolute;
  		background: whitesmoke;
  		right: 0;
  		height: 91vh;
  		top: 9vh;
  		z-index: -11;
  	}
  	.fluid .container{
  		background: rgb(226, 226, 226);
  		height: 30vh;
  	}
  	.fluid .container h2{
  		font-size: 20px;
  		letter-spacing: 2px;
  	}
  	.fluid .container p{
  		font-size: 18px;
  	}
  </style>
</head>
<body>
<?php
		include ('header.php');
?>

		<div class="col-12 col-lg-12 col-xl-10 fluid">
			<div class="container mt-5 text-center">
				<h2 class="pt-5">WELCOME TO THE ACADEMIC LIBRARY</h2>
				<p class="pt-2">
					<?php
						echo $currentUser;
				?>
				</p>
			</div>
		</div>
</body>
</html>