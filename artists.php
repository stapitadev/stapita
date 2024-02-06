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
		
		<?php include('header.php');?>


		</div>
		<main>
			<!-- mainHeadingHead -->
			<header class="mainHeadingHead position-relative bgCover w-100 d-flex text-white" style="background-image: url(images/img123.jpg);">
				<div class="mhhAlignHolder d-flex w-100 align-items-center position-relative">
					<div class="container py-6">
						<h1 class="text-white mb-0">Artists</h1>
					</div>
				</div>
			</header>
			<!-- ourAritstsBlock -->
			<section class="ourAritstsBlock text-center pt-6 pt-md-9 pt-lg-13 pt-xl-20 pb-4 pb-lg-8">
				<div class="container">
					<!-- headingHead -->
					<header class="headingHead mb-7 mb-md-9 mb-xl-13">
						<h1 class="h1Large">Our Artists</h1>
					</header>
					<div class="row">
	
	 <?php

 $seller  = mysqli_query($con,"select * from `seller_login`")or die(mysqli_error($con));

       while($seller1 = mysqli_fetch_array($seller))

                        {

                        ?>

												<div class="col-12 col-md-4">
							<!-- artistProfileColumn -->
							<article class="artistProfileColumn text-gray777 mb-6 mb-lg-9 mb-xl-13 mx-auto">
								<div class="imgHolder mb-6">
									<a href="single-artist.php?id=<?php  echo $seller1['id']; ?>"><img src="images/seller/<?php echo $seller1['image'];?>" class="img-fluid" alt="image description"></a>
								</div>
								<h2><?php echo $seller1['name'];?></h2>
								<h3 class="fontBase mb-2"><?php echo $seller1['description1'];?></h3>
							<!--	<p><a href="tel:+61986543210" class="textDecorationNone">+61 98654 3210</a> / <a href="javascript:void(0);">E-mail</a></p> -->
							</article>
						</div>
						
						<?php } ?>
						
					</div>
				</div>
			</section>
		</main>
		<!-- ftAreaWrap -->
		
		<?php include('footer.php')?>

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