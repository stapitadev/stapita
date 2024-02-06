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
	<!-- include the site landing stylesheet -->
	<link rel="stylesheet" href="css/landing.css">
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
						<h1 class="text-white mb-0">Contact Us</h1>
					</div>
				</div>
			</header>
			<!-- scrollToNav -->
			
			<!-- ourMissionBlock -->
			<article class="ourMissionBlock pt-6 pt-md-9 pb-3 pb-md-9 pt-lg-12 pb-lg-13 pt-xl-20 pb-xl-22">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-8 offset-md-2">
							<div class="px-xl-5">
								<!-- headingHead -->
								<header class="headingHead text-center">
									<h1 class="mb-3">Contact Us</h1>
									<div class="eabDescrText eabDescrTextII text-gray888 fontSerif">
										<p>We are here to help you at any time all over the world so don’t hesitate to reach us at any moment.</p>
									</div>
								</header>
							</div>
						</div>
					</div>
					<hr class="mt-5320 mb-12 mt-lg-8">
					<div class="row">
						<div class="col-12 col-md-8 order-md-2">
							<!-- contactFormWrap -->
							<div class="contactFormWrap pl-lg-8 mb-6 mb-md-0">
								<form id="contactForm" data-toggle="validator">
									<div class="form-row mx-n2">
										<div class="formCol formCol6 px-2">
											<div class="form-group mb-4">
												<input id="name" type="text" class="form-control w-100 d-block" placeholder="Name" required data-error="NEW ERROR MESSAGE">
											</div>
										</div>
										<div class="formCol formCol6 px-2">
											<div class="form-group mb-4">
												<input id="email" type="email" class="form-control w-100 d-block" placeholder="Email Address" required data-error="NEW ERROR MESSAGE">
											</div>
										</div>
										<div class="formCol formCol12 px-2">
											<div class="form-group mb-4">
												<input id="subject" type="text" class="form-control w-100 d-block" placeholder="Subject" required data-error="NEW ERROR MESSAGE">
											</div>
										</div>
										<div class="formCol formCol12 px-2">
											<div class="form-group mb-4">
												<textarea id="message" class="form-control w-100 d-block" placeholder="Write your thoughts&hellip;" required data-error="NEW ERROR MESSAGE"></textarea>
											</div>
										</div>
									</div>
									<div id="msgSubmit" class="form-message hidden"></div>
									<input id="form-submit" type="submit" class="btn btn-secondary btnMidMinWidth mt-2 text-uppercase" value="Send Message">
								</form>
							</div>
						</div>
						<div class="col-12 col-md-4 order-md-1">
							<!-- ctInfoWrap -->
							<div class="ctInfoWrap text-gray777 pt-1">
								<strong class="title h4 d-block">Opening Hours</strong>
								<p class="mb-5 mb-md-8">Open Daily 10am–5pm <br>Sunday Until 8pm.</p>
								<strong class="title h4 d-block mb-2">Contact Info</strong>
								<address class="mb-5 mb-md-9">
									<p class="mb-5">Karur</p>
									<p><a href="tel:16179876543" class="textDecorationNone">1 (617) 987-6543</a><br><a href="mailto:museum@example.org" class="textDecorationNone">abc@gmai.com</a></p>
								</address>
								<strong class="title h4 d-block mb-4">Social Connect</strong>
								<!-- socialNetworks -->
								<ul class="list-unstyled socialNetworks ctSocialNetworks d-flex flex-wrap mb-0">
									<li>
										<a href="javascript:void(0);">
											<i class="fab fa-twitter"><span class="sr-only">twitter</span></i>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<i class="fab fa-pinterest"><span class="sr-only">pinterest</span></i>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<i class="fab fa-facebook-f"><span class="sr-only">facebook</span></i>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<i class="fab fa-instagram"><span class="sr-only">instagram</span></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</article>
			<!-- saMap -->
			<!--<aside class="saMap saMapII w-100 position-relative">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3117.259425640003!2d-90.29593598438974!3d38.61991257085702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87d8b57b271310d3%3A0x53ff7568884d5d00!2sKnox%20Industrial%20Dr%2C%20St.%20Louis%2C%20MO%2063139%2C%20USA!5e0!3m2!1sen!2s!4v1587836825553!5m2!1sen!2s" class="w-100 h-100 d-block border-0 position-absolute" aria-hidden="false" tabindex="0"></iframe>
			</aside> -->
		</main>
		<!-- ftAreaWrap -->
		
<?php include('footer.php'); ?>

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