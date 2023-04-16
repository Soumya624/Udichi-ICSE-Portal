<?php include 'inc/header.php'; ?>

<html>

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
								<h4>Signup Student</h4>
								<p style="padding:1% 10%">Please Enter the Following Details to Create Your Account
								</p>
							</center>
							<br />
							<div class="col-sm-12">
								<div class="form-group">
									<label for="exampleInputName">Name</label>
									<input type="text" class="form-control" id="name" name="name"
										placeholder="Enter Your Name">
								</div>

								<div class="form-group">
									<label for="exampleInputusername">Username</label>
									<input type="text" class="form-control" id="userName" name="userName"
										placeholder="Enter Your Username">
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Email Address</label>
									<input type="email" class="form-control" id="email" name="email"
										placeholder="Enter Email">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" name="password" id="password" class="form-control"
										placeholder="Enter Password">
								</div>
								<br />
								<button type="submit" id="registersubm" value="Signup" class="btn btn-outline-primary"
									style="border-radius:20px; width:100%">Submit</button>
								</form>
								<center>
									<p style="margin-top:3px">Already Have an Account? <a href="index.php"
											style="text-decoration:none">Sign In</a>
									</p>
								</center>
								<span id="state" style="text-transform: capitalize; text-align:center"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6"><img src="img/p2.png" /></div>
			</div>
		</div>
	</div>
</body>

</html>