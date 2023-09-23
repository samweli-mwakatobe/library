
	<div class="col-12 container-fluid">
		<div class="row">
			<div class="d-none left-menu d-col-none d-sm-none d-xl-block col-xl-2">
				<div class="logo mt-5 ">
					<img src="pngegg.png" class="mb-1">
					<h2 class="text-center">ACADEMIC LIBRARY</h2>
				</div>

				<div class="mt-5 list">
					<ul>
						<a href=""><li><i class="fa-solid fa-house-chimney"></i> Dashboard</li></a>
					</ul>
					<ul class="books">
						<li><i class="fa-sharp fa-solid fa-book"></i> Books <i class="fa-solid fa-chevron-right dropdown"></i></li>

						<ul class="book">
							<a href=""><li>Choose books</li></a>
						</ul>
					</ul>
					<ul>
						<a href=""><li><i class="fa-solid fa-circle-exclamation"></i>Help</li></a>
					</ul>

					<ul>
						<a href="index.html?id=logout"><li><i class="fa-solid fa-right-from-bracket"></i>Logout</li></a>
					</ul>
					<?php 
							if (isset($_GET['id'])) {
								session_destroy();
								header("location: index.html");
							}
					?>
				</div>
			</div>

			
			<div class="col-12 col-lg-12 col-xl-10 right-menu">
				
				<div class="mt-4 account">
					<div class="account-0 d-flex">
					<i class="fa-sharp fa-solid fa-bars d-xl-none" id="menu"></i> 
					<p class="d-none d-sm-block">A-LIBRARY</p>
				</div>

					<div class="account-1">
						<div class="account-2 d-flex">
							<img src="login1.jpg" width="35" height="35">
							<h2>My Account <i class="fa-solid fa-chevron-down dropdown"></i></h2>
						</div>

						<div class="account-3 mt-2">
							<ul class=" pt-3 pb-1">
								<a href=""><li class="text-center"><i class="fa-solid fa-user"></i> Profile</li></a>
								<a href="index.html?id=logout"><li class="text-center"><i class="fa-solid fa-right-from-bracket"></i> Logout</li></a>
							</ul>
							<?php 
							if (isset($_GET['id'])) {
								session_destroy();
								header("location: index.html");
							}
							?>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 left">

				<div class="left-menu" id="left-menu">
					<i class="fa-solid fa-xmark pt-4" id="xmark"></i>
				<div class="logo mt-5 ">
					<img src="pngegg.png" class="mb-1">
					<h2 class="text-center">ACADEMIC LIBRARY</h2>
				</div>

				<div class="mt-5 list">
					<ul>
						<a href=""><li><i class="fa-solid fa-house-chimney"></i> Dashboard</li></a>
					</ul>
					<ul class="books">
						<li><i class="fa-sharp fa-solid fa-book"></i> Books <i class="fa-solid fa-chevron-right dropdown"></i></li>

						<ul class="book">
							<a href=""><li>Choose books</li></a>
						</ul>
					</ul>
					<ul>
						<a href=""><li><i class="fa-solid fa-circle-exclamation"></i>Help</li></a>
					</ul>

					<ul>
						<a href="index.html?id=logout"><li><i class="fa-solid fa-right-from-bracket"></i>Logout</li></a>
					</ul>
					<?php 
							if (isset($_GET['id'])) {
								session_destroy();
								header("location: index.html");
							}
					?>
				</div>
			</div>
				
				<script type="text/javascript">
						$(document).ready(function() {
							$("#menu").click(function(){
								$("#left-menu").show(200);
							})

							$("#xmark").click(function(){
								$("#left-menu").hide(200);
							})
						})
					</script>
			</div>



		</div>
	</div>
