<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/lightbox.min.css">
	<title>Department of Humanities,Buet </title>
</head>

<body>
	<div class="headerpart">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="logo">
						<a href="index.html"><img src="assets/images/Logo2.png" alt="logo"></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="var">

					</div>
					<div class="dp">
						<div class="dp">
							<a href="index.html">
								<h3><b>Department of Humanities</b></h3>
							</a>
						</div>
					</div>


				</div>
				<div class="col-md-4">
					<div class="lefnav">
						<ul>
							<a href="https://www.buet.ac.bd/web/">
								<li>BUET Home |</li>
							</a>
							<a href="https://webmail.buet.ac.bd">
								<li>BIIS |</li>
							</a>
							<a href="https://webmail.buet.ac.bd/">
								<li>Web mail|</li>
							</a>
							<a href="https://webmail.buet.ac.bd/">
								<li>Centeral library</li>
							</a>
						</ul>
					</div>
					<div class="srch">
						<nav class="navbar navbar-light">
							<form class="form-inline">
								<input class="form-control mr-sm-2" type="search" placeholder="Search"
									aria-label="Search">
								<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
							</form>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="navpart">
			<div class="container">
				<div class="row">
						<div class="container">
								<div class="col-lg-12 col-md-12">
									<nav class="navbar navbar-expand-lg navbar-light">
					
										<button class="navbar-toggler" type="button" data-toggle="collapse"
											data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
											aria-expanded="false" aria-label="Toggle navigation">
											<span class="navbar-toggler-icon"></span>
										</button>
					
										<div class="collapse navbar-collapse" id="navbarSupportedContent">
											<ul class="navbar-nav mr-auto">
												<li class="nav-item active">
													<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="Intro.php">introduction</a>
												</li>
												<li class="nav-item dropdown">
													<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
														data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														Faculty & Staff
													</a>
													<div class="dropdown-menu" aria-labelledby="navbarDropdown">
														<a class="dropdown-item" href="faculties.php">Faculty</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="Heads of the Department.php">Heads of The Department</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="office staff.php">Office Staff</a>
													</div>
												</li>
												<li class="nav-item dropdown">
													<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
														data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														Courses Offered
													</a>
													<div class="dropdown-menu" aria-labelledby="navbarDropdown">
														<a class="dropdown-item" href="accounting.php">Accounting</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="anthropology.php">Anthropolgy</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="economics.php">Ecomnomics</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="english.php">English</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="Logic and philosophy.php">Logic & Philosophy</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="Management and Business Law.php">Management & Business Law</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="Political Science.php">Political Science</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="Psychology.php">Psychology</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="Sociology.php">Sociology</a>
													</div>
												</li>
												<li class="nav-item dropdown">
													<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
														data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														Facilities
													</a>
													<div class="dropdown-menu" aria-labelledby="navbarDropdown">
														<a class="dropdown-item" href="English Language Lab1.php">English Language Lab-I & II</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="teachers_lab.php">Teachers Computer Lab</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="Department_lib.php">Department Library</a>
					
													</div>
												</li>
												<li class="nav-item">
														<a class="nav-link" href="Research.php">research and publication</a>
													</li>
												<li class="nav-item">
													<a class="nav-link" href="contact.php">contact</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="gallery.php">gallery</a>
												</li>
					
					
											</ul>
					
										</div>
									</nav>
								</div>
							</div>
				</div>
			</div>
		</div>
	
	<section id="prfl_left">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<hr>
					<ul style="color: #bd0e0e">
					<?php include('admin/db/config.php') ?>
						<?php 
						  $show_query="SELECT * FROM inactive_members";
						  $run_show_query=mysqli_query($con,$show_query);
						  while($rows=mysqli_fetch_array($run_show_query)){
							$inactive_id=$rows['ID'];  
							$member=$rows['member'];
						  ?>
						<li><h5>Active Faculty Members on Leave</h5></li>
							<li style="list-style: none"><p><b> <?php echo $member?></b></p></li>
					</ul>
					 <?php }?>
				
					
					<ol style="list-style: circle">
						<li style="color: #ac1f25"><h5>Active Faculty Members</h5></li>
					</ol>
					<div class="tchr_list">
						<ol>
						<?php 
						  $show_query="SELECT * FROM active_members";
						  $run_show_query=mysqli_query($con,$show_query);
						  while($rows=mysqli_fetch_array($run_show_query)){
							$active_id=$rows['ID'];  
							$members=$rows['members'];
						  ?>
							<li><?php echo $members?></li>
						  <?php }?>
						</ol>
					</div>
				
				</div>
				 <div class="col-md-9">
					<h5 style="text-align: center"><b style="color: #ac1f25">Teacher Profiles Details</b></h5>
					<div class="tchr_right">
							<section id="team" class="pb-5">
									<div class="container">
										
										<div class="row">
											<!-- Team member -->
<?php include('admin/db/config.php') ?>
<?php 
  $show_query="SELECT * FROM faculty";
  $run_show_query=mysqli_query($con,$show_query);
  while($rows=mysqli_fetch_array($run_show_query)){
    $faculty_id=$rows['ID'];
	$name=$rows['name'];
	$profession=$rows['profession'];
	$field=$rows['field'];
	$contact=$rows['contact'];
	$email=$rows['email'];
	$email2=$rows['email2'];
	$cv=$rows['cv'];
	$website=$rows['website'];
	$image=$rows['img'];

  ?>
											
											<div class="col-xs-12 col-sm-6 col-md-4">
												<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
													<div class="mainflip">
														<div class="frontside">
															<div class="card">
																<div class="card-body text-center">
																	<p><img class=" img-fluid" src="admin/images/<?php echo $image?>"card image"></p>
																	<h4 class="card-title"><?php echo $name?></h4>
																	<p><?php echo $profession?></p>
																	<p class="card-text"><b>Field of Interest:</b><?php echo $field?></p>
																	<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
																</div>
															</div>
														</div>
														<div class="backside">
															<div class="card">
																<div class="card-body text-center mt-4">
																	<h4 class="card-title"><?php echo $name?></h4>
																	<p class="card-text"><b>Contact:</b><?php echo $contact?></p>
																	<p><b>Email: </b><a href=""><?php echo $email?>,<br><?php echo $email2?></a></p>
																	<p><b>CV:</b><a href="<?php echo $cv?>">Click here for CV</a></p>
																	<p><b>Website: </b> <a href="<?php echo $website?>"><?php echo $website?></a></p>
																	<ul class="list-inline">
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-facebook"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-twitter"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-skype"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-google"></i>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- ./Team member -->
											<!-- Team member -->
										<!--	<div class="col-xs-12 col-sm-6 col-md-4">
												<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
													<div class="mainflip">
														<div class="frontside">
															<div class="card">
																<div class="card-body text-center">
																	<p><img class=" img-fluid" src="assets/images/Md-Murshikul-Alam.png" alt="card image"></p>
																	<h4 class="card-title">Md. Murshikul Alam</h4>
																	<p class="card-text">Associate Professor (English)</p>
																	<p><b>Field of Interest: </b>English for Specific Purposes (ESP), especially Academic Writing;
																		 Grammar; Victorian Novel, especially Thomas Hardy.</p>
																		
																	<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
																</div>
															</div>
														</div>
														<div class="backside">
															<div class="card">
																<div class="card-body text-center mt-4">
																	<h4 class="card-title">Md. Murshikul Alam</h4>
																	<p class="card-text"><b>Contact:</b></p>
																	<p><b>Email:</b><a href="">malam@hum.buet.ac.bd , murshikul1232000@yahoo.co.uk</a></p>
																	<p><b>CV:</b><a href="#">Click here for CV</a></p>
																	<p><b>Website: </b><a href="https://malam.buet.ac.bd/">https://malam.buet.ac.bd/</a></p>
																	<ul class="list-inline">
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-facebook"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-twitter"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-skype"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-google"></i>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div> -->
											<!-- ./Team member -->
											<!-- Team member -->
				<!--							<div class="col-xs-12 col-sm-6 col-md-4">
												<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
													<div class="mainflip">
														<div class="frontside">
															<div class="card">
																<div class="card-body text-center">
																	<p><img class=" img-fluid" src="assets/images/Dr._Shahanaz_Pervin.jpg" alt="card image"></p>
																	<h4 class="card-title">Dr. Shahnaz Pervin</h4>
																	<p class="card-text">Associate Professor & Head (Political Science)</p>
																	<p class="card-text"><b>Field of Interest:</b> Local Government, Civil Society, Governance and Development, Public</p>
																	<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
																</div>
															</div>
														</div>
														<div class="backside">
															<div class="card">
																<div class="card-body text-center mt-4">
																	<h4 class="card-title">Dr.Shahnaz Pervin</h4>
																	<p class="card-text"><b>Contact:</b></p>
																	<p><b>Email:</b><a href="#">shahnazpervin@hum.buet.ac.bd , pervinshahnaz@gmail.com</a></p>
																	<p><b>CV:</b><a href="">Click here for CV</a></p>
																	<p><b>Website:</b><a href="https://shahnazpervin.buet.ac.bd/">https://shahnazpervin.buet.ac.bd/</a></p>
																	<ul class="list-inline">
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-facebook"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-twitter"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-skype"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-google"></i>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>						-->
											<!-- ./Team member -->
											<!-- Team member -->
		<!--									<div class="col-xs-12 col-sm-6 col-md-4">
												<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
													<div class="mainflip">
														<div class="frontside">
															<div class="card">
																<div class="card-body text-center">
																	<p><img class=" img-fluid" src="assets/images/md_abdur_rouf.jpg"></p>
																	<h4 class="card-title">Dr. Md. Abdur Rouf</h4>
																	<p class="card-text">Associate Professor (Economics)</p>
																	<p style="text-align: justify"><b>Filed of Interest:</b> Microeconomics, Applied Econometrics, 
																		Macroeconomic Policy Instruments and Economic Modelling,
																		 Project Evaluation
																	</p>
																	<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
																</div>
															</div>
														</div>
														<div class="backside">
															<div class="card">
																<div class="card-body text-center mt-4">
																	<h4 class="card-title">Dr. Md. Abdur Rouf</h4>
																	<p class="card-text"><b>Contact</b></p>
																	<p><b>E-mail:</b><a href="">arouf@hum.buet.ac.bd</a></p>
																	<p><b>CV:</b><a href="">Click here for CV</a></p>
																	<p><b>Website:</b><a href="https://arouf.buet.ac.bd/">https://arouf.buet.ac.bd/</a></p>
																	<ul class="list-inline">
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-facebook"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-twitter"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-skype"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-google"></i>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>					-->
											<!-- ./Team member -->
											<!-- Team member -->
			<!--								<div class="col-xs-12 col-sm-6 col-md-4">
												<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
													<div class="mainflip">
														<div class="frontside">
															<div class="card">
																<div class="card-body text-center">
																	<p><img class=" img-fluid" src="assets/images/No_Picture_Available.png" alt="card image"></p>
																	<h4 class="card-title">Hosne Jahan</h4>
																	<p class="card-text">Assistant Professor (Accounting)</p>
																	<p><b>Field of Interest:</b><a href=""></a></p>
																	<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
																</div>
															</div>
														</div>
														<div class="backside">
															<div class="card">
																<div class="card-body text-center mt-4">
																	<h4 class="card-title">Hosne Jahan</h4>
																	<p class="card-text"><b>Contact</b></p>
																	<p><b></b><a href=""></a></p>
																	<p><b>E-mail:</b><a href="#"> hjahan@hum.buet.ac.bd</a></p>
																	<p><b>CV:</b><a href="#">Click for Details</a></p>
																	<p><b>Website:</b><a href="https://jahan.buet.ac.bd/">https://jahan.buet.ac.bd/</a></p>
																	<ul class="list-inline">
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-facebook"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-twitter"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-skype"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-google"></i>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>				-->
											<!-- ./Team member -->
											<!-- Team member -->
					<!--						<div class="col-xs-12 col-sm-6 col-md-4">
												<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
													<div class="mainflip">
														<div class="frontside">
															<div class="card">
																<div class="card-body text-center">
																	<p><img class=" img-fluid" src="assets/images/Khanam_Nargis_Sultana.JPG"></p>
																	<h4 class="card-title">Khanam Nargis Sultana</h4>
																	<p class="card-text">Assistant Professor (English)</p>
																	<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
																</div>
															</div>
														</div>
														<div class="backside">
															<div class="card">
																<div class="card-body text-center mt-4">
																	<h4 class="card-title">Khanam Nargis Sultana</h4>
																
																	<p><b>Contact</b></p>
																	<p><b>E-mail:</b><a href="#">sultana@hum.buet.ac.bd , khanamnargissultana@gmail.com</a></p>
																	<p><b>CV:</b><a href="">Click here for details</a></p>
																	<p><b>Website:</b><a href="https://sultana.buet.ac.bd/">Website: https://sultana.buet.ac.bd/</a></p>
																	<ul class="list-inline">
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-facebook"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-twitter"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-skype"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-google"></i>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>  	-->
											<!-- ./Team member -->
  <?php }?>
										</div>
									</div>
								</section>
								<!-- Team -->
					</div>
				 </div>
			</div>
		</div>
	</section>

	<section id="tchr_3rd">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
						<section id="team" class="pb-5">
								<div class="container">
								
									<div class="row">
										<!-- Team member -->
										
<?php 
  $show_query="SELECT * FROM faculty_2";
  $run_show_query=mysqli_query($con,$show_query);
  while($rows=mysqli_fetch_array($run_show_query)){
    $faculty_id=$rows['ID'];
	$name=$rows['name'];
	$profession=$rows['profession'];
	$field=$rows['field'];
	$contact=$rows['contact'];
	$email=$rows['email'];
	$email2=$rows['email2'];
	$cv=$rows['cv'];
	$website=$rows['website'];
	$image=$rows['img'];

  ?>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
												<div class="mainflip">
														<div class="frontside">
															<div class="card">
																<div class="card-body text-center">
																	<p><img class=" img-fluid" src="admin/images/<?php echo $image?>"card image"></p>
																	<h4 class="card-title"><?php echo $name?></h4>
																	<p><?php echo $profession?></p>
																	<p class="card-text"><b>Field of Interest:</b><?php echo $field?></p>
																	<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
																</div>
															</div>
														</div>
														<div class="backside">
															<div class="card">
																<div class="card-body text-center mt-4">
																	<h4 class="card-title"><?php echo $name?></h4>
																	<p class="card-text"><b>Contact:</b><?php echo $contact?></p>
																	<p><b>Email: </b><a href=""><?php echo $email?>,<br><?php echo $email2?></a></p>
																	<p><b>CV:</b><a href="<?php echo $cv?>">Click here for CV</a></p>
																	<p><b>Website: </b> <a href="<?php echo $website?>"><?php echo $website?></a></p>
																	<ul class="list-inline">
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-facebook"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-twitter"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-skype"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-google"></i>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- ./Team member -->
										<!-- Team member -->
									<!--	<div class="col-xs-12 col-sm-6 col-md-4">
											<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
												<div class="mainflip">
													<div class="frontside">
														<div class="card">
															<div class="card-body text-center">
																<p><img class=" img-fluid" src="assets/images/mizanur_rahman.jpg"></p>
																<h4 class="card-title">Dr. Mizanur Rahman</h4>
																<p>Assistant Professor (English)</p>
																<p class="card-text"><b>Field of Interest:</b>Evaluation, Needs Analysis, 
																	CALL (Computer-Assisted Language Learning); 
																	Modern British Fiction, 
																	Ecocriticism, Post-Colonial Literature(s).</p>
																<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<div class="backside">
														<div class="card">
															<div class="card-body text-center mt-4">
																<h4 class="card-title">Dr. Mizanur Rahman</h4>
																<p class="card-text"><b>Contact</b></p>
																<p><b>E-mail:</b><a href="">m.rahman.1978@gmail.com, mizanurrahman@hum.buet.ac.bd</a></p>
																<p><b>CV:</b><a href="">Click for Details</a></p>
																<p>Website:<b></b><a href="https://mizanurrahman.buet.ac.bd">https://mizanurrahman.buet.ac.bd/</a></p>
																<ul class="list-inline">
																	<li class="list-inline-item">
																		<a class="social-icon text-xs-center" target="_blank" href="#">
																			<i class="fa fa-facebook"></i>
																		</a>
																	</li>
																	<li class="list-inline-item">
																		<a class="social-icon text-xs-center" target="_blank" href="#">
																			<i class="fa fa-twitter"></i>
																		</a>
																	</li>
																	<li class="list-inline-item">
																		<a class="social-icon text-xs-center" target="_blank" href="#">
																			<i class="fa fa-skype"></i>
																		</a>
																	</li>
																	<li class="list-inline-item">
																		<a class="social-icon text-xs-center" target="_blank" href="#">
																			<i class="fa fa-google"></i>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div> -->
										<!-- ./Team member -->
										<!-- Team member -->
									<!--	<div class="col-xs-12 col-sm-6 col-md-4">
											<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
												<div class="mainflip">
													<div class="frontside">
														<div class="card">
															<div class="card-body text-center">
																<p><img class=" img-fluid" src="assets/images/Md_Rafiuzzaman.jpg" alt="card image"></p>
																<h4 class="card-title">Md. Rafiuz Zaman</h4>
																<p class="card-text">Assistant Professor (Sociology)</p>
																<p><b>Field of Interest:</b>Disaster management and vulnerability analysis, Gender studies</p>
																<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<div class="backside">
														<div class="card">
															<div class="card-body text-center mt-4">
																<h4 class="card-title">Md. Rafiuz Zaman</h4>
																<p class="card-text"><b>Contact</b></p>
																<p><b>E-mail:</b><a href="">rzaman@hum.buet.ac.bd , evanrafi@gmail.com</a></p>
																<p><b>CV:</b><a href="">Click for Details</a></p>
																<p><b>Website:</b><a href="https://rzaman.buet.ac.bd/">https://rzaman.buet.ac.bd/</a></p>
																<ul class="list-inline">
																	<li class="list-inline-item">
																		<a class="social-icon text-xs-center" target="_blank" href="#">
																			<i class="fa fa-facebook"></i>
																		</a>
																	</li>
																	<li class="list-inline-item">
																		<a class="social-icon text-xs-center" target="_blank" href="#">
																			<i class="fa fa-twitter"></i>
																		</a>
																	</li>
																	<li class="list-inline-item">
																		<a class="social-icon text-xs-center" target="_blank" href="#">
																			<i class="fa fa-skype"></i>
																		</a>
																	</li>
																	<li class="list-inline-item">
																		<a class="social-icon text-xs-center" target="_blank" href="#">
																			<i class="fa fa-google"></i>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div> -->
										<!-- ./Team member -->
										<!-- Team member -->
									<!--	<div class="col-xs-12 col-sm-6 col-md-4">
											<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
												<div class="mainflip">
													<div class="frontside">
														<div class="card">
															<div class="card-body text-center">
																<p><img class=" img-fluid" src="assets/images/Nishat-Sultana.png" alt="card image"></p>
																<h4 class="card-title">Nishat Sultana</h4>
																<p class="card-text">Assistant Professor (English)</p>
																<p><b>Field of Interset:</b>Twentieth-Century British and American Literature, Feminist Literature.</p>
																<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<div class="backside">
														<div class="card">
															<div class="card-body text-center mt-4">
																<h4 class="card-title">Nishat Sultana</h4>
																<p class="card-text"><b>Contact</b></p>
																<p><b>E-mail:</b><a href="">nishatsultana@hum.buet.ac.bd , nishat04@yahoo.com</a></p>
																<p>CV:<b></b><a href="">Click here for CV</a></p>
																<p><b>Website:</b><a href="https://nishatsultana.buet.ac.bd/">https://nishatsultana.buet.ac.bd</a></p>
																<ul class="list-inline">
																	<li class="list-inline-item">
																		<a class="social-icon text-xs-center" target="_blank" href="#">
																			<i class="fa fa-facebook"></i>
																		</a>
																	</li>
																	<li class="list-inline-item">
																		<a class="social-icon text-xs-center" target="_blank" href="#">
																			<i class="fa fa-twitter"></i>
																		</a>
																	</li>
																	<li class="list-inline-item">
																		<a class="social-icon text-xs-center" target="_blank" href="#">
																			<i class="fa fa-skype"></i>
																		</a>
																	</li>
																	<li class="list-inline-item">
																		<a class="social-icon text-xs-center" target="_blank" href="#">
																			<i class="fa fa-google"></i>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div> -->
										<!-- ./Team member -->
										<!-- Team member -->
									<!--	<div class="col-xs-12 col-sm-6 col-md-4">
											<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
												<div class="mainflip">
													<div class="frontside">
														<div class="card">
															<div class="card-body text-center">
																<p><img class=" img-fluid" src="assets/images/Nazmul_Islam.jpg"></p>
																<h4 class="card-title">Nazmul Islam</h4>
																<p class="card-text">Assistant Professor (Economics</p>
																<p><b>Field of Interest:</b>Macroeconomics, Inequality, Health</p>
																<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<div class="backside">
														<div class="card">
															<div class="card-body text-center mt-4">
																<h4 class="card-title">Nazmul Islam</h4>
																<p class="card-text"><b>Contact</b></p>
																<p><b>E-mail:</b><a href="">nazmulislam@hum.buet.ac.bd, nazmul786humbuet@gmail.com</a></p>
																<p><b>CV:</b><a href="">Click here for Cv</a></p>
																<p><b>Website:</b><a href="https://sites.google.com/a/fiu.edu/nazmul-islam/">https://sites.google.com/a/fiu.edu/nazmul-islam/</a></p>
																<ul class="list-inline">
																	<li class="list-inline-item">
																		<a class="social-icon text-xs-center" target="_blank" href="#">
																			<i class="fa fa-facebook"></i>
																		</a>
																	</li>
																	<li class="list-inline-item">
																		<a class="social-icon text-xs-center" target="_blank" href="#">
																			<i class="fa fa-twitter"></i>
																		</a>
																	</li>
																	<li class="list-inline-item">
																		<a class="social-icon text-xs-center" target="_blank" href="#">
																			<i class="fa fa-skype"></i>
																		</a>
																	</li>
																	<li class="list-inline-item">
																		<a class="social-icon text-xs-center" target="_blank" href="#">
																			<i class="fa fa-google"></i>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div> -->
										<!-- ./Team member -->
										<!-- Team member -->
									<!--	<div class="col-xs-12 col-sm-6 col-md-4">
											<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
												<div class="mainflip">
													<div class="frontside">
														<div class="card">
															<div class="card-body text-center">
																<p><img class=" img-fluid" src="assets/images/Dr-Sharmin-Chowdhury.jpg" alt="card image"></p>
																<h4 class="card-title">Dr. Sharmin Chowdhury</h4>
																<p class="card-text">Assistant Professor (English)</p>
																<p><b>Field of Interest:</b>Developing effective strategies for teaching English language and socio-political study of literature</p>
																<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
															</div>
														</div>
													</div>
													<div class="backside">
														<div class="card">
															<div class="card-body text-center mt-4">
																<h4 class="card-title">Dr. Sharmin Chowdhury</h4>
																<p class="card-text"><b>Contact</b></p>
																<p><b>E-mail:</b><a href="">sharmin_chowdhury@hum.buet.ac.bd , sharminchowdhurybd@gmail.com</a></p>
																<p><b>CV:</b><a href="">Click there for Cv</a></p>
																<p><b>Website:</b><a href="https://sharminchow.buet.ac.bd/">https://sharminchow.buet.ac.bd//</a></p>
																<ul class="list-inline">
																	<li class="list-inline-item">
																		<a class="social-icon text-xs-center" target="_blank" href="#">
																			<i class="fa fa-facebook"></i>
																		</a>
																	</li>
																	<li class="list-inline-item">
																		<a class="social-icon text-xs-center" target="_blank" href="#">
																			<i class="fa fa-twitter"></i>
																		</a>
																	</li>
																	<li class="list-inline-item">
																		<a class="social-icon text-xs-center" target="_blank" href="#">
																			<i class="fa fa-skype"></i>
																		</a>
																	</li>
																	<li class="list-inline-item">
																		<a class="social-icon text-xs-center" target="_blank" href="#">
																			<i class="fa fa-google"></i>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div> -->
										<!-- ./Team member -->
	 <?php }?>						
									</div>
								</div>
							</section>
							<!-- Team -->
				</div>
			</div>
		</div>
	</section>
	<section id="tchr_last">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
							<section id="team" class="pb-5">
									<div class="container">
									
										<div class="row">
											<!-- Team member -->
											<?php include('admin/db/config.php') ?>
<?php 
  $show_query="SELECT * FROM faculty_3";
  $run_show_query=mysqli_query($con,$show_query);
  while($rows=mysqli_fetch_array($run_show_query)){
    $faculty_id=$rows['ID'];
	$name=$rows['name'];
	$profession=$rows['profession'];
	$field=$rows['field'];
	$contact=$rows['contact'];
	$email=$rows['email'];
	$email2=$rows['email2'];
	$cv=$rows['cv'];
	$website=$rows['website'];
	$image=$rows['img'];

  ?>
											<div class="col-xs-12 col-sm-6 col-md-4">
												<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
													<div class="mainflip">
														<div class="frontside">
															<div class="card">
																<div class="card-body text-center">
																	<p><img class=" img-fluid" src="admin/images/<?php echo $image?>"card image"></p>
																	<h4 class="card-title"><?php echo $name?></h4>
																	<p><?php echo $profession?></p>
																	<p class="card-text"><b>Field of Interest:</b><?php echo $field?></p>
																	<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
																</div>
															</div>
														</div>
														<div class="backside">
															<div class="card">
																<div class="card-body text-center mt-4">
																	<h4 class="card-title"><?php echo $name?></h4>
																	<p class="card-text"><b>Contact:</b><?php echo $contact?></p>
																	<p><b>Email: </b><a href=""><?php echo $email?>,<br><?php echo $email2?></a></p>
																	<p><b>CV:</b><a href="<?php echo $cv?>">Click here for CV</a></p>
																	<p><b>Website: </b> <a href="<?php echo $website?>"><?php echo $website?></a></p>
																	<ul class="list-inline">
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-facebook"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-twitter"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-skype"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-google"></i>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
														</div>
													</div>
												</div>
											</div>
											<!-- ./Team member -->
											<!-- Team member -->
										<!--	<div class="col-xs-12 col-sm-6 col-md-4">
												<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
													<div class="mainflip">
														<div class="frontside">
															<div class="card">
																<div class="card-body text-center">
																	<p><img class=" img-fluid" src="assets/images/Nazmul_Huda.jpg" alt="card image"></p>
																	<h4 class="card-title">Nazmul Huda</h4>
																	<p class="card-text">Assistant Professor (Sociology)</p>
																	<p><b>Field of Interest:</b> Food Security, Non-formal Income & Occupation, Quality Education, Climate Change & Disaster Managemen</p>
																	<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
																</div>
															</div>
														</div>
														<div class="backside">
															<div class="card">
																<div class="card-body text-center mt-4">
																	<h4 class="card-title">Nazmul Huda</h4>
																	<p class="card-text"><b>Contact</b></p>
																	<p><b>E-mail:</b><a href="">hudasociology@hum.buet.ac.bd ,hudasociology@gmail.com</a></p>
																	<p><b>CV:</b><a href="">Click here for Cv</a></p>
																	<p><b>Website:</b><a href="https://hudasociology.buet.ac.bd/">https://hudasociology.buet.ac.bd/</a></p>
																	<ul class="list-inline">
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-facebook"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-twitter"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-skype"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-google"></i>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div> -->
											<!-- ./Team member -->
											<!-- Team member -->
										<!--	<div class="col-xs-12 col-sm-6 col-md-4">
												<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
													<div class="mainflip">
														<div class="frontside">
															<div class="card">
																<div class="card-body text-center">
																	<p><img class=" img-fluid" src="assets/images/Sabrina_Yousuf.jpg" alt="card image"></p>
																	<h4 class="card-title">Sabrina Yousuf</h4>
																	<p class="card-text">Lecturer (Accounting)</p>
																	<p><b>Field of Interest:</b></p>
																	<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
																</div>
															</div>
														</div>
														<div class="backside">
															<div class="card">
																<div class="card-body text-center mt-4">
																	<h4 class="card-title">Sabrina Yousuf</h4>
																	<p class="card-text"><b>Contact</b></p>
																	<p><b>E-mail:</b><a href="">sabrina15013@gmail.com , sabrinayousuf@hum.buet.ac.bd</a></p>
																	<p><b>CV:</b><a href="">Click here for CV</a></p>
																	<p><b>Website:</b><a href="https://sabrinayousuf.buet.ac.bd/">https://sabrinayousuf.buet.ac.bd//</a></p>
																	<ul class="list-inline">
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-facebook"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-twitter"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-skype"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-google"></i>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div> -->
											<!-- ./Team member -->
											<!-- Team member -->
										<!--	<div class="col-xs-12 col-sm-6 col-md-4">
												<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
													<div class="mainflip">
														<div class="frontside">
															<div class="card">
																<div class="card-body text-center">
																	<p><img class=" img-fluid" src="assets/images/Mossamat_Fariha.JPG" alt="card image"></p>
																	<h4 class="card-title">Mosammat Fariha</h4>
																	<p class="card-text">Lecturer (English)</p>
																	<p><b>Field of Interest:</b> Gender and Literature, Postcolonial Literature, Post-Feminism and ELT</p>
																	<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
																</div>
															</div>
														</div>
														<div class="backside">
															<div class="card">
																<div class="card-body text-center mt-4">
																	<h4 class="card-title">Mosammat Fariha</h4>
																	<p class="card-text"><b>Contact</b></p>
																	<p><b>E-mail:</b><a href=""> fariha@hum.buet.ac.bd , mossammat.fariha@gmail.com</a></p>
																	<p><b>CV</b><a href="">Click here for Cv</a></p>
																	<p><b>website:</b><a href="">https://fariha.buet.ac.bd//</a></p>
																	<ul class="list-inline">
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-facebook"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-twitter"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-skype"></i>
																			</a>
																		</li>
																		<li class="list-inline-item">
																			<a class="social-icon text-xs-center" target="_blank" href="#">
																				<i class="fa fa-google"></i>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div> -->
											<!-- ./Team member -->
	<?php }?>										
											<!-- Team member -->									
											
		</section>


<div class="faculty_foot">
	<div id="footer" style="background-color: #ac1f25">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="footnav">
						<nav>
							<ul>
								<li><a href="https://www.buet.ac.bd/web/">BUET Home</a></li>
								<li><a href="https://biis.buet.ac.bd">BIIS</a></li>
								<li><a href="https://webmail.buet.ac.bd">Web main</a></li>
								<li><a href="https://lib.buet.ac.bd/home/">Central Library</a></li>
							</ul>
						</nav>
					</div>

				</div>
				<div class="col-lg-6 col-sm-6 copyright">

					© 2018 - Department of Humanities, BUET<br>
					Design &amp; Developed by <a style="text-decoration: none; color: white;" target="_blank">Zahed
						Hasan</a>

				</div>
			</div>
		</div>

	</div>
</div>
	



	<script src="assets/js/3.3.1.slim.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/lightbox-plus-jquery.min.js"></script>

</body>

</html>