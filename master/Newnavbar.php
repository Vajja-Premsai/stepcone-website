<style>
	.angle-bg {
		position: relative;
		height: 50px;
	}

	.angle-bg:before {
		content: "";
		position: absolute;
		top: 0;
		bottom: 0;
		width: 115%;
		background: #00327Aff;
		transform: skew(-30deg);
		left: -10%;
		box-shadow: 10px 10px rgba(54, 117, 206, 0.747);
	}

	.initialbg {
		position: relative;
		height: 37px;
	}

	.innavlink {
		color: #00327Aff !important;
	}

	.innavlink:hover {
		color: #FAB210ff !important;
	}


	/* needed to add through javascript */


	.downbg {
		position: relative;
		height: 30px;
	}

	.down-bg:before {
		content: "";
		position: absolute;
		top: 0;
		bottom: 0;
		width: 115%;
		background: #00327Aff;
		transform: skew(-30deg);
		left: -10%;
		box-shadow: 10px 10px rgba(54, 117, 206, 0.747);
	}



	.forhover {
		transition: 0.1s ease-in-out;
		background: #00327Aff !important;
	}

	.jsnavlink {
		color: white !important;
	}

	.jsnavlink:hover {
		color: #FAB210ff !important;
	}


	/* end for javascript */
	.case-item-header {
		margin: 12px 8px 14px;
		font-size: 50px;
		color: #fff;
		text-align: right;
	}

	.ribbon {
		display: flex;
		z-index: 10;
		justify-content: center;
		align-items: center;
	}

	/* .navtop {
		height: 140%;
	} */

	.navfirst {
		width: 100%;
	}

	.forspace {
		padding: 0px 10px;
	}

	.icon {
		padding-left: 0.8rem;
		font-size: 1.2rem;
		color: #00327Aff !important;
	}

	.icon-light {
		padding-left: 0.8rem;
		font-size: 1.2rem;
		color: #00327Aff !important;
	}

	.v-slider-frame {
		border: 1px solid #4BB3FD;
		height: 50px;
		overflow: hidden;
		text-align: center;
	}

	ul .v-slides {
		list-style-type: none;
		transform: translateY(50px);
		padding: 0;
	}

	.v-slide {
		font-size: 24px;
		line-height: 50px;
		color: #4BB3FD;
	}

	/* search */
	.search-container {
		/* width: 300px; */
		display: flex;
		margin: 0 auto;
		align-items: center;
		justify-content: center;
		/* margin-left: 3rem; */
	}

	input#search-bar {
		margin: 0 auto;
		width: 100%;
		height: 32px;
		padding: 0 10px;
		font-size: 1rem;
		border: 1px solid #D0CFCE;
		outline: none;
	}

	input#search-bar:focus {
		border: 1px solid #008ABF;
		transition: 0.35s ease;
		color: #008ABF;
	}

	input#search-bar:focus::-webkit-input-placeholder {
		transition: opacity 0.45s ease;
		opacity: 0;
	}

	input#search-bar:focus::-moz-placeholder {
		transition: opacity 0.45s ease;
		opacity: 0;
	}

	input#search-bar:focus:-ms-placeholder {
		transition: opacity 0.45s ease;
		opacity: 0;
	}

	.search-icon {
		position: relative;
		float: right;
		width: 75px;
		height: 75px;
		top: -62px;
		right: -45px;
	}

	.connected,
	.social {
		color: #000;
	}

	.upperNavigation li .nav-link {
		color: #fff !important;
	}


	.mobileNavbar {
		display: none;
	}

	@media(max-width: 768px) {
		.megaNavbar {
			display: none;
		}

		.mobileNavbar {
			display: block;
		}
	}


	.megamenu {
		padding-bottom: 5px;
	}
</style>



<section class="megaNavbar">
	<div class="topnavbar">
		<div class=" navtop" style="display: flex;justify-content:space-evenly;align-items:center;">
			<nav class=" navbar-expand-lg  navbar-light" style="padding-left:3vw;padding-bottom:1.8vh;">
				<div id="navbarContent" class="collapse navbar-collapse navfirst" style="padding-right:3.5rem;">
					<div class="row angle-bg">
						<div class="ribbon">
							<ul class="navbar-nav  ml-auto upperNavigation">
								<!-- Home list -->
								<li class="nav-item"><a href="index.php" class="nav-link font-weight-bold text-uppercase">Home</a>
								</li>
								<li class="nav-item"><a href="newAbout.php" class="nav-link font-weight-bold text-uppercase">About</a></li>
								<!-- Accreditations -->
								<li class="nav-item"><a href="accreditations.php" class="nav-link font-weight-bold text-uppercase">Accreditations</a></li>
								<!-- Home list -->
								<li class="nav-item"><a href="index.php#notifications" class="nav-link font-weight-bold text-uppercase">Notifications</a>
								</li>
								<li class="nav-item"><a href="https://gmrit.edu.in/payments/" target="_blank" class="nav-link font-weight-bold text-uppercase">Online payments</a></li>
								<!-- Accreditations -->
								<li class="nav-item"><a href="placements.php" class="nav-link font-weight-bold text-uppercase">placements</a></li>
							</ul>
						</div>
					</div>
				</div>

			</nav>
			<div class="forspace" style="display:flex; align-items:center">
				<!-- <span class="connected" style="display: flex;justify-content:space-evenly;align-items:center;">Get Connected <i class="bi bi-headset icon"></i></i> <i class="bi bi-whatsapp icon"></i><i class="bi bi-pin-map-fill icon"></i></p></span> -->
				<span class="connected" style="display: flex;justify-content:space-evenly;align-items:center;">Get Connected <a href="tel:+8941251592" target="_blank"><img class="icon" src="https://img.icons8.com/flat-round/21/000000/phone.png"></a> <a href="https://api.whatsapp.com/send/?phone=9949784378&" target="_blank"><img src="https://img.icons8.com/color/26/000000/whatsapp--v1.png" class="icon" /></a><a href="https://goo.gl/maps/9KpbyHth3eKajyQ28" target="_blank"><img src="https://img.icons8.com/color/26/000000/360-view.png" class="icon" /></a></p></span>
			</div>
			<div class="forspace" style="display:flex; align-items:center">
				<span class="social" style="display: flex;justify-content:space-evenly;align-items:center;">Get Social <a href="https://www.facebook.com/GMRITofficial" target="_blank" ><img src="https://img.icons8.com/fluency/26/000000/facebook.png" class="icon" /></a><a href="https://mobile.twitter.com/GMRIT1997" target="_blank"><img src="https://img.icons8.com/fluency/24/000000/twitter.png" class="icon" /></i></a><a href="https://www.instagram.com/gmrit_rajam/" target="_blank"><img src="https://img.icons8.com/fluency/26/000000/instagram-new.png" class="icon" /></a><a href="https://www.youtube.com/c/GMRITRajamAP1997" target="_blank"><img src="https://img.icons8.com/fluency/26/000000/youtube-play.png" class="icon" /></a></span>
			</div>
			<div>
				<form class="search-container" style="display: flex;justify-content:space-evenly;align-items:center;">
					<input type="text" id="search-bar" placeholder="Need help!" style="border:solid 1px #00327Aff">&nbsp;<i class="bi bi-search icon" style="padding-right: 0.5vw;color:#00327Aff;"></i>
				</form>
			</div>
		</div>
		<div class=" row downnavbar" id="downnavbar">
			<div class="col-lg-5">
				<a href="./index.php">
					<img src="images/logo.jpg" style="transform:scale(0.8);width:auto;padding-left: 6rem;" alt="GMRIT LOGO">
				</a>
			</div>

			<div class="col-lg-7 forblue" style="display: flex;margin:0 -4.7rem 0 0;">
				<nav class="navbar navbar-expand-lg navbar-light bg-white mynav" id="togglenav">
					<button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"> <span class="navbar-toggler-icon"></span>
					</button>
					<div id="navbarContent" class="collapse navbar-collapse" style="padding-right:2vw">
						<div class="row initialbg" id="downbg">
							<div class="ribbon">
								<ul class="navbar-nav  ml-auto downNavigation">
									<!-- Governance list -->
									<li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link innavlink selectnavlink dropdown-toggle font-weight-bold text-uppercase">Governance</a>
										<div aria-labelledby="megamneu" id="navbar-goverance-dropdown" class="dropdown-menu border-0 p-0 m-0">
											<div class="container">
												<div class="row rounded-0 m-0 shadow-sm bg-white">
													<div class="col-lg-6 h6 overviewPart" style="padding:0 !important;margin:0 !important;">
														<!--<h6 class="font-weight-bold text-uppercase overviewTitle">Overview</h6>-->

														<img src="images/navbar/governance.png" style="width:100%;height:100%;" alt="" class="navbarVisualImg overviewPicture">
													</div>
													<div class="col-lg-6 selectforhover">
														<div class="p-4">
															<div class="row ">
																<div class="col-lg-8 mb-4">
																	<ul class="list-unstyled">
																		<li class="nav-item"><a href="autonomy.php" class="nav-link innavlink selectnavlink text-small pb-0">Overview</a></li>
																		<li class="nav-item"><a href="highlight_autonomy.php" class="nav-link innavlink selectnavlink text-small pb-0">Highlights of Autonomy</a></li>
																		<li class="nav-item"><a href="governance.php" class="nav-link  innavlink selectnavlink text-small pb-0 ">Governance Committees</a></li>
																		<li class="nav-item"><a href="#" class="nav-link innavlink selectnavlink  text-small pb-0 uc_link">Academic Regulation - UG
																				Programs(2020)</a></li>
																		<li class="nav-item"><a href="#" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Academic Regulation - UG
																				Programs(2016)</a></li>
																		<li class="nav-item"><a href="#" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">UGC
																				Undertaking</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- Programs List -->
									<li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link  innavlink selectnavlink dropdown-toggle font-weight-bold text-uppercase">Programs</a>
										<div aria-labelledby="megamneu" id="navbar-programs-dropdown" class="dropdown-menu border-0 p-0 m-0">
											<div class="container">
												<div class="row bg-white rounded-0 m-0 shadow-sm ">


													<div class="col-md-5 h6 overviewPart" style="padding:0 !important;margin:0 !important;">
														<img src="images/navbar/placements.png" style="width:100%;height:100%;" alt="Not loading" class="navbarVisualImg overviewPicture ">

													</div>
													<div class="col-md-7 selectforhover">
														<div class="p-4">
															<div class="row">
																<div class="col-lg-6 mb-4">
																	<h6 class="font-weight-bold text-uppercase innavlink">UNDERGRADUATE</h6>
																	<ul class="list-unstyled">

																		<!--<li class="nav-item"><a href="#" class="nav-link  innavlink selectnavlink text-small pb-0 ">Overview</a></li>-->
																		<li class="nav-item"><a href="department.php?code=cse" class="nav-link  innavlink selectnavlink text-small pb-0 ">Computer Science and Engineering</a></li>
																		<li class="nav-item"><a href="department.php?code=it" class="nav-link  innavlink selectnavlink text-small pb-0 uc_link">Information Technology</a></li>
																		<li class="nav-item"><a href="department.php?code=ece" class="nav-link  innavlink selectnavlink text-small pb-0 uc_link">Electronics & Communication Engineering</a></li>
																		<li class="nav-item"><a href="department.php?code=eee" class="nav-link  innavlink selectnavlink text-small pb-0 uc_link">Electrical & Electronics</a></li>
																		<li class="nav-item"><a href="department.php?code=ece" class="nav-link  innavlink selectnavlink text-small pb-0 uc_link">Mechanical Engineering</a></li>
																		<li class="nav-item"><a href="department.php?code=civil" class="nav-link  innavlink selectnavlink text-small pb-0 uc_link">Civil Engineering</a></li>
																		<li class="nav-item"><a href="department.php?code=chem" class="nav-link  innavlink selectnavlink text-small pb-0 uc_link">Chemical Engineering</a></li>
																		<li class="nav-item"><a href="department.php?code=CSE" class="nav-link  innavlink selectnavlink text-small pb-0 uc_link">CSE
																				(Artificial Intelligence & Machine Learning)</a></li>
																		<li class="nav-item"><a href="department.php?code=CSE" class="nav-link  innavlink selectnavlink text-small pb-0 uc_link">CSE
																				(Artificial Intelligence & Data Science)</a></li>
																	</ul>
																</div>
																<div class="col-lg-6 mb-4">
																	<h6 class="font-weight-bold text-uppercase innavlink">POSTGRADUATE</h6>
																	<ul class="list-unstyled">
																		<li class="nav-item"><a href="#" class="nav-link  innavlink selectnavlink text-small pb-0">Overview</a></li>
																		<li class="nav-item"><a href="#" class="nav-link  innavlink selectnavlink text-small pb-0 uc_link">Cyber Security (CSE)</a></li>
																		<li class="nav-item"><a href="" class="nav-link  innavlink selectnavlink text-small pb-0 uc_link">Environmental </a>
																		</li>
																		<li class="nav-item"><a href="#" class="nav-link  innavlink selectnavlink text-small pb-0 uc_link">Power and Industrial
																				Drives</a>
																		</li>
																		<li class="nav-item"><a href="#" class="nav-link  innavlink selectnavlink text-small pb-0 uc_link">Environmental </a>
																		</li>
																		<li class="nav-item"><a href="#" class="nav-link  innavlink selectnavlink text-small pb-0 uc_link">Transportation </a>
																		</li>
																		<li class="nav-item"><a href="#" class="nav-link  innavlink selectnavlink text-small pb-0 uc_link">VLSI and Embedded Systems
																				Design</a>
																		</li>
																		<li class="nav-item"><a href="#" class="nav-link  innavlink selectnavlink text-small pb-0 uc_link">Thermal </a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- Resources list -->
									<li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link innavlink selectnavlink dropdown-toggle font-weight-bold text-uppercase">Resources</a>
										<div aria-labelledby="megamneu" id="navbar-resources-dropdown" class="dropdown-menu border-0 p-0 m-0">
											<div class="container">
												<div class="row bg-white rounded-0 m-0 shadow-sm ">
													<div class="col-lg-5 h6 overviewPart" style="padding:0 !important;margin:0 !important;">

														<img src="images/navbar/stateofart.png" alt="" style="width:100%;height:100%;" class="navbarVisualImg overviewPicture">
													</div>
													<div class="col-lg-7 selectforhover">
														<div class="p-4">
															<div class="row ">
																<div class="col-lg-6 mb-4">
																	<ul class="list-unstyled">

																		<li class="nav-item" style="color:#FAB210ff">
																			Physical Resources <br>
																			<ul class="list-unstyled">
																				<li class="nav-item"><a href="labs.php" class="nav-link innavlink selectnavlink text-small pb-0">Labs</a></li>
																				<li class="nav-item"><a href="#" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Amenities</a></li>
																				<li class="nav-item"><a href="#" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Infrastructure</a></li>
																			</ul>
																		</li>
																		<br>
																		<li class="nav-item" style="color:#FAB210ff">
																			Human Resources <br>
																			<ul class="list-unstyled">
																				<li class="nav-item"><a href="facultydirectory.php" class="nav-link innavlink selectnavlink text-small pb-0 ">Faculty Directory</a></li>
																				<li class="nav-item"><a href="#" download="faculty_incentives.pdf" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Faculty Incentives</a></li>
																				<li class="nav-item"><a href="#" download="hr_policies.pdf" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">H.R. Policies</a></li>
																			</ul>
																		</li>

																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- Examination list -->
									<li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link innavlink selectnavlink dropdown-toggle font-weight-bold text-uppercase">Examinations</a>
										<div aria-labelledby="megamneu" id="navbar-examinations-dropdown" class="dropdown-menu border-0 p-0 m-0">
											<div class="container">
												<div class="row bg-white rounded-0 m-0 shadow-sm">
													<div class="col-lg-6 overview" style="padding:0 !important;margin:0 !important;">

														<img src="images/navbar/examination.png" alt="" style="width:100%;height:100%;" class="navbarVisualImg overviewPicture">
													</div>
													<div class="col-lg-6 selectforhover">
														<div class="p-4">
															<div class="row ">
																<div class="col-lg-8 mb-4">
																	<ul class="list-unstyled">
																		<li class="nav-item"><a href="https://sriramguttula.in/gmrit.org/examination/index.php" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Overview</a></li>
																		<li class="nav-item"><a href="https://sriramguttula.in/gmrit.org/examination/results.php" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Results</a></li>
																		<li class="nav-item"><a href="https://sriramguttula.in/gmrit.org/examination/timetables.php" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Timetables</a></li>
																		<li class="nav-item"><a href="https://sriramguttula.in/gmrit.org/examination/notifications.php" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Notifications</a></li>
																		<li class="nav-item"><a href="#" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Result
																				Declaration Committee</a></li>
																		<li class="nav-item"><a href="https://sriramguttula.in/gmrit.org/examination/docs/Autonomy_Regulations_Examinations.pdf" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Examinations Regulations
																			</a></li>
																		<li class="nav-item"><a href="https://sriramguttula.in/gmrit.org/examination/Transitory_Regulations.pdf" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Transitory Regulations</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- Placements list -->
									<li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link innavlink selectnavlink dropdown-toggle font-weight-bold text-uppercase">Research</a>
										<div aria-labelledby="megamneu" id="navbar-placements-dropdown" class="dropdown-menu border-0 p-0 m-0">
											<div class="container">
												<div class="row bg-white rounded-0 m-0 shadow-sm ">
													<div class="col-lg-6 h6 p-4 overviewPart" style="padding:0 !important;margin:0 !important;">
														<img src="images/navbar/research.png" style="width:100%;height:100%;" alt="" class="navbarVisualImg overviewPicture">
													</div>
													<div class="col-lg-6 selectforhover">
														<div class="p-4">
															<div class="row ">
																<div class="col-lg-8 mb-4">
																	<ul class="list-unstyled">
																		<li class="nav-item"><a href="facultydirectory.php" class="nav-link innavlink selectnavlink text-small pb-0 ">Overview</a></li>
																		<li class="nav-item"><a href="#" download="faculty_incentives.pdf" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Faculty Research Profiles</a></li>
																		<li class="nav-item"><a href="#" download="faculty_incentives.pdf" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Faculty Publications</a></li>
																		<li class="nav-item"><a href="#" download="faculty_incentives.pdf" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Seminar & Conference Notifications</a></li>
																		<li class="nav-item"><a href="#" download="faculty_incentives.pdf" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Grants Received</a></li>
																		<li class="nav-item"><a href="#" download="hr_policies.pdf" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Patents</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- Life@Gmrit list -->
									<li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link innavlink selectnavlink dropdown-toggle font-weight-bold text-uppercase">Life@GMRIT</a>
										<div aria-labelledby="megamneu" id="navbar-life@gmrit-dropdown" class="dropdown-menu border-0 p-0 m-0">
											<div class="container">
												<div class="row bg-white rounded-0 m-0 shadow-sm ">
													<div class="col-lg-6 h6 overviewPart" style="padding:0 !important;margin:0 !important;">

														<img src="images/navbar/life.png" style="width:100%;height:100%;" alt="" class="navbarVisualImg overviewPicture">
													</div>
													<div class="col-lg-6 selectforhover">
														<div class="p-4">
															<div class="row ">
																<div class="col-lg-8 mb-4">
																	<ul class="list-unstyled">
																		<li class="nav-item"><a href="hostels.php" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Hostels</a></li>
																		<li class="nav-item"><a href="anti_ragging.php" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Anti-ragging Policy</a></li>
																		<li class="nav-item"><a href="sexual_harrasment_policy.php" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Sexual
																				Harassment Policy</a></li>
																		<li class="nav-item"><a href="language_labaratory.php" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Language Laboratory</a></li>
																		<li class="nav-item"><a href="infrastructure.php" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Infrastructure at a glance</a>
																		</li>
																		<li class="nav-item"><a href="#" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Student Incentives</a></li>
																		<li class="nav-item"><a href="sports.php" class="nav-link jsnavlink innavlink selectnavlink text-small pb-0 uc_link">Sports
																				Facilities & Achievements</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link innavlink selectnavlink dropdown-toggle font-weight-bold text-uppercase">Login</a>
										<div aria-labelledby="megamneu" id="navbar-life@gmrit-dropdown" class="dropdown-menu border-0 p-0 m-0">
											<div class="container">
												<div class="row bg-white rounded-0 m-0 shadow-sm ">
													<div class="col-lg-6 h6  overviewPart" style="padding:0 !important;margin:0 !important;">

														<img src="images/navbar/login.png" style="width:100%;height:100%;" alt="" class="navbarVisualImg overviewPicture">
													</div>
													<div class="col-lg-6 selectforhover">
														<div class="p-4">
															<div class="row ">
																<div class="col-lg-6 mb-4">
																	<ul class="list-unstyled">
																		<li class="nav-item"><a href="./login.php" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Student Login</a></li>
																		<li class="nav-item"><a href="#" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Parent Login</a></li>
																		<li class="nav-item"><a href="#" class="nav-link innavlink selectnavlink text-small pb-0 uc_link">Faculty Login</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>

								</ul>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>







<section class="mobileNavbar">
	<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white py-1 shadow-sm ">

		<a class="navbar-brand" href="./index.php">
			<img src="images/logo.jpg" style="height:40px;width: auto;" alt="GMRIT LOGO">
		</a>
		<button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"> <span class="navbar-toggler-icon"></span> </button>
		<div id="navbarContent" class="collapse navbar-collapse">
			<ul class="navbar-nav  ml-auto">
				<!-- Home list -->
				<li class="nav-item"><a href="index.php" class="nav-link font-weight-bold text-uppercase">Home</a>
				</li>
				<li class="nav-item"><a href="about.php" class="nav-link font-weight-bold text-uppercase">About</a></li>
				<!-- Accreditations -->
				<li class="nav-item"><a href="accreditations.php" class="nav-link font-weight-bold text-uppercase">Accreditations</a></li>
				<!-- Governance list -->
				<li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Governance</a>
					<div aria-labelledby="megamneu" id="navbar-goverance-dropdown" class="dropdown-menu border-0 p-0 m-0">
						<div class="container">
							<div class="row bg-white rounded-0 m-0 shadow-sm ">
								<div class="col-lg-6 h6 p-4 overviewPart">
									<!--<h6 class="font-weight-bold text-uppercase overviewTitle">Overview</h6>-->

									<img src="images/Images/Student.png" alt="" class="navbarVisualImg overviewPicture">
								</div>
								<div class="col-lg-6">
									<div class="p-4">
										<div class="row ">
											<div class="col-lg-6 mb-4 bg-white">
												<ul class="list-unstyled">
													<li class="nav-item"><a href="autonomy.php" class="nav-link text-small pb-0">Overview</a></li>
													<li class="nav-item"><a href="highlight_autonomy.php" class="nav-link text-small pb-0">Highlights of Autonomy</a></li>
													<li class="nav-item"><a href="governance.php" class="nav-link text-small pb-0 ">Governance Committees</a></li>
													<li class="nav-item"><a href="#" class="nav-link text-small pb-0 uc_link">Academic Regulation - UG
															Programs(2020)</a></li>
													<li class="nav-item"><a href="#" class="nav-link text-small pb-0 uc_link">Academic Regulation - UG
															Programs(2016)</a></li>
													<li class="nav-item"><a href="#" class="nav-link text-small pb-0 uc_link">UGC
															Undertaking</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<!-- Programs List -->
				<li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Programs</a>
					<div aria-labelledby="megamneu" id="navbar-programs-dropdown" class="dropdown-menu border-0 p-0 m-0">
						<div class="container">
							<div class="row bg-white rounded-0 m-0 shadow-sm ">


								<div class="col-lg-6 col-md-5 h6 overviewPart" style="padding:0 !important;margin:0 !important;">
									<img src="images/navbar/programs.png" alt="" class="navbarVisualImg overviewPicture">

								</div>
								<div class="col-lg-6 col-md-7 ">
									<div class="p-4">
										<div class="row">
											<div class="col-lg-4 mb-4">
												<h6 class="font-weight-bold text-uppercase">UNDERGRADUATE</h6>
												<ul class="list-unstyled">

													<li class="nav-item"><a href="#" class="nav-link text-small pb-0 ">Overview</a></li>
													<li class="nav-item"><a href="#" class="nav-link text-small pb-0 uc_link">Chemical </a>
													</li>
													<li class="nav-item"><a href="#" class="nav-link text-small pb-0 uc_link">Civil
														</a></li>
													<li class="nav-item"><a href="department.php?code=CSE" class="nav-link text-small pb-0 ">Computer Science
														</a>
													</li>
													<li class="nav-item"><a href="#" class="nav-link text-small pb-0 uc_link">Electrical & Electronics
														</a></li>
													<li class="nav-item"><a href="#" class="nav-link text-small pb-0 uc_link">Electronics &
															Communication
														</a></li>
													<li class="nav-item"><a href="department.php?code=IT" class="nav-link text-small pb-0 uc_link">Information Technology</a>
													</li>
													<li class="nav-item"><a href="#" class="nav-link text-small pb-0 uc_link">CSE
															(Artificial Intelligence & Data Science)</a></li>
													<li class="nav-item"><a href="#" class="nav-link text-small pb-0 uc_link">CSE
															(Artificial Intelligence & Machine Learning)</a></li>
													<li class="nav-item"><a href="#" class="nav-link text-small pb-0 uc_link">Honors
															and Minor Degrees</a></li>
												</ul>
											</div>
											<div class="col-lg-4 mb-4">
												<h6 class="font-weight-bold text-uppercase">POSTGRADUATE</h6>
												<ul class="list-unstyled">
													<li class="nav-item"><a href="#" class="nav-link text-small pb-0">Overview</a></li>
													<li class="nav-item"><a href="#" class="nav-link text-small pb-0 uc_link">Cyber Security (CSE)</a></li>
													<li class="nav-item"><a href="" class="nav-link text-small pb-0 uc_link">Environmental </a>
													</li>
													<li class="nav-item"><a href="#" class="nav-link text-small pb-0 uc_link">Power and Industrial
															Drives</a>
													</li>
													<li class="nav-item"><a href="#" class="nav-link text-small pb-0 uc_link">Environmental </a>
													</li>
													<li class="nav-item"><a href="#" class="nav-link text-small pb-0 uc_link">Transportation </a>
													</li>
													<li class="nav-item"><a href="#" class="nav-link text-small pb-0 uc_link">VLSI and Embedded Systems
															Design</a>
													</li>
													<li class="nav-item"><a href="#" class="nav-link text-small pb-0 uc_link">Thermal </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<!-- Resources list -->
				<li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Resources</a>
					<div aria-labelledby="megamneu" id="navbar-resources-dropdown" class="dropdown-menu border-0 p-0 m-0">
						<div class="container">
							<div class="row bg-white rounded-0 m-0 shadow-sm ">
								<div class="col-lg-6 h6 p-4 overviewPart">

									<img src="images/Images/Student.png" alt="" class="navbarVisualImg overviewPicture">
								</div>
								<div class="col-lg-6">
									<div class="p-4">
										<div class="row ">
											<div class="col-lg-6 mb-4 bg-white">
												<ul class="list-unstyled">

													<li class="nav-item">
														Physical Resources <br>
														<ul class="list-unstyled">
															<li class="nav-item"><a href="labs.php" class="nav-link text-small pb-0">Labs</a></li>
															<li class="nav-item"><a href="#" class="nav-link text-small pb-0 uc_link">Amenities</a></li>
															<li class="nav-item"><a href="infrastructure.php" class="nav-link text-small pb-0 uc_link">Infrastructure</a></li>
														</ul>
													</li>
													<br>
													<li class="nav-item">
														Human Resources <br>
														<ul class="list-unstyled">
															<li class="nav-item"><a href="facultydirectory.php" class="nav-link text-small pb-0 ">Faculty Directory</a></li>
															<li class="nav-item"><a href="#" download="faculty_incentives.pdf" class="nav-link text-small pb-0 uc_link">Faculty Incentives</a></li>
															<li class="nav-item"><a href="#" download="hr_policies.pdf" class="nav-link text-small pb-0 uc_link">H.R. Policies</a></li>
														</ul>
													</li>

												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<!-- Examination list -->
				<li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Examinations</a>
					<div aria-labelledby="megamneu" id="navbar-examinations-dropdown" class="dropdown-menu border-0 p-0 m-0">
						<div class="container">
							<div class="row bg-white rounded-0 m-0 shadow-sm">
								<div class="col-lg-6  p-4 overview">

									<img src="images/Images/Student.png" alt="" class="navbarVisualImg overviewPicture">
								</div>
								<div class="col-lg-6">
									<div class="p-4">
										<div class="row ">
											<div class="col-lg-6 mb-4 bg-white">
												<ul class="list-unstyled">
													<li class="nav-item"><a href="./examination/index.php" class="nav-link text-small pb-0 uc_link">Overview</a></li>
													<li class="nav-item"><a href="./examination/results.php" class="nav-link text-small pb-0 uc_link">Results</a></li>
													<li class="nav-item"><a href="./examination/timetables.php" class="nav-link text-small pb-0 uc_link">Timetables</a></li>
													<li class="nav-item"><a href="./examination/notifications.php" class="nav-link text-small pb-0 uc_link">Notifications</a></li>
													<li class="nav-item"><a href="#" class="nav-link text-small pb-0 uc_link">Result
															Declaration Committee</a></li>
													<li class="nav-item"><a href="./examination/docs/Autonomy_Regulations_Examinations.pdf" target="_blank" class="nav-link text-small pb-0 uc_link">Examinations Regulations
														</a></li>
													<li class="nav-item"><a href="./examination/Transitory_Regulations.pdf" target="_blank" class="nav-link text-small pb-0 uc_link">Transitory Regulations</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<!-- Placements list -->
				<li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Research</a>
					<div aria-labelledby="megamneu" id="navbar-placements-dropdown" class="dropdown-menu border-0 p-0 m-0">
						<div class="container">
							<div class="row bg-white rounded-0 m-0 shadow-sm ">
								<div class="col-lg-6 h6 p-4 overviewPart">

									<img src="images/Images/Placements.png" alt="" class="navbarVisualImg overviewPicture">
								</div>
								<div class="col-lg-6">
									<div class="p-4">
										<div class="row ">
											<div class="col-lg-6 mb-4 bg-white">
												<ul class="list-unstyled">
													<li class="nav-item"><a href="research.php" class="nav-link text-small pb-0 ">Overview</a></li>
													<li class="nav-item"><a href="facultyDirectory.php" class="nav-link text-small pb-0 uc_link">Faculty Research Profiles</a></li>
													<li class="nav-item"><a href="publications.php" class="nav-link text-small pb-0 uc_link">Faculty Publications</a></li>
													<li class="nav-item"><a href="seminars.php" class="nav-link text-small pb-0 uc_link">Seminar & Conference Notifications</a></li>
													<li class="nav-item"><a href="#" download="grants.pdf" class="nav-link text-small pb-0 uc_link">Grants Received</a></li>
													<li class="nav-item"><a href="patents.php" download="patents.pdf" class="nav-link text-small pb-0 uc_link">Patents</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<!-- Life@Gmrit list -->
				<li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Life@GMRIT</a>
					<div aria-labelledby="megamneu" id="navbar-life@gmrit-dropdown" class="dropdown-menu border-0 p-0 m-0">
						<div class="container">
							<div class="row bg-white rounded-0 m-0 shadow-sm ">
								<div class="col-lg-6 h6 p-4 overviewPart">

									<img src="images/Images/Student1.png" alt="" class="navbarVisualImg overviewPicture">
								</div>
								<div class="col-lg-6">
									<div class="p-4">
										<div class="row ">
											<div class="col-lg-6 mb-4 bg-white">
												<ul class="list-unstyled">
													<li class="nav-item"><a href="#" class="nav-link text-small pb-0 uc_link">Overview</a></li>
													<li class="nav-item"><a href="hostels.php" class="nav-link text-small pb-0 uc_link">Hostels</a></li>
													<li class="nav-item"><a href="anti_ragging.php" class="nav-link text-small pb-0 uc_link">Anti-ragging Policy</a></li>
													<li class="nav-item"><a href="sexual_harrasment_policy.php" class="nav-link text-small pb-0 uc_link">Sexual
															Harassment Policy</a></li>
													<li class="nav-item"><a href="library.php" class="nav-link text-small pb-0 uc_link">Library</a></li>
													<li class="nav-item"><a href="language_laboratory.php" class="nav-link text-small pb-0 uc_link">Language Laboratory</a></li>
													<li class="nav-item"><a href="infrastructure.php" class="nav-link text-small pb-0 uc_link">Infrastructure at a glance</a>
													</li>
													<li class="nav-item"><a href="#" download="student_incentives.php" class="nav-link text-small pb-0 uc_link">Student Incentives</a></li>
													<li class="nav-item"><a href="sports.php" class="nav-link text-small pb-0 uc_link">Sports
															Facilities & Achievements</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
			<div id="search-autocomplete" class="form-outline" style="display:flex;">
				<input class="form-control me-2" id="searchinput" type="search" placeholder="Search" aria-label="Search">
				<div class="btn-group">
					<button type="submit" class="btn btn-primary" style="display:flex;margin-left: 8px;" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Search
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink" id="searchDropDown">
					</div>
				</div>
			</div>
	</nav>
</section>