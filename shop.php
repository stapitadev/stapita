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
			<header class="mainHeadingHead position-relative bgCover w-100 d-flex text-white" style="background-image: url(images/img146.jpg);">
				<div class="mhhAlignHolder d-flex w-100 align-items-center position-relative">
					<div class="container py-6">
						<h1 class="text-white mb-0">Shop</h1>
					</div>
				</div>
			</header>
			<!-- shopContentBlock -->
			<section class="shopContentBlock pt-7 pb-7 pb-md-9 pt-lg-10 pb-lg-14 pt-xl-16 pb-xl-22">
				<div class="container">
					<!-- sorterHead -->
					<header class="sorterHead text-center text-md-left text-gray777 mb-7 mb-md-10">
						<div class="row align-items-md-center">
							<div class="col-12 col-md-8">
								<p class="m-2 m-md-0">Showing 1-16 of 20 Products</p>
							</div>
							<div class="col-12 col-md-4 text-md-right">
								<select class="chosenSelect csSelect" data-placeholder="Default Shorting">
									<option value="1">A-Z</option>
									<option value="2">Z-A</option>
								</select>
							</div>
						</div>
					</header>
					<div class="row">


	 <?php

 $product  = mysqli_query($con,"select * from `design`")or die(mysqli_error($con));

       while($product1 = mysqli_fetch_array($product))

                        {

                        ?>

						<div class="col-12 col-sm-6 col-lg-3">
							<!-- 	shopItemColumn -->
							<article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
								<div class="imgHolder position-relative mb-4 overflow-hidden">
									<a href="single_product.php?id=<?php echo $product1['id']; ?>">
										<img src="images/seller/<?php echo $product1['image'] ?>" class="img-fluid w-100" alt="image description">
									</a>
									<a href="single_product.php?id=<?php echo $product1['id'];?>" class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Buy Now</a>
								</div>
								<h3 class="mb-2">
									<a href="single_product.php?id=<?php echo $product1['id']; ?>"><?php echo $product1['p_name']; ?></a>
								</h3>
								<h4 class="fontBase">₹<?php echo $product1['price']; ?></h4>
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