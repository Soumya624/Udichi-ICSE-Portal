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
        <div style="background-image: url('img/p14.jpg'); background-size: cover; ">
			<div class="container">
				<div class="row" style="align-items: center;">
					<div class="col-sm-6">
					</div>
					<div class="col-sm-6" style="padding:5%">
						<div class="card" style="width:100%; padding: 5%; border-radius: 20px">
							<div class="card-body">
								<center>
									<h4>Our Services</h4>
									<p style="padding:1% 5%">We want to bring a revolution of change for the society by educating them</p>
								</center>
                                <br />
								<p style="text-align:justify"><b>Our Mission</b><br />The mission of Udichindia is to offer qualitative assessment by providing online preparation solution and analytics feedback to the students.</p>
                                <br />
                                <p style="text-align:justify"><b>Our Vision</b><br />To develop well rounded, confident and responsible individuals who aspire to achieve their full potential.</p>
                                <br />
                                <center><p>You can find our other concerns below</p></center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <br />
        <br />
        <br />
        <div id="PC">
		<center>
			<div class="tab" style="margin: 2% 5%;">
				<div class="row" style="align-items: center;">
					<div class="col-sm-3">
						<button class="tablinks" onclick="feature(event, 't1')" id="defaultOpen">Education</button>
					</div>
					<div class="col-sm-3">
						<button class="tablinks" onclick="feature(event, 't2')" id="defaultOpen">Environment</button>
					</div>
					<div class="col-sm-3">
						<button class="tablinks" onclick="feature(event, 't3')" id="defaultOpen">School Development</button>
					</div>
					<div class="col-sm-3">
						<button class="tablinks" onclick="feature(event, 't4')" id="defaultOpen">Village Development</button>
					</div>
				</div>
			</div>	
		</center>
		<div id="t1" class="tabcontent" style="margin: 2% 5%;text-align: justify;">
			<p>A vital social initiative and human right, education affects many other areas, including poverty, health, gender inequality, and human rights. A good education guarantees development in the social, economic, and civic spheres, which affect future generations' collective consciousness.</p>
		</div>
		<div id="t2" class="tabcontent" style="margin: 2% 5%;text-align: justify;">
			<p>The cumulative effect is an abhorrently wrong usage of natural resources over many years. India's ecology is currently degrading quickly and severely, and at alarming rates. Environmental degradation, poor public health, loss of biodiversity, loss of ecosystem resilience, and unstable livelihoods for the poor are the results of air pollution, growing water scarcity, water pollution, declining groundwater tables, preservation and quality of forests, and poor waste management.</p>
		</div>
		<div id="t3" class="tabcontent" style="margin: 2% 5%;text-align: justify;">
			<p>A school is guided and focused towards achieving its objective, which is better student learning, through school development, a systematic approach to change at the school level. A school development plan, created within the framework of both the provincial and district strategic education plans, represents the particulars of the neighbourhood school system. The Newfoundland and Labrador School Development Model is a goal-oriented method that entails group reflection, analysis, problem solving, planning, and continual development in order to achieve certain school objectives.</p>
		</div>
		<div id="t4" class="tabcontent" style="margin: 2% 5%;text-align: justify;">
            <p>A comprehensive strategy in the areas of health with a special focus on mothers and children, girl education, women's empowerment, income generation activities, and raising awareness of a safe and clean environment in the village is known as an integrated intervention.</p>
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
			<h5>Education</h5>
			<p>A vital social initiative and human right, education affects many other areas, including poverty, health, gender inequality, and human rights. A good education guarantees development in the social, economic, and civic spheres, which affect future generations' collective consciousness.</p>
			<br />

			<h5>Environment</h5>
			<p>The cumulative effect is an abhorrently wrong usage of natural resources over many years. India's ecology is currently degrading quickly and severely, and at alarming rates. Environmental degradation, poor public health, loss of biodiversity, loss of ecosystem resilience, and unstable livelihoods for the poor are the results of air pollution, growing water scarcity, water pollution, declining groundwater tables, preservation and quality of forests, and poor waste management.</p>
			<br />

			<h5>School Development</h5>
			<p>A school is guided and focused towards achieving its objective, which is better student learning, through school development, a systematic approach to change at the school level. A school development plan, created within the framework of both the provincial and district strategic education plans, represents the particulars of the neighbourhood school system. The Newfoundland and Labrador School Development Model is a goal-oriented method that entails group reflection, analysis, problem solving, planning, and continual development in order to achieve certain school objectives.</p>
			<br />

			<h5>Village Development</h5>
			<p>A comprehensive strategy in the areas of health with a special focus on mothers and children, girl education, women's empowerment, income generation activities, and raising awareness of a safe and clean environment in the village is known as an integrated intervention.</p>
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