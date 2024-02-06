<?php 

session_start();
error_reporting('0');
 include('admin/config.php');

 $a_id=$_GET['id'];



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

	 <?php

 $seller  = mysqli_query($con,"select * from `seller_login` where `id`='$a_id'")or die(mysqli_error($con));

       while($seller1 = mysqli_fetch_array($seller))

                        { 

//echo $seller1['name'];

                        

                        ?>

			<!-- mainHeadingHead -->
			<header class="mainHeadingHead position-relative bgCover w-100 d-flex text-white" style="background-image: url(images/img163.jpg);">
				<div class="mhhAlignHolder d-flex w-100 align-items-center position-relative">
					<div class="container py-6">
						<h1 class="text-white mb-0"><?php echo $seller1['name']; ?></h1>
					</div>
				</div>
			</header>
			<!-- saContentBlock -->
			<article class="saContentBlock pt-6 pt-md-9 pt-lg-13 pt-xl-20">
				<div class="container">
					<div class="row mx-xl-n6">
						<div class="col-12 col-md-6 px-xl-6">
							<div class="imgHolder shadow mb-6 mb-md-0 mt-md-2">
								<img src="images/seller/<?php echo $seller1['image']; ?>" class="img-fluid w-100" alt="image description">
							</div>
						</div>
						<div class="col-12 col-md-6 px-xl-6">
							<h1 class="mb-2"><?php echo $seller1['name']; ?></h1>
							<div class="text-gray777">
								<p class="mb-5 mb-md-7"><?php echo $seller1['des']; ?> <br><a href="tel:+61235118954" class="textDecorationNone colorInherit">+61 23511 8954</a> / <a href="javascript:void(0);" class="textDecorationNone colorInherit">E-mail</a></p>
							</div>
							<!-- eabDescrText -->
							<div class="eabDescrText eabDescrTextII fontSerif">
								<p class="mb-6"><?php echo $seller1['description1']; ?></p>
							</div>
							
						</div>
					</div>
				</div>
			</article>
			<div class="container">
				<hr class="my-3 my-md-5 my-xl-9">
			</div>
			<!-- worksMasBlock -->
			
<section class="shopContentBlock pt-7 pb-7 pb-md-9 pt-lg-10 pb-lg-14 pt-xl-16 pb-xl-22">
				<div class="container">
					<!-- sorterHead -->
					<header class="sorterHead text-center text-md-left text-gray777 mb-7 mb-md-10">
						<h1>Some of Works</h1>
					</header>
					<div class="row">


	 <?php

 $product  = mysqli_query($con,"select * from `design` where `s_id`='$a_id'")or die(mysqli_error($con));

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

		<?php } ?>
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