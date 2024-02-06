<?php 

session_start();
error_reporting('0');
 include('admin/config.php');

 ?>

<!DOCTYPE html>
<html lang="en">


<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the page title -->
	<title>Stapits</title>
	<!-- inlcude google archivo & lora font cdn link -->
	<link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;family=Lora:ital,wght@0,400;0,700;1,400;1,700&amp;family=Muli:ital@0;1&amp;family=Merriweather&amp;display=swap" rel="stylesheet">
	<!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="style.css">
	<!-- include the site responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body>
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<div class="phStickyWrap phVii w-100">
			<!-- pageHeader -->
			
<?php include('header.php');?>

		</div>
		<main>
			<!-- exhibitionBlock -->
			<section class="exhibitionBlock pt-6 pb-6 pt-md-9 pb-md-9 pt-lg-11 pb-lg-13 pt-xl-21 pb-xl-22">
				<div class="container">
					<!-- topHeadingHead -->
					<header class="topHeadingHead text-center mb-4">
						<div class="row">
							<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
								<h1 class="h1Large mb-4">Collections</h1>
								<!-- eabDescrText -->
								<div class="fontSerif eabDescrText eabDescrTextII">
									<p>This sub content title section you can add you real content whatever.</p>
								</div>
							</div>
						</div>
						<!-- exhiTabList -->
						<ul class="nav nav-tabs justify-content-center exhiTabList exhiTabListIII mt-4 mt-lg-8 pb-8" role="tablist">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false">Artist <i class="fas fa-angle-down icn"><span class="sr-only">icon</span></i></a>
								<!-- fltDropdown -->
								<div class="dropdown-menu py-0 bg-secondary fltDropdown">
									<a class="dropdown-item" id="current-tab" data-toggle="tab" href="#current" role="tab" aria-controls="current" aria-selected="true">Ghada Amer &amp; Reza (22)</a>
									<a class="dropdown-item" id="upcoming-tab" data-toggle="tab" href="#upcoming" role="tab" aria-selected="true">Beom Kim (13)</a>
									<a class="dropdown-item" id="past-tab" data-toggle="tab" href="#past" role="tab" aria-selected="true">Tan Swie Hian (12)</a>
									<a class="dropdown-item" href="javascript:void(0);">Navin Rawanchaikul (5)</a>
									<a class="dropdown-item" href="javascript:void(0);">Donald Sultan (7)</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false">Location <i class="fas fa-angle-down icn"><span class="sr-only">icon</span></i></a>
								<!-- fltDropdown -->
								<div class="dropdown-menu py-0 bg-secondary fltDropdown">
									<a class="dropdown-item" href="javascript:void(0);">Ghada Amer &amp; Reza (22)</a>
									<a class="dropdown-item" href="javascript:void(0);">Beom Kim (13)</a>
									<a class="dropdown-item" href="javascript:void(0);">Tan Swie Hian (12)</a>
									<a class="dropdown-item" href="javascript:void(0);">Navin Rawanchaikul (5)</a>
									<a class="dropdown-item" href="javascript:void(0);">Donald Sultan (7)</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false">Period <i class="fas fa-angle-down icn"><span class="sr-only">icon</span></i></a>
								<!-- fltDropdown -->
								<div class="dropdown-menu py-0 dropdown-menu-right bg-secondary fltDropdown">
									<a class="dropdown-item" href="javascript:void(0);">Ghada Amer &amp; Reza (22)</a>
									<a class="dropdown-item" href="javascript:void(0);">Beom Kim (13)</a>
									<a class="dropdown-item" href="javascript:void(0);">Tan Swie Hian (12)</a>
									<a class="dropdown-item" href="javascript:void(0);">Navin Rawanchaikul (5)</a>
									<a class="dropdown-item" href="javascript:void(0);">Donald Sultan (7)</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false">Type <i class="fas fa-angle-down icn"><span class="sr-only">icon</span></i></a>
								<!-- fltDropdown -->
								<div class="dropdown-menu py-0 dropdown-menu-right bg-secondary fltDropdown">
									<a class="dropdown-item" href="javascript:void(0);">Ghada Amer &amp; Reza (22)</a>
									<a class="dropdown-item" href="javascript:void(0);">Beom Kim (13)</a>
									<a class="dropdown-item" href="javascript:void(0);">Tan Swie Hian (12)</a>
									<a class="dropdown-item" href="javascript:void(0);">Navin Rawanchaikul (5)</a>
									<a class="dropdown-item" href="javascript:void(0);">Donald Sultan (7)</a>
								</div>
							</li>
						</ul>
					</header>
					<!-- sorterHead -->
					<header class="sorterHead text-center text-md-left text-gray777 mb-8">
						<div class="row align-items-md-center">
							<div class="col-12 col-md-8">
								<p class="m-2 m-md-0">Showing 12 Art Works</p>
							</div>
							<div class="col-12 col-md-4 text-md-right">
								<select class="chosenSelect csSelect csSelectSmall" data-placeholder="Default Shorting">
									<option value="1">Germany</option>
									<option value="2">ipsum</option>
									<option value="3">dolor</option>
								</select>
							</div>
						</div>
					</header>
					<!-- tab-content -->
					<div class="tab-content">
						<!-- current-tab -->
						<div class="tab-pane fade show active" id="current" role="tabpanel" aria-labelledby="current-tab">
							<!-- makeItMasonery -->
							<div class="row makeItMasonery mx-xl-n4">
								<div class="col-12 col-sm-6 col-md-4 mimItem px-xl-4">
									<!-- collectionColumn -->
									<article class="collectionColumn mb-6 mb-xl-8 text-center position-relative">
										<div class="imgHolder">
											<a href="single-works.php">
												<img src="images/img04.jpg" class="img-fluid w-100 d-block" alt="image description">
												<div class="ccCaption position-absolute bg-white d-flex align-items-center justify-content-center">
													<div class="w-100 py-3 px-3">
														<h2 class="fzMedium mb-4">Daniel Henry Khanweiler autumn, 1930</h2>
														<h3 class="fontAlter text-gray777 mb-0">Henry Merparlo</h3>
													</div>
												</div>
											</a>
										</div>
									</article>
								</div>
								<div class="col-12 col-sm-6 col-md-4 mimItem px-xl-4">
									<!-- collectionColumn -->
									<article class="collectionColumn mb-6 mb-xl-8 text-center position-relative">
										<div class="imgHolder">
											<a href="single-works.php">
												<img src="images/img05.jpg" class="img-fluid w-100 d-block" alt="image description">
												<div class="ccCaption position-absolute bg-white d-flex align-items-center justify-content-center">
													<div class="w-100 py-3 px-3">
														<h2 class="fzMedium mb-4">Daniel Henry Khanweiler autumn, 1930</h2>
														<h3 class="fontAlter text-gray777 mb-0">Henry Merparlo</h3>
													</div>
												</div>
											</a>
										</div>
									</article>
								</div>
								<div class="col-12 col-sm-6 col-md-4 mimItem px-xl-4">
									<!-- collectionColumn -->
									<article class="collectionColumn mb-6 mb-xl-8 text-center position-relative">
										<div class="imgHolder">
											<a href="single-works.php">
												<img src="images/img07.jpg" class="img-fluid w-100 d-block" alt="image description">
												<div class="ccCaption position-absolute bg-white d-flex align-items-center justify-content-center">
													<div class="w-100 py-3 px-3">
														<h2 class="fzMedium mb-4">Daniel Henry Khanweiler autumn, 1930</h2>
														<h3 class="fontAlter text-gray777 mb-0">Henry Merparlo</h3>
													</div>
												</div>
											</a>
										</div>
									</article>
								</div>
								<div class="col-12 col-sm-6 col-md-4 mimItem px-xl-4">
									<!-- collectionColumn -->
									<article class="collectionColumn mb-6 mb-xl-8 text-center position-relative">
										<div class="imgHolder">
											<a href="single-works.php">
												<img src="images/img08.jpg" class="img-fluid w-100 d-block" alt="image description">
												<div class="ccCaption position-absolute bg-white d-flex align-items-center justify-content-center">
													<div class="w-100 py-3 px-3">
														<h2 class="fzMedium mb-4">Daniel Henry Khanweiler autumn, 1930</h2>
														<h3 class="fontAlter text-gray777 mb-0">Henry Merparlo</h3>
													</div>
												</div>
											</a>
										</div>
									</article>
								</div>
								<div class="col-12 col-sm-6 col-md-4 mimItem px-xl-4">
									<!-- collectionColumn -->
									<article class="collectionColumn mb-6 mb-xl-8 text-center position-relative">
										<div class="imgHolder">
											<a href="single-works.php">
												<img src="images/img16.jpg" class="img-fluid w-100 d-block" alt="image description">
												<div class="ccCaption position-absolute bg-white d-flex align-items-center justify-content-center">
													<div class="w-100 py-3 px-3">
														<h2 class="fzMedium mb-4">Daniel Henry Khanweiler autumn, 1930</h2>
														<h3 class="fontAlter text-gray777 mb-0">Henry Merparlo</h3>
													</div>
												</div>
											</a>
										</div>
									</article>
								</div>
								<div class="col-12 col-sm-6 col-md-4 mimItem px-xl-4">
									<!-- collectionColumn -->
									<article class="collectionColumn mb-6 mb-xl-8 text-center position-relative">
										<div class="imgHolder">
											<a href="single-works.php">
												<img src="images/img14.jpg" class="img-fluid w-100 d-block" alt="image description">
												<div class="ccCaption position-absolute bg-white d-flex align-items-center justify-content-center">
													<div class="w-100 py-3 px-3">
														<h2 class="fzMedium mb-4">Daniel Henry Khanweiler autumn, 1930</h2>
														<h3 class="fontAlter text-gray777 mb-0">Henry Merparlo</h3>
													</div>
												</div>
											</a>
										</div>
									</article>
								</div>
								<div class="col-12 col-sm-6 col-md-4 mimItem px-xl-4">
									<!-- collectionColumn -->
									<article class="collectionColumn mb-6 mb-xl-8 text-center position-relative">
										<div class="imgHolder">
											<a href="single-works.php">
												<img src="images/img06.jpg" class="img-fluid w-100 d-block" alt="image description">
												<div class="ccCaption position-absolute bg-white d-flex align-items-center justify-content-center">
													<div class="w-100 py-3 px-3">
														<h2 class="fzMedium mb-4">Daniel Henry Khanweiler autumn, 1930</h2>
														<h3 class="fontAlter text-gray777 mb-0">Henry Merparlo</h3>
													</div>
												</div>
											</a>
										</div>
									</article>
								</div>
								<div class="col-12 col-sm-6 col-md-4 mimItem px-xl-4">
									<!-- collectionColumn -->
									<article class="collectionColumn mb-6 mb-xl-8 text-center position-relative">
										<div class="imgHolder">
											<a href="single-works.php">
												<img src="images/img15.jpg" class="img-fluid w-100 d-block" alt="image description">
												<div class="ccCaption position-absolute bg-white d-flex align-items-center justify-content-center">
													<div class="w-100 py-3 px-3">
														<h2 class="fzMedium mb-4">Daniel Henry Khanweiler autumn, 1930</h2>
														<h3 class="fontAlter text-gray777 mb-0">Henry Merparlo</h3>
													</div>
												</div>
											</a>
										</div>
									</article>
								</div>
							</div>
							<div class="btnHolder text-center pt-6">
								<a href="single-works.php" class="btn laodMore btn-outline-light bdr2 btnMidMinWidth">Load More</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<!-- ftAreaWrap -->
	
<?php include('footer.php');?>

	</div>
	<!-- include jQuery library -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<!-- include bootstrap popper JavaScript -->
	<script src="js/popper.min.js"></script>
	<!-- include bootstrap JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<!-- include custom JavaScript -->
	<script src="js/jqueryCustom.js"></script>
	<!-- include fontawesome kit -->
	<script src="../../../kit.fontawesome.com/391f644c42.js"></script>
</body>

</html>