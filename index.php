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
<body class="hClassVv">
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<div class="phStickyWrap phVix w-100">
			<!-- pageHeader -->
		
		<?php include('header.php');?>

		</div>
		<main>
			<!-- bsSlidViv -->
			<div class="bsSlidViv">
				<div>
					<!-- introBannerBlock -->
					<article class="introBannerBlock introBannerBlockViv hdIsVix w-100 text-center text-white position-relative d-flex bgCover" style="background-image: url(images/img81.jpg);">
						<div class="ibbAlignHolder w-100 d-flex align-items-center">
							<div class="ibbHolder w-100 py-6">
								<div class="container holder position-relative">
									<div class="row">
										<div class="col-12 col-sm-10 offset-sm-1">
											<strong class="d-block fontSerif mainHeadingTitle font-weight-normal mb-5">Live Beyond All Boundaries</strong>
											<h1 class="text-white ibbHeading ibbHeadingViv mb-4 mb-lg-8">Discover the Arts at Stapita</h1>
											<a href="seller.php" class="btn btn-dark btnDarkInverse align-top btnMdMinWidth">Look Our Desings</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
				<div>
					<!-- introBannerBlock -->
					<article class="introBannerBlock introBannerBlockViv hdIsVix w-100 text-center text-white position-relative d-flex bgCover" style="background-image: url(images/img205.jpg);">
						<div class="ibbAlignHolder w-100 d-flex align-items-center">
							<div class="ibbHolder w-100 py-6">
								<div class="container holder position-relative">
									<div class="row">
										<div class="col-12 col-sm-10 offset-sm-1">
											<strong class="d-block fontSerif mainHeadingTitle font-weight-normal mb-5">Country’s #1 History Museum</strong>
											<h1 class="text-white ibbHeading ibbHeadingViv mb-4 mb-lg-8">It’s not Museum, It’s Place of Living Ideas</h1>
											<a href="#" class="btn btn-dark btnDarkInverse align-top btnMdMinWidth">Explore More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
				<div>
					<!-- introBannerBlock -->
					<article class="introBannerBlock introBannerBlockViv hdIsVix w-100 text-center text-white position-relative d-flex bgCover" style="background-image: url(images/img206.jpg);">
						<div class="ibbAlignHolder w-100 d-flex align-items-center">
							<div class="ibbHolder w-100 py-6">
								<div class="container holder position-relative">
									<div class="row">
										<div class="col-12 col-sm-10 offset-sm-1">
											<strong class="d-block fontSerif mainHeadingTitle font-weight-normal mb-5">London Based Museum Founded in 1965</strong>
											<h1 class="text-white ibbHeading ibbHeadingViv mb-4 mb-lg-8">Wonders await in Backyard Wilderness.</h1>
											<a href="#" class="btn btn-dark btnDarkInverse align-top btnMdMinWidth">Buy Ticket</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
			<!-- calloutAside -->
			<!--<aside class="calloutAside calloutAsideVvi bg-danger text-white pt-2 pb-3 pt-lg-5 pb-lg-5 text-center text-md-left">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-md-8">
							<p class="mb-0">Don’t miss the event! Look at the Calender for the upcoming exhibitions.</p>
						</div>
						<div class="col-12 col-md-4 d-md-flex align-items-md-start justify-content-md-end">
							<a href="single-artist.php" class="btn btn-dark btnDarkInverse align-top btnMdMinWidth mt-4 mt-md-0" tabindex="0">Upcoming Events</a>
						</div>
					</div>
				</div>
			</aside>-->
			<!-- currExhibitionBlock -->
			<section class="currExhibitionBlock pt-6 pb-1 pt-md-9 pb-md-4 pt-lg-14 pb-lg-12 pt-xl-20 pb-xl-16">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-3">
							<!-- headHeading -->
							<header class="headHeading text-center text-lg-left mb-7">
								<h2 class="h2Medium mb-5">Our Best Seller</h2>
								<div class="hhFzMedium hhFzMediumVvi">
									<p class="mb-6">The latest Arts from Seller</p>
								</div>
								<a href="single-artist.php" class="btn btnGre5 btnGre5Outline btnMidMinWidth bdr2">See All Arts</a>
							</header>
						</div>
						<div class="col-12 col-lg-9">
							<div class="row mx-xl-n4 d-block px-7 px-sm-14 pl-lg-21 pr-lg-16 pr-xlwd-0 pt-2">
								<!-- currOnviewSliderII -->
								<div class="currOnviewSliderII">
									<div>
										<div class="col-12 px-xl-4">
											<!-- currExibitColumn -->
											<article class="currExibitColumn mb-6 mx-auto">
												<div class="imgHolder mb-3 mb-lg-7">
													<a href="single-artist.php">
														<img src="images/img02.jpg" class="img-fluid w-100 d-block" alt="image description">
													</a>
												</div>
												<h2 class="mb-3">
													<a href="single-artist.php">Mutiny: Works by Géricault</a>
												</h2>
												<time datetime="2011-01-12" class="d-block cecTime text-gray777">13 Oct 2018 - 15 Feb 2019</time>
											</article>
										</div>
									</div>
									<div>
										<div class="col-12 px-xl-4">
											<!-- currExibitColumn -->
											<article class="currExibitColumn mb-6 mx-auto">
												<div class="imgHolder mb-3 mb-lg-7">
													<a href="single-artist.php">
														<img src="images/img03.jpg" class="img-fluid w-100 d-block" alt="image description">
													</a>
												</div>
												<h2 class="mb-3">
													<a href="single-artist.php">Palileo Descent VR with tim Creek</a>
												</h2>
												<time datetime="2011-01-12" class="d-block cecTime text-gray777">Open 12:30 - 1:00 Daily</time>
											</article>
										</div>
									</div>
									<div>
										<div class="col-12 px-xl-4">
											<!-- currExibitColumn -->
											<article class="currExibitColumn mb-6 mx-auto">
												<div class="imgHolder mb-3 mb-lg-7">
													<a href="single-artist.php">
														<img src="images/img101.jpg" class="img-fluid w-100 d-block" alt="image description">
													</a>
												</div>
												<h2 class="mb-3">
													<a href="single-artist.php">Michel Wernar Gallery</a>
												</h2>
												<time datetime="2011-01-12" class="d-block cecTime text-gray777">25 Oct 2018 - 10 May 2019</time>
											</article>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		
			<aside class="timetableAside bgCover position-relative pt-5 pb-5 pt-md-9 pb-md-9 pt-lg-12 pb-lg-13 pt-xl-22 pb-xl-22" style="background-image: url(images/img84.jpg);">
				<div class="container">
					<!-- ttaHolderBox -->
					<div class="ttaHolderBox position-relative rounded-lg bg-white mx-auto text-center px-6 pt-6 pb-6 px-lg-10 pt-lg-9 pb-lg-10">
						<h3 class="mb-4">Our Designs</h3>
						<p class="mb-7">Designs</p>
						<a href="shop.php" class="btn btn-danger btnMidMinWidth">See Our All Designs</a>
					</div>
				</div>
			</aside>
			<!-- upcomingEveBlock -->
			<section class="upcomingEveBlock pt-6 pb-6 pt-md-9 pb-md-9 pt-lg-13 pb-lg-14 pt-xl-20 pb-xl-20">
				<div class="container">
					<!-- topHeadingHead -->
					<header class="topHeadingHead text-center mb-7 mb-lg-11">
						<h1>Recent Arts</h1>
					</header>
					<div class="row justify-content-center">
						<div class="col-12 col-md-6 col-lg-4">
							<!-- ueEveColumn -->
							<article class="ueEveColumn ueEveColumnIsRed w-100 position-relative border text-gray777 gridView mb-6 mx-auto mx-md-0">
								<time datetime="2011-01-12" class="ueecTimeTag position-absolute text-uppercase d-flex bg-white text-secondary">
									<strong class="day d-flex align-items-center font-weight-normal bg-danger text-white px-1">01</strong>
									<span class="d-flex align-items-center px-2">MAR 2023</span>
								</time>
								<div class="imgHolder flex-shrink-0">
									<img src="images/img72.jpg" class="w-100 h-100 imgFit" alt="image description">
								</div>
								<div class="descrWrap pt-5 pb-6 pl-3 pr-3 pl-xl-5 pr-xl-5">
									<strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-3">Description</strong>
									<h2 class="h2Small h2SmallViv mb-2">
										<a href="shop.php">Description</a>
									</h2>
									<address class="mb-6"><time datetime="2011-01-12"></time><span></span>Description</address>
									<a href="single-product.php" class="btn btnGre5 btnGre5Outline bdr2 mb-1 btnSmMinWidth btn-sm">Details</a>
								</div>
							</article>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<!-- ueEveColumn -->
							<article class="ueEveColumn ueEveColumnIsRed w-100 position-relative border text-gray777 gridView mb-6 mx-auto mx-md-0">
								<time datetime="2011-01-12" class="ueecTimeTag position-absolute text-uppercase d-flex bg-white text-secondary">
									<strong class="day d-flex align-items-center font-weight-normal bg-danger text-white px-1">03</strong>
									<span class="d-flex align-items-center px-2">MAR 2013</span>
								</time>
								<div class="imgHolder flex-shrink-0">
									<img src="images/img12.jpg" class="w-100 h-100 imgFit" alt="image description">
								</div>
								<div class="descrWrap pt-5 pb-6 pl-3 pr-3 pl-xl-5 pr-xl-5">
									<strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-3">Special Event</strong>
									<h2 class="h2Small h2SmallViv mb-2">
										<a href="shop.php">Description</a>
									</h2>
									<address class="mb-6"><time datetime="2011-01-12">Description</time><span></span></address>
									<div class="btnsWrap d-flex flex-wrap mx-n1">
										<a href="shop.php" class="btn btnGre5 btnGre5Outline mb-1 bdr2 btnSmMinWidth btn-sm mx-1">Details</a>
										
									</div>
								</div>
							</article>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<!-- ueEveColumn -->
							<article class="ueEveColumn ueEveColumnIsRed w-100 position-relative border text-gray777 gridView mb-6 mx-auto mx-md-0">
								<time datetime="2011-01-12" class="ueecTimeTag position-absolute text-uppercase d-flex bg-white text-secondary">
									<strong class="day d-flex align-items-center font-weight-normal bg-danger text-white px-1">08</strong>
									<span class="d-flex align-items-center px-2">MAR 2019</span>
								</time>
								<div class="imgHolder flex-shrink-0">
									<img src="images/img74.jpg" class="w-100 h-100 imgFit" alt="image description">
								</div>
								<div class="descrWrap pt-5 pb-6 pl-3 pr-3 pl-xl-5 pr-xl-5">
									<strong class="catagoryTitle d-block font-weight-normal text-uppercase mb-3"></strong>
									<h2 class="h2Small h2SmallViv mb-2">
										<a href="shop.php">Description</a>
									</h2>
									<address class="mb-6"><time datetime="2011-01-12"></time><span></span>Description</address>
									<div class="btnsWrap d-flex flex-wrap mx-n1">
									<a href="single-product.php" class="btn btnGre5 btnGre5Outline mb-1 bdr2 btnSmMinWidth btn-sm mx-1"><center>Details</center></a>
											
									</div>
								</div>
							</article>
						</div>
					</div>
					<!-- btnHolder -->
					<footer class="btnHolder text-center pt-lg-4">
						<a href="single-product.php" class="d-inline-block align-top teeSeeAllBtn mt-2">See All Events <i class="icomoon-arrowCircleRight align-middle icn ml-1"><span class="sr-only">icon</span></i></a>
					</footer>
				</div>
			</section>
			<!-- supportMuseumBlock -->
			<article class="supportMuseumBlock position-relative bg-secondary text-gray888 pt-7 pb-7 pt-md-9 pb-md-9 pt-lg-13 pb-lg-14 pt-xl-20 pb-xl-22">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6 position-static">
							<div class="imgHolder mb-6 mb-md-0">
								<img src="images/img85.jpg" class="img-fluid w-100 h-100 imgFit" alt="image description">
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="pl-md-6 pl-lg-13">
								<h2 class="h2Medium text-white mb-4">Support The Seller</h2>
								<!-- eabDescrText -->
								<div class="eabDescrText">
									<p class="mb-6">We use our unique collections and unrivalled expertise to tackle the biggest challenges facing the world today and welcome more than five million visitors annually.</p>
									<ul class="list-unstyled bulletList bulletListII isBgDark bulletListViv">
										<li>Become a Member</li>
										<li>Give Donation</li>
										<li>Join as Volunteer</li>
									</ul>
									<a href="about.php" class="btn btn-danger btnMdMinWidth mt-6">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</article>
			<!-- onlineShopBlock -->
			<section class="onlineShopBlock pt-6 pb-6 pt-md-9 pb-md-9 pt-lg-11 pb-lg-12 pt-xl-21 pb-xl-19">
				<div class="container">
					<!-- topHeadingHead -->
					<header class="topHeadingHead text-center mb-7 mb-lg-12">
						<strong class="tpHeadingTitle text-uppercase font-weight-normal d-block mb-4">New Arrivals</strong>
						<h1>Seller Online Store</h1>
					</header>
					<div class="row">


	 <?php

 $product  = mysqli_query($con,"select * from `design` order by c_date desc limit 4;")or die(mysqli_error($con));

       while($product1 = mysqli_fetch_array($product))

                        {

                        ?>

						<div class="col-12 col-sm-6 col-lg-3">
							<!-- shopItemColumn -->
							<article class="shopItemColumn position-relative mb-6 mx-auto">
								<div class="imgHolder position-relative mb-4 overflow-hidden">
									<a href="single_product.php?id=<?php echo $product1['id'];?>">
										<img src="images/seller/<?php echo $product1['image']?>" class="img-fluid w-100" alt="image description">
									</a>
									<a href="single_product.php?id=<?php echo $product1['id'];?>" class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Buy Now</a>
								</div>
								<h3 class="mb-2">
									<a href="single_product.php?id=<?php echo $product1['id'];?>"><?php echo $product1['p_name']?></a>
								</h3>
								<h4 class="fontBase">₹<?php echo $product1['price']?></h4>
							</article>
						</div>
						
						<?php } ?> 

					</div>
					<!-- btnHolder -->
					<footer class="btnHolder text-center pt-5">
						<a href="shop.php" class="btn btnGre5 btnGre5Outline bdr2 btnMidMinWidth">Explore the Shop</a>
					</footer>
				</div>
			</section>
			<!-- visitorsSayBlock -->
			<section class="visitorsSayBlock bg-grayf8f8f8 hasBdr pt-7 pb-7 pt-lg-14 pb-lg-13 pt-xl-20 pb-xl-19">
				<div class="container">
					<!-- topHeadingHead -->
					<header class="topHeadingHead text-center mb-6 mb-lg-11">
						<h1>What Our Visitors Say!</h1>
					</header>
					<div class="row d-block px-sm-16 px-xlwd-0">
						<!-- vsQuoteSlider -->
						<div class="vsQuoteSlider vsQuoteSliderII">
							<div>
								<div class="col-12">
									<!-- vsQuote -->
									<blockquote class="vsQuote text-gray777 mb-0 pl-12 bg-white pl-xl-22 pr-11 pt-6 pt-xl-10 pb-4 pb-xl-8 position-relative">
										<q class="d-block mb-4">We provide programs for young people that build motivation, so I decided to arrange a party for them Everything went smoothly, and all the kids were very much excited!</q>
										<cite class="d-flex align-items-center">
											<span class="rounded-circle vsqImage d-block flex-shrink-0 mr-3">
												<img src="images/img54.jpg" class="rounded-circle img-fluid" alt="image description">
											</span>
											<span class="citeWrap d-block">
												<strong class="d-block font-weight-normal fontSerif text-capitalize text-secondary mb-1">Gregory Benford - <span class="text-gray777">Visitor</span></strong>
												<span class="ratingStarListSpan d-flex">
													<span class="rslsItem d-block">
														<i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
													</span>
													<span class="rslsItem d-block">
														<i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
													</span>
													<span class="rslsItem d-block">
														<i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
													</span>
													<span class="rslsItem d-block">
														<i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
													</span>
													<span class="rslsItem d-block">
														<i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
													</span>
												</span>
											</span>
										</cite>
									</blockquote>
								</div>
							</div>
							<div>
								<div class="col-12">
									<!-- vsQuote -->
									<blockquote class="vsQuote text-gray777 mb-0 pl-12 bg-white pl-xl-22 pr-11 pt-6 pt-xl-10 pb-4 pb-xl-8 position-relative">
										<q class="d-block mb-4">My girl loves this place! I have heard so many positive things about the arts and when we finally arrived here, it all happened to be true! Thank you for the amazing works!</q>
										<cite class="d-flex align-items-center">
											<span class="rounded-circle vsqImage d-block flex-shrink-0 mr-3">
												<img src="images/img55.jpg" class="rounded-circle img-fluid" alt="image description">
											</span>
											<span class="citeWrap d-block">
												<strong class="d-block font-weight-normal fontSerif text-capitalize text-secondary mb-1">Leando Dalvincy - <span class="text-gray777">Visitor</span></strong>
												<span class="ratingStarListSpan d-flex">
													<span class="rslsItem d-block">
														<i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
													</span>
													<span class="rslsItem d-block">
														<i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
													</span>
													<span class="rslsItem d-block">
														<i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
													</span>
													<span class="rslsItem d-block">
														<i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
													</span>
													<span class="rslsItem d-block">
														<i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
													</span>
												</span>
											</span>
										</cite>
									</blockquote>
								</div>
							</div>
							<div>
								<div class="col-12">
									<!-- vsQuote -->
									<blockquote class="vsQuote text-gray777 mb-0 pl-12 bg-white pl-xl-22 pr-11 pt-6 pt-xl-10 pb-4 pb-xl-8 position-relative">
										<q class="d-block mb-4">We provide programs for young people that build motivation, so I decided to arrange a party for them Everything went smoothly, and all the kids were very much excited!</q>
										<cite class="d-flex align-items-center">
											<span class="rounded-circle vsqImage d-block flex-shrink-0 mr-3">
												<img src="images/img54.jpg" class="rounded-circle img-fluid" alt="image description">
											</span>
											<span class="citeWrap d-block">
												<strong class="d-block font-weight-normal fontSerif text-capitalize text-secondary mb-1">Gregory Benford - <span class="text-gray777">Visitor</span></strong>
												<span class="ratingStarListSpan d-flex">
													<span class="rslsItem d-block">
														<i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
													</span>
													<span class="rslsItem d-block">
														<i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
													</span>
													<span class="rslsItem d-block">
														<i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
													</span>
													<span class="rslsItem d-block">
														<i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
													</span>
													<span class="rslsItem d-block">
														<i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
													</span>
												</span>
											</span>
										</cite>
									</blockquote>
								</div>
							</div>
							<div>
								<div class="col-12">
									<!-- vsQuote -->
									<blockquote class="vsQuote text-gray777 mb-0 pl-12 bg-white pl-xl-22 pr-11 pt-6 pt-xl-10 pb-4 pb-xl-8 position-relative">
										<q class="d-block mb-4">My girl loves this place! I have heard so many positive things about the arts and when we finally arrived here, it all happened to be true! Thank you for the amazing works!</q>
										<cite class="d-flex align-items-center">
											<span class="rounded-circle vsqImage d-block flex-shrink-0 mr-3">
												<img src="images/img55.jpg" class="rounded-circle img-fluid" alt="image description">
											</span>
											<span class="citeWrap d-block">
												<strong class="d-block font-weight-normal fontSerif text-capitalize text-secondary mb-1">Leando Dalvincy - <span class="text-gray777">Visitor</span></strong>
												<span class="ratingStarListSpan d-flex">
													<span class="rslsItem d-block">
														<i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
													</span>
													<span class="rslsItem d-block">
														<i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
													</span>
													<span class="rslsItem d-block">
														<i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
													</span>
													<span class="rslsItem d-block">
														<i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
													</span>
													<span class="rslsItem d-block">
														<i class="fas fa-star text-yellowClr5"><span class="sr-only">icon</span></i>
													</span>
												</span>
											</span>
										</cite>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ourGalleryBlock -->
			<section class="ourGalleryBlock pt-6 pt-md-8 pt-lg-12">
				<div class="container">
					<!-- topHeadingHead -->
					<header class="topHeadingHead text-center mb-6 mb-lg-13">
						<h2 class="h2Medium">See Our Gallery</h2>
					</header>
				</div>
				<div class="container-fluid px-0">
					<div class="row no-gutters d-block">
						<!-- gallerySlider -->
						<div class="gallerySlider">
							<div>
								<div class="col-12 px-0">
									<!-- galFig -->
									<figure class="galFig galFigII mb-0 position-relative mx-auto mx-md-0">
										<a data-fancybox="gallery" href="images/img46.jpg">
											<img src="images/img46.jpg" class="img-fluid" alt="image description">
										</a>
										<div class="gafCaption inaccessible d-flex align-items-center justify-content-center text-center text-white w-100 h-100">
											<div class="wrap w-100 p-4">
												<i class="rounded-circle icnWrap icomoon-search bg-brown d-flex align-items-center justify-content-center mx-auto mb-2"><span class="sr-only">icon</span></i>
												<h3 class="text-white mb-0">Germanian Grothery</h3>
											</div>
										</div>
									</figure>
								</div>
							</div>
							<div>
								<div class="col-12 px-0">
									<!-- galFig -->
									<figure class="galFig galFigII mb-0 position-relative mx-auto mx-md-0">
										<a data-fancybox="gallery" href="images/img47.jpg">
											<img src="images/img47.jpg" class="img-fluid" alt="image description">
										</a>
										<div class="gafCaption inaccessible d-flex align-items-center justify-content-center text-center text-white w-100 h-100">
											<div class="wrap w-100 p-4">
												<i class="rounded-circle icnWrap icomoon-search bg-brown d-flex align-items-center justify-content-center mx-auto mb-2"><span class="sr-only">icon</span></i>
												<h3 class="text-white mb-0">Germanian Grothery</h3>
											</div>
										</div>
									</figure>
								</div>
							</div>
							<div>
								<div class="col-12 px-0">
									<!-- galFig -->
									<figure class="galFig galFigII mb-0 position-relative mx-auto mx-md-0">
										<a data-fancybox="gallery" href="images/img48.jpg">
											<img src="images/img48.jpg" class="img-fluid" alt="image description">
										</a>
										<div class="gafCaption inaccessible d-flex align-items-center justify-content-center text-center text-white w-100 h-100">
											<div class="wrap w-100 p-4">
												<i class="rounded-circle icnWrap icomoon-search bg-brown d-flex align-items-center justify-content-center mx-auto mb-2"><span class="sr-only">icon</span></i>
												<h3 class="text-white mb-0">Germanian Grothery</h3>
											</div>
										</div>
									</figure>
								</div>
							</div>
							<div>
								<div class="col-12 px-0">
									<!-- galFig -->
									<figure class="galFig galFigII mb-0 position-relative mx-auto mx-md-0">
										<a data-fancybox="gallery" href="images/img49.jpg">
											<img src="images/img49.jpg" class="img-fluid" alt="image description">
										</a>
										<div class="gafCaption inaccessible d-flex align-items-center justify-content-center text-center text-white w-100 h-100">
											<div class="wrap w-100 p-4">
												<i class="rounded-circle icnWrap icomoon-search bg-brown d-flex align-items-center justify-content-center mx-auto mb-2"><span class="sr-only">icon</span></i>
												<h3 class="text-white mb-0">Germanian Grothery</h3>
											</div>
										</div>
									</figure>
								</div>
							</div>
							<div>
								<div class="col-12 px-0">
									<!-- galFig -->
									<figure class="galFig galFigII mb-0 position-relative mx-auto mx-md-0">
										<a data-fancybox="gallery" href="images/img50.jpg">
											<img src="images/img50.jpg" class="img-fluid" alt="image description">
										</a>
										<div class="gafCaption inaccessible d-flex align-items-center justify-content-center text-center text-white w-100 h-100">
											<div class="wrap w-100 p-4">
												<i class="rounded-circle icnWrap icomoon-search bg-brown d-flex align-items-center justify-content-center mx-auto mb-2"><span class="sr-only">icon</span></i>
												<h3 class="text-white mb-0">Germanian Grothery</h3>
											</div>
										</div>
									</figure>
								</div>
							</div>
							<div>
								<div class="col-12 px-0">
									<!-- galFig -->
									<figure class="galFig galFigII mb-0 position-relative mx-auto mx-md-0">
										<a data-fancybox="gallery" href="images/img51.jpg">
											<img src="images/img51.jpg" class="img-fluid" alt="image description">
										</a>
										<div class="gafCaption inaccessible d-flex align-items-center justify-content-center text-center text-white w-100 h-100">
											<div class="wrap w-100 p-4">
												<i class="rounded-circle icnWrap icomoon-search bg-brown d-flex align-items-center justify-content-center mx-auto mb-2"><span class="sr-only">icon</span></i>
												<h3 class="text-white mb-0">Germanian Grothery</h3>
											</div>
										</div>
									</figure>
								</div>
							</div>
							<div>
								<div class="col-12 px-0">
									<!-- galFig -->
									<figure class="galFig galFigII mb-0 position-relative mx-auto mx-md-0">
										<a data-fancybox="gallery" href="images/img52.jpg">
											<img src="images/img52.jpg" class="img-fluid" alt="image description">
										</a>
										<div class="gafCaption inaccessible d-flex align-items-center justify-content-center text-center text-white w-100 h-100">
											<div class="wrap w-100 p-4">
												<i class="rounded-circle icnWrap icomoon-search bg-brown d-flex align-items-center justify-content-center mx-auto mb-2"><span class="sr-only">icon</span></i>
												<h3 class="text-white mb-0">Germanian Grothery</h3>
											</div>
										</div>
									</figure>
								</div>
							</div>
							<div>
								<div class="col-12 px-0">
									<!-- galFig -->
									<figure class="galFig galFigII mb-0 position-relative mx-auto mx-md-0">
										<a data-fancybox="gallery" href="images/img53.jpg">
											<img src="images/img53.jpg" class="img-fluid" alt="image description">
										</a>
										<div class="gafCaption inaccessible d-flex align-items-center justify-content-center text-center text-white w-100 h-100">
											<div class="wrap w-100 p-4">
												<i class="rounded-circle icnWrap icomoon-search bg-brown d-flex align-items-center justify-content-center mx-auto mb-2"><span class="sr-only">icon</span></i>
												<h3 class="text-white mb-0">Germanian Grothery</h3>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<!-- ftAreaWrap -->
		<?php include('footer.php') ?>
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