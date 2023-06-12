<?php include 'inc/header.php'; ?>
<?php
Session::checkLogin();
?>

<html>

<head>
	<style>
		@media screen and (max-width: 980px) {
			body {
				display: none;
			}
		}
	</style>
</head>

<body>
	<div class="container" style="padding:5% 3%">
		<div class="row">
			<div class="col-lg-12 text-center">
			</div>
			<div class="row" style="align-items: center;">
				<div class="col-sm-6">
					<div class="card" style="width:100%; padding: 5%">
						<div class="card-body">
							<center>
								<h4>Login Student</h4>
								<p style="padding:1% 10%">Please Enter the Following Details to Get Into Your Account
								</p>
							</center>
							<br />
							<div class="col-sm-12">
								<form action="index.php" method="post">
									<div class="form-group">
										<label for="exampleInputEmail1">Email Address</label>
										<input type="email" class="form-control" id="email" name="email"
											placeholder="Enter email" style="border-radius:5px">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Password</label>
										<input type="password" name="password" id="password" class="form-control"
											placeholder="Enter Password" style="border-radius:5px">
									</div>
									<br />
									<center>
										<button type="submit" id="loginsubm" value="Signup"
											class="btn btn-outline-primary"
											style="border-radius:20px; width:100%">Continue</button>
									</center>
								</form>
								<center>
									<p style="margin-top:3px">Don't Have an Account? <a href="index.php"
											style="text-decoration:none">Sign Up</a>
									</p>
								</center>
								<center>
									<span class="empty" style="display: none;">Fields Can't be
										Empty</span>
									<span class="disable" style="display: none;">User ID Disabled</span>
									<span class="error" style="display: none;">Email or Password Didn't
										Match</span>
								</center>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6"><img src="img/p3.png" /></div>
			</div>
		</div>
	</div>
</body>

</html>