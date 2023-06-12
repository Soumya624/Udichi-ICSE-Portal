<?php include 'inc/header.php'; ?>
<html>
<hrad>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
	<style>
		/* Style the tab */
		.tab {
			overflow: hidden;
		}

		/* Style the buttons inside the tab */
		.tab button {
			background-color: inherit;
			float: left;
			border: none;
			outline: none;
			cursor: pointer;
			padding: 14px 16px;
			transition: 0.3s;
			font-size: 17px;
			border-bottom: 4px solid #f5f5f5;
		}

		/* Change background color of buttons on hover */
		.tab button:hover {}

		/* Create an active/current tablink class */
		.tab button.active {
			border-bottom: 4px solid;
			border-color: #39d0e5;
		}

		/* Style the tab content */
		.tabcontent {
			display: none;
			padding: 6px 12px;
			border-top: none;
		}

		/* Style the close button */
		.topright {
			float: right;
			cursor: pointer;
			font-size: 28px;
		}

		.topright:hover {
			color: red;
		}
	</style>
	</head>

	<body>
		<div style="background-image: url('img/p9.png'); background-size: cover; ">
			<div class="container">
				<div class="row" style="align-items: center;">
					<div class="col-sm-6">
					</div>
					<div class="col-sm-6" style="padding: 10% 0">
						<div class="card" style="width:90%; padding: 5%; border-radius: 20px">
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
									<button type="submit" id="registersubm" value="Signup"
										class="btn btn-outline-primary"
										style="border-radius:20px; width:100%">Submit</button>
									</form>
									<center>
										<p style="margin-top:3px">Already Have an Account? <a href="login.php"
												style="text-decoration:none">Sign In</a>
										</p>
									</center>
									<span id="state" style="text-transform: capitalize; text-align:center"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br />
		<br />
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin: 3% 25%;">
			<div class="carousel-inner">
				<div class="carousel-item active" style="background-color:#c7f2f9; padding: 10%; border-radius: 20px">
					<center>
						<h4>Recorded Videos & Online Test Series</h4>
						<p>For your self paced learning, we have a solution. Udichi online test series and recorded
							lectures will help you to benchmark your preparation at all India level.</p>
						<br />
						<button class="btn btn-dark" style="border-radius:20px; width:40%">Enroll Now</button>
					</center>
				</div>
			</div>
		</div>
		<br />
		<br />
		<br />
		<center>
			<h3>Discover the Best Course for You!</h3>
			<p>Now more Convenient and Interactive than ever</p>
		</center>
		<div class="row" style="padding:3%">
			<div class="col-sm-6" style="text-align:right">
				<img src="img/p6.png" style="width: 50%;" />
			</div>
			<div class="col-sm-6" style="text-align:left">
				<img src="img/p7.png" style="width: 60%" />
			</div>
		</div>
		<br />
		<br />
		<br />
		<center>
			<h3>What makes Udichi unique?</h3>
			<p>Now more Convenient and Interactive than ever</p>
		</center>
		<center>
			<div class="tab" style="margin: 5% 18% 0 18%">
				<button class="tablinks" onclick="feature(event, 't1')" id="defaultOpen">Engaging</button>
				<button class="tablinks" onclick="feature(event, 't2')">Comprehensive</button>
				<button class="tablinks" onclick="feature(event, 't3')">Consistent</button>
				<button class="tablinks" onclick="feature(event, 't4')">Monitoring</button>
				<button class="tablinks" onclick="feature(event, 't5')">Doubt Active</button>
			</div>
		</center>
		<div id="t1" class="tabcontent" style="margin: 0% 18% 5% 18%; padding: 3% 5%">
			<h4 style="line-height: 40px; font-size: 20px">Want Online Classes to be Engaging &
				Interactive?</h4>
			<li>Experience the essence of Offline Learning in an Online Format.</li>
			<li>Learn on a deeper, more integrated level, making online learning even more successful and rewarding.
			</li>
		</div>
		<div id="t2" class="tabcontent" style="margin: 0% 18% 5% 18%; padding: 3% 5%">
			<h4 style="line-height: 40px; font-size: 20px">Looking for Personalised and
				Comprehensive Learning?</h4>
			<li>Revisit a lecture to revise or strengthen topics as per the requirement.</li>
			<li>Watch a Live Class Recording if you missed a class or wish to re-attend a class.</li>
		</div>
		<div id="t3" class="tabcontent" style="margin: 0% 18% 5% 18%; padding: 3% 5%">
			<h4 style="line-height: 40px; font-size: 20px">Want to Stay Motivated, Consistent and
				Updated?</h4>
			<li>Live Webinars, Toppers Talk Shows, Orientation Sessions, Open Sessions, Guidance and Motivational
				Sessions will keep your motivation levels high.</li>
			<li>Know all about the latest news about your target exam, along with important announcements.</li>
		</div>
		<div id="t4" class="tabcontent" style="margin: 0% 18% 5% 18%; padding: 3% 5%">
			<h4 style="line-height: 40px; font-size: 20px">Worried about Monitoring Progress and
				Comprehensive Assessment?</h4>
			<li>Self-assess your growth and progress based on regular online tests and comprehensive progress reports.
			</li>
			<li>Get a detailed analysis of your academic performance in the appeared tests, covering various parameters.
			</li>
		</div>
		<div id="t5" class="tabcontent" style="margin: 0% 18% 5% 18%; padding: 3% 5%">
			<h4 style="line-height: 40px; font-size: 20px">Concerned about Doubts Pilling Up?</h4>
			<li>Seek solutions to all your doubts through doubt sessions.</li>
			<li>Watch a class recording, if you missed a session.</li>
		</div>
		<script>
			function feature(evt, tabName) {
				var i, tabcontent, tablinks;
				tabcontent = document.getElementsByClassName("tabcontent");
				for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
				}
				tablinks = document.getElementsByClassName("tablinks");
				for (i = 0; i < tablinks.length; i++) {
					tablinks[i].className = tablinks[i].className.replace(" active", "");
				}
				document.getElementById(tabName).style.display = "block";
				evt.currentTarget.className += " active";
			}

			// Get the element with id="defaultOpen" and click on it
			document.getElementById("defaultOpen").click();
		</script>
		<br />
		<br />
		<br />
		<center>
			<h3>Engaging Learning Videos</h3>
			<p>Now more Convenient and Interactive than ever</p>
			<img src="img/p8.png" style="width: 80%" />
		</center>
		<br />
		<br />
		<br />
		<div style="background-color: black; color: white; padding: 1.5%; text-align: center;">
			<p>Copyright 2023, Udichi, All right reserved.</p>
		</div>
	</body>

</html>