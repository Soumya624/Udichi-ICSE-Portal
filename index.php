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

	<body style="overflow-x: hidden;">
		<div style="background-image: url('img/p9.png'); background-size: cover; ">
			<div class="container">
				<div class="row" style="align-items: center;">
					<div class="col-sm-6">
					</div>
					<div class="col-sm-6" style="padding:5%">
						<div class="card" style="width:100%; padding: 5%; border-radius: 20px">
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
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin: 5% 7%;">
			<div class="carousel-inner">
				<div class="carousel-item active" style="background-color:#c7f2f9; padding: 5%; border-radius: 20px; text-align:justify">
					<center>
						<h4>Modernizing Education and Training</h4>
						<br />
						<p style="text-align: justify;">India has had a significant setback since the advent of the internet, particularly in the fields of literature and employment. The answer to these problems is overpopulation, and the intense rivalry for jobs leaves the lives of classes with low levels of education hanging by a thread.</p>
						<p style="text-align: justify;">An outfit called Udichindia offers these individuals modernised instruction and training based on current curricula that will help further secure them valuable jobs in the long term. They will be given advice on how to hone a variety of abilities, such as plumbing and operating CNC machines, in the skill development sector in particular. tailoring, solar electrical work, and many other professions. Most importantly, they would be able to contribute as a responsible citizen to maintaining the great Indian culture.</p>
						<p style="text-align: justify;">Exam pressure is real. No matter how prepared, and ready for the exam you feel, the real exam condition can be intimidating. And, sometimes the pressure in real exam conditions makes students anxious which in turn hampers the performance or results.</p>
						<p style="text-align: justify;">Then, what is the solution? How can students ensure they don’t get caught in exam pressure?</p>
						<p style="text-align: justify;">The answer to this is to practice Mock Tests!</p>
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
			<h3>What is the Meaning of a Mock Test/Exam?</h3>
			<p>Now more Convenient and Interactive than ever</p>
		</center>
		<div class="row" style="align-items:center">
			<div class="col-sm-7" style="padding:10%;text-align:justify">
				<p>Mock tests are exams that are prepared on guidelines same as real exams. These follow the same pattern, set of questions, difficulty level, and also time limits. And just because these mimic the real exam, these are called “Mock” tests!</p>
				<p>No matter if you are preparing for your upcoming board exams, or are in the competitive exam preparations, you can practice mock tests. There is a range of mock tests available online. And, one can also get mock test books from bookstores.</p>
				<p>Mock test meaning is not just practicing for the exam, but it lets you feel how the exam paper is going to look like. It prepares you for the real show.</p>
				<p>But, do you really need to practice mock tests?</p>
			</div>
			<div class="col-sm-5" style="padding:5%;">
				<center>
					<img src="img/p12.jpg" style="width: 70%" />
				</center>
			</div>
		</div>
		<br />
		<br />
		<br />
		<div id="PC">
		<center>
			<div class="tab" style="margin: 2% 5%;">
				<div class="row" style="align-items: center;">
					<div class="col-xs-3">
						<button class="tablinks" onclick="feature(event, 't1')" id="defaultOpen">What is the Importance of Mock Tests?</button>
					</div>
					<div class="col-xs-3">
						<button class="tablinks" onclick="feature(event, 't2')" id="defaultOpen">Why Should Students Attempt Mock Tests?</button>
					</div>
					<div class="col-xs-3">
						<button class="tablinks" onclick="feature(event, 't3')" id="defaultOpen">What is the Benefit for Students?</button>
					</div>
					<div class="col-xs-3">
						<button class="tablinks" onclick="feature(event, 't4')" id="defaultOpen">How Can you Prepare for the Mock Test?</button>
					</div>
				</div>
			</div>	
		</center>
		<div id="t1" class="tabcontent" style="margin: 2% 5%;text-align: justify;">
			<p>If you are someone who has given exams earlier and has felt the pressure, stress, and anxiety of exam day, you would understand how intimidating, and scary exams can be. That's where mock tests can make you feel “Not for the first time” in the real exam!</p>
			<p>Further, these give you a better idea about what you can expect in a real exam. Type of questions? Questions to time ratio? Pattern of the questions? And a lot more!</p>
		</div>
		<div id="t2" class="tabcontent" style="margin: 2% 5%;text-align: justify;">
			<p>There are a lot of reasons that explain why attempting mock tests can improve students' performance in real exams. Some of these are:</p>
			<ul>
				<li>Keep the Anxiety at Bay: It is believed that just because mock tests provide an “exam-like” feeling before the real-time, these keep anxiety at bay. This helps students concentrate more on exams while keeping themselves calm, and focused!</li><br />
				<li>Nothing Feels Like New: One of the major reasons for anxiety during exams is getting questions that “feel new ''! These Can be twisted from your syllabus concepts, or modified in such a way as to check your in-depth knowledge of concepts. But, if you have practiced from the right mock tests, no question feels like new.<br />This happens because you have practiced the same pattern of questions, and your brain knows how to deal with questions that are above average difficulty level.</li><br />
				<li>Learn Time Management: It is said that some exams become extra difficult because one has to deal with many questions in a definite time. This raises challenges such as achieving accuracy and completion of tests.<br />But, if you practice from mock tests, you pace up your speed and practice yourself for solving questions with speed as well as accuracy. This helps a lot in terms of test performance, and precision.</li><br />
				<li>Analyze Yourself Right: Half of the exam preparation can be done right if a student knows where there is a need for improvement? What are the struggling concepts? And for which sections there is help needed?<br />Mock tests can help figure out this. These can help you analyze yourself better. You can know your weak concepts, and strengths. This can also help you plan a strategy as to which questions you would attempt first so that you don't lose time, as well as focus throughout the exam time.</li><br />
			</ul>
			<p>So, are you ready to prepare for your exam with the help of mock tests? Wait, first know the benefits of mock tests and the ways you can prepare through practice mock tests!</p>
		</div>
		<div id="t3" class="tabcontent" style="margin: 2% 5%;text-align: justify;">
			<p>Students can get immense benefits by practicing, and preparing for exams through mock tests. Some of these benefits are:</p>
			<ul>
				<li>Lets you familiarise yourself with real exam conditions</li><br />
				<li>Teaches you time management</li><br />
				<li>Keeps you rid of exam anxiety or performance pressure!</li><br />
				<li>Helps you design a better strategy to complete your exam on time with optimum accuracy</li><br />
				<li>Let's you access yourself throughout the preparation phase.</li><br />
				<li>Lets you revise all concepts and sections</li><br />
			</ul>
			<p>And many more. Want to get these benefits by practicing through mock tests? You must leverage these in the right way. Let’s move on to how one should prepare for the exam through mock tests?</p>
		</div>
		<div id="t4" class="tabcontent" style="margin: 2% 5%;text-align: justify;">
			<p>Preparing for the mock tests can be confusing. While the number of tests, and different questions, can make students feel bewildered, a defined strategy can help extract the most benefit from mock tests.</p>
			<ul>
				<li>Do These Like Real Exams: Practicing mock tests like real exams is paramount. For this, don’t cheat, don’t sneak out to your textbooks for answers for enhancing your performance in mock tests. And, also don't provide yourself with some “extra time”, even when you are left only with 1-2 questions.<br />Consider these as “Mock” tests, and experience the complete exam-like undisturbed conditions while attempting mock tests.</li><br />
				<li>Practice Enough Mock Tests: One mock test would not help! To leverage complete benefits for mock tests, make sure you attempt enough. It is generally advised to attempt 8-10 mock tests before the real exam.</li></br />
				<li>Check Like Your “Examiner”: Just like the examiner won’t give you any grace marks, make sure you show yourself no mercy while marking. It is therefore advised to attempt computer mock tests where markings, and assessments are also done on similar standards as real exams, and no cheating can be done!</li><br />
			</ul>
			<p>Preparing through mock tests in this way would not only provide you maximum benefit but would also enhance your performance in real exams!</p>
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
		</div>
		<div style="margin:5%;text-align: justify" id="Mobile">
			<h5>What is the Importance of Mock Tests?</h5>
			<p>If you are someone who has given exams earlier and has felt the pressure, stress, and anxiety of exam day, you would understand how intimidating, and scary exams can be. That's where mock tests can make you feel “Not for the first time” in the real exam!</p>
			<p>Further, these give you a better idea about what you can expect in a real exam. Type of questions? Questions to time ratio? Pattern of the questions? And a lot more!</p>
			<br />

			<h5>Why Should Students Attempt Mock Tests?</h5>
			<p>There are a lot of reasons that explain why attempting mock tests can improve students' performance in real exams. Some of these are:</p>
			<ul>
				<li>Keep the Anxiety at Bay: It is believed that just because mock tests provide an “exam-like” feeling before the real-time, these keep anxiety at bay. This helps students concentrate more on exams while keeping themselves calm, and focused!</li><br />
				<li>Nothing Feels Like New: One of the major reasons for anxiety during exams is getting questions that “feel new ''! These Can be twisted from your syllabus concepts, or modified in such a way as to check your in-depth knowledge of concepts. But, if you have practiced from the right mock tests, no question feels like new.<br />This happens because you have practiced the same pattern of questions, and your brain knows how to deal with questions that are above average difficulty level.</li><br />
				<li>Learn Time Management: It is said that some exams become extra difficult because one has to deal with many questions in a definite time. This raises challenges such as achieving accuracy and completion of tests.<br />But, if you practice from mock tests, you pace up your speed and practice yourself for solving questions with speed as well as accuracy. This helps a lot in terms of test performance, and precision.</li><br />
				<li>Analyze Yourself Right: Half of the exam preparation can be done right if a student knows where there is a need for improvement? What are the struggling concepts? And for which sections there is help needed?<br />Mock tests can help figure out this. These can help you analyze yourself better. You can know your weak concepts, and strengths. This can also help you plan a strategy as to which questions you would attempt first so that you don't lose time, as well as focus throughout the exam time.</li><br />
			</ul>
			<p>So, are you ready to prepare for your exam with the help of mock tests? Wait, first know the benefits of mock tests and the ways you can prepare through practice mock tests!</p>
			<br />

			<h5>What is the Benefit for Students?</h5>
			<p>Students can get immense benefits by practicing, and preparing for exams through mock tests. Some of these benefits are:</p>
			<ul>
				<li>Lets you familiarise yourself with real exam conditions</li><br />
				<li>Teaches you time management</li><br />
				<li>Keeps you rid of exam anxiety or performance pressure!</li><br />
				<li>Helps you design a better strategy to complete your exam on time with optimum accuracy</li><br />
				<li>Let's you access yourself throughout the preparation phase.</li><br />
				<li>Lets you revise all concepts and sections</li><br />
			</ul>
			<p>And many more. Want to get these benefits by practicing through mock tests? You must leverage these in the right way. Let’s move on to how one should prepare for the exam through mock tests?</p>
			<br />

			<h5>How Can you Prepare for the Mock Test?</h5>
			<p>Preparing for the mock tests can be confusing. While the number of tests, and different questions, can make students feel bewildered, a defined strategy can help extract the most benefit from mock tests.</p>
			<ul>
				<li>Do These Like Real Exams: Practicing mock tests like real exams is paramount. For this, don’t cheat, don’t sneak out to your textbooks for answers for enhancing your performance in mock tests. And, also don't provide yourself with some “extra time”, even when you are left only with 1-2 questions.<br />Consider these as “Mock” tests, and experience the complete exam-like undisturbed conditions while attempting mock tests.</li><br />
				<li>Practice Enough Mock Tests: One mock test would not help! To leverage complete benefits for mock tests, make sure you attempt enough. It is generally advised to attempt 8-10 mock tests before the real exam.</li></br />
				<li>Check Like Your “Examiner”: Just like the examiner won’t give you any grace marks, make sure you show yourself no mercy while marking. It is therefore advised to attempt computer mock tests where markings, and assessments are also done on similar standards as real exams, and no cheating can be done!</li><br />
			</ul>
			<p>Preparing through mock tests in this way would not only provide you maximum benefit but would also enhance your performance in real exams!</p>
		</div>
		<br />
		<br />
		<br />
		<br />
		<div style="background-color: black; color: white; padding: 1.5%; text-align: center;">
			<p>Copyright 2023, Udichi, All right reserved.</p>
		</div>
		<script>
			function showContent() {

				var PCContent = document.getElementById("PC");
				var MobileContent =document.getElementById("Mobile");

				if (window.innerWidth > 900) {
					PCContent.style.display = "block";
					MobileContent.style.display = "none";
				} else {
					PCContent.style.display = "none";
					MobileContent.style.display = "block";
				}
			}

			window.onload = showContent;
			window.onresize = showContent;
	</script>
	</body>

</html>