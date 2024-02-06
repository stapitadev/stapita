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
	<title>Stapita</title>
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
		
<?php include('header.php')?>

		</div>
		<main>
			<!-- mainHeadingHead -->
			<header class="mainHeadingHead position-relative bgCover w-100 d-flex text-white" style="background-image: url(images/img113.jpg);">
				<div class="mhhAlignHolder d-flex w-100 align-items-center position-relative">
					<div class="container py-6">
						<h1 class="text-white mb-0">About Us</h1>
					</div>
				</div>
			</header>
	
			<!-- ourMissionBlock -->
			<article class="ourMissionBlock pt-6 pt-md-9 pb-3 pt-lg-12 pb-lg-5 pt-xl-20 pb-xl-10">
				<div class="container">
					<div class="row">
						<div class="col-10 offset-1 col-md-8 offset-md-2">
							<!-- headingHead -->
							<header class="headingHead mb-6 mb-md-10 mb-lg-16 mb-xl-23">
								<h1 class="mb-4 text-center">Our Mission</h1>
								<!-- eabDescrText -->
								<div class="eabDescrText eabDescrTextII text-gray888 fontSerif">
									<p class="mb-5 mb-lg-9">Founded in 1965 as an educational institution based in london, The Art & History Museum is committed to producing distinctive exhibitions and public programming events.</p>
								</div>
								<!-- eabDescrText -->
								<div class="eabDescrText eabDescrTextIV">
									<p>The Institute of Art & History museum collects, preserves, and interprets works of art of the highest quality, representing the world’s diverse artistic traditions, for the inspiration and education of the public and in accordance with our profession’s highest ethical standards and practices. Back in 2001, Baltimore was one gritty city when it came tohighest ethical standards and practices.</p>
								</div>
							</header>
						</div>
					</div>
					<div class="row mx-xl-n4">
						<div class="col-12 col-md-6 px-xl-4">
							<!-- onImageColumn -->
							<figure class="onImageColumn onImageColumnLarge mb-6 mb-xl-8">
								<a href="javascript:void(0);">
									<img src="images/img110.jpg" class="img-fluid w-100 h-100 imgFit" alt="image description">
								</a>
							</figure>
						</div>
						<div class="col-12 col-md-6 px-xl-4">
							<!-- onImageColumn -->
							<figure class="onImageColumn mb-6 mb-xl-8">
								<a href="javascript:void(0);">
									<img src="images/img111.jpg" class="img-fluid w-100 h-100 imgFit" alt="image description">
								</a>
							</figure>
							<!-- onImageColumn -->
							<figure class="onImageColumn mb-6 mb-xl-8">
								<a href="javascript:void(0);">
									<img src="images/img112.jpg" class="img-fluid w-100 h-100 imgFit" alt="image description">
								</a>
							</figure>
						</div>
					</div>
				</div>
			</article>
			<!-- ourHistoryBlack -->
			<article class="ourHistoryBlack pt-4 pb-4 pb-lg-7 pb-xl-11">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
							<!-- headingHead -->
							<header class="headingHead text-center mb-7 mb-lg-12">
								<h1>Our History</h1>
								<div class="eabDescrText eabDescrTextII fontSerif text-gray888">
									<p>Back in 2001, Baltimore was one gritty city when it came to highest ethical standards and practices.</p>
								</div>
							</header>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-md-8 offset-md-2">
							<!-- historyList -->
							<ul class="list-unstyled historyList px-xl-4 mb-0">
								<li>
									<time datetime="2011-01-12" class="text-secondary flex-shrink-0 pt-1 mr-5">1965 - 1988</time>
									<p>Pommy ipsum therewith nutter well chuffed apple and pears wedding tackle balderdash toad in the whole one feels that wind up Union Jack doolally bloke.</p>
								</li>
								<li>
									<time datetime="2011-01-12" class="text-secondary flex-shrink-0 pt-1 mr-5">1988 - 1990</time>
									<p>Mozzarella pepper jack cut the cheese. Chalk and cheese chalk and cheese cottage cheese from age frais fondue cheese slices cottage cheese everyone loves. </p>
								</li>
								<li>
									<time datetime="2011-01-12" class="text-secondary flex-shrink-0 pt-1 mr-5">1990 - 2000</time>
									<p>Traction direct mailing pivot termsheet success metrics release beta branding agile development technology innovator.</p>
								</li>
								<li>
									<time datetime="2011-01-12" class="text-secondary flex-shrink-0 pt-1 mr-5">2000 - 2009</time>
									<p>Boursin smelly cheese emmental. Fromage who moved my cheese airedale blue castello everyone loves pecorino rubber cheese roquefort. Cheese and biscuits swiss fromage cheese and wine halloumi brie.</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</article>
			<!-- liveCounterBlock -->
			<section class="liveCounterBlock hasBdr bg-grayf8f8f8 bg-secondary text-center pt-8 pb-1 pt-lg-12 pb-lg-3 pt-xl-20 pb-xl-10">
				<div class="container">
					<!-- lcbContList -->
					<ul class="list-unstyled lcbContList mb-0 d-flex flex-wrap">
						<li>
							<span class="icnWrap d-flex align-items-center mb-4">
								<span class="w-100 d-block">
									<img src="images/icn10.svg" class="img-fluid" width="56" height="58" alt="icon">
								</span>
							</span>
							<h3 class="fontBase counter mb-4">248</h3>
							<h4>Over Organized Exhibitions</h4>
						</li>
						<li>
							<span class="icnWrap d-flex align-items-center mb-4">
								<span class="w-100 d-block">
									<img src="images/icn11.svg" class="img-fluid" width="49" height="58" alt="icon">
								</span>
							</span>
							<h3 class="fontBase counter mb-4">300</h3>
							<h4>Unique Objects Around the World</h4>
						</li>
						<li>
							<span class="icnWrap d-flex align-items-center mb-4">
								<span class="w-100 d-block">
									<img src="images/icn12.svg" class="img-fluid" width="54" height="58" alt="icon">
								</span>
							</span>
							<h3 class="fontBase counter mb-4">78</h3>
							<h4>Multi media Exhibitions with a Guide</h4>
						</li>
						<li>
							<span class="icnWrap d-flex align-items-center mb-4">
								<span class="w-100 d-block">
									<img src="images/icn13.svg" class="img-fluid" width="36" height="58" alt="icon">
								</span>
							</span>
							<h3 class="fontBase counter mb-4">4560</h3>
							<h4>Tickets Sold by our Organization</h4>
						</li>
					</ul>
				</div>
			</section>
			<!-- queryCalloutBlock -->
			<aside class="queryCalloutBlock text-center d-flex w-100">
				<div class="qcbHolder d-flex align-items-center w-100 py-6">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3">
								<h2 class="h2Medium mb-5">Any Queries? <br>Give us a call at (617) 789-4563</h2>
								<div class="px-md-14">
									<p class="mb-5 mb-lg-9">We are always here to help the needy peoples any where in the world.</p>
								</div>
								<a href="contact.php" class="btn btn-outline-secondary btnMidMinWidth bdr2">Contact Now</a>
							</div>
						</div>
					</div>
				</div>
			</aside>
		</main>
		
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