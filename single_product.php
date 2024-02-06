<?php 

session_start();
error_reporting('0');
 include('admin/config.php');

  $e_id = $_GET['id'];

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
			<!-- productContentBlock -->
			<article class="productContentBlock pt-7 pt-md-9 pt-lg-13 pt-xl-20">
					<div class="container">

	 <?php

 $product  = mysqli_query($con,"select * from `design` where `id`=$e_id")or die(mysqli_error($con));

       while($product1 = mysqli_fetch_array($product))

                        {



?>

					<div class="row mb-9 mb-lg-12 mb-xl-19">
						<div class="col-12 col-md-6 d-flex pt-2">
							<!-- prSliderWrap -->
							<div class="order-2 prSliderWrap mb-7 mb-md-0">
								<!-- singleProductSlider -->
								<div class="singleProductSlider">
									<div>
										<div class="imgHolder position-relative">
											<img src="images/seller/<?php echo $product1['image'] ?>" class="img-fluid w-100" alt="image description">
											<a href="javascript:void(0);" class="btnZoom position-absolute textDecorationNone rounded-circle d-flex align-items-center justify-content-center">
												<i class="icomoon-search"><span class="sr-only">icon</span></i>
											</a>
										</div>
									</div>
									<div>
										<div class="imgHolder position-relative">
											<img src="images/seller/<?php echo $product1['image'] ?>" class="img-fluid w-100" alt="image description">
											<a href="javascript:void(0);" class="btnZoom position-absolute textDecorationNone rounded-circle d-flex align-items-center justify-content-center">
												<i class="icomoon-search"><span class="sr-only">icon</span></i>
											</a>
										</div>
									</div>
									<div>
										<div class="imgHolder position-relative">
											<img src="images/seller/<?php echo $product1['image'] ?>" class="img-fluid w-100" alt="image description">
											<a href="javascript:void(0);" class="btnZoom position-absolute textDecorationNone rounded-circle d-flex align-items-center justify-content-center">
												<i class="icomoon-search"><span class="sr-only">icon</span></i>
											</a>
										</div>
									</div>
									<div>
										<div class="imgHolder position-relative">
											<img src="images/seller/<?php echo $product1['image'] ?>" class="img-fluid w-100" alt="image description">
											<a href="javascript:void(0);" class="btnZoom position-absolute textDecorationNone rounded-circle d-flex align-items-center justify-content-center">
												<i class="icomoon-search"><span class="sr-only">icon</span></i>
											</a>
										</div>
									</div>
									<div>
										<div class="imgHolder position-relative">
											<img src="images/seller/<?php echo $product1['image'] ?>" class="img-fluid w-100" alt="image description">
											<a href="javascript:void(0);" class="btnZoom position-absolute textDecorationNone rounded-circle d-flex align-items-center justify-content-center">
												<i class="icomoon-search"><span class="sr-only">icon</span></i>
											</a>
										</div>
									</div>
									<div>
										<div class="imgHolder position-relative">
											<img src="images/seller/<?php echo $product1['image'] ?>" class="img-fluid w-100" alt="image description">
											<a href="javascript:void(0);" class="btnZoom position-absolute textDecorationNone rounded-circle d-flex align-items-center justify-content-center">
												<i class="icomoon-search"><span class="sr-only">icon</span></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- prSwitcherWrap -->
							<div class="order-1 prSwitcherWrap pr-4 my-n2 mb-7 mb-md-0">
								<!-- productSwitcherSlider -->
								<div class="productSwitcherSlider">
									<div>
										<div class="imgHolder my-2 position-relative">
											<img src="images/img155.jpg" class="img-fluid" alt="image description">
										</div>
									</div>
									<div>
										<div class="imgHolder my-2 position-relative">
											<img src="images/img156.jpg" class="img-fluid" alt="image description">
										</div>
									</div>
									<div>
										<div class="imgHolder my-2 position-relative">
											<img src="images/img157.jpg" class="img-fluid" alt="image description">
										</div>
									</div>
									<div>
										<div class="imgHolder my-2 position-relative">
											<img src="images/img155.jpg" class="img-fluid" alt="image description">
										</div>
									</div>
									<div>
										<div class="imgHolder my-2 position-relative">
											<img src="images/img156.jpg" class="img-fluid" alt="image description">
										</div>
									</div>
									<div>
										<div class="imgHolder my-2 position-relative">
											<img src="images/img157.jpg" class="img-fluid" alt="image description">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<!-- prDecriptionWrap -->
							<div class="prDecriptionWrap pl-xl-10">
								<h2 class="h2Medium mb-1"><?php echo $product1['p_name']; ?></h2>
								<div class="reViewWrap d-flex align-items-center mb-1">
									<!-- ratingStarListSpan -->
									<span class="ratingStarListSpan ratingStarListSpanII mr-2 d-flex">
										<span class="rslsItem d-block">
											<i class="fas fa-star text-brown" aria-hidden="true"><span class="sr-only">icon</span></i>
										</span>
										<span class="rslsItem d-block">
											<i class="fas fa-star text-brown" aria-hidden="true"><span class="sr-only">icon</span></i>
										</span>
										<span class="rslsItem d-block">
											<i class="fas fa-star text-brown" aria-hidden="true"><span class="sr-only">icon</span></i>
										</span>
										<span class="rslsItem d-block">
											<i class="fas fa-star text-brown" aria-hidden="true"><span class="sr-only">icon</span></i>
										</span>
										<span class="rslsItem d-block">
											<i class="fas fa-star text-brown" aria-hidden="true"><span class="sr-only">icon</span></i>
										</span>
									</span>
									(8 Customers reviews)
								</div>
								<!-- prPrice -->
								<strong class="d-block font-weight-normal prPrice text-gray777 mb-4"><?php echo $product1['price']; ?></strong>
								<p class="mb-4"><?php echo $product1['s_des']; ?></p>
								<!-- tagsWrap -->
								<!--<div class="tagsWrap d-flex text-gray777 mb-4 mb-md-8">
									<strong class="title flex-shrink-0 font-weight-normal text-secondary">Category:</strong>
									<p class="mb-0"><a href="javascript:void(0);" class="textDecorationNone colorInherit">Art</a>, <a href="javascript:void(0);" class="textDecorationNone colorInherit">Accessories</a></p>
								</div>  -->
								<!-- carterWrap -->
								<div class="carterWrap d-sm-flex mb-6 mb-md-10">
									<!-- quantity -->
									<div class="quantity position-relative mr-4 mb-3 mb-sm-0 d-inline-block">
										<input type="number" min="1" value="1">
									</div>
									<a href="javascript:void(0);" class="btn btn-secondary btnMidMinWidth text-uppercase">Buy Now</a>
								</div>
								<div class="d-flex position-relative">
									<!-- btnShare -->
									<a href="javascript:void(0);" class="btnShare text-secondary d-flex align-items-center textDecorationNone " role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-share-alt icn d-flex align-items-center justify-content-center rounded-circle text-white mr-2" aria-hidden="true"><span class="sr-only">icon</span></i>
										Share
									</a>
									<!-- shareDropMenu -->
									<div class="dropdown-menu shareDropMenu p-0">
										<a class="dropdown-item" href="javascript:void(0);">Twitter</a>
										<a class="dropdown-item" href="javascript:void(0);">Facebook</a>
										<a class="dropdown-item" href="javascript:void(0);">Pinterest</a>
										<a class="dropdown-item" href="javascript:void(0);">Email</a>
										<a class="dropdown-item" href="javascript:void(0);">Copy URL</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- exhiTabList -->
					<ul class="nav nav-tabs justify-content-center exhiTabList d-block d-sm-flex smVertical mb-0" role="tablist">
						<li class="nav-item">
							<a class="nav-link" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="false">Description</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="information-tab" data-toggle="tab" href="#information" role="tab" aria-controls="information" aria-selected="false">Additional Information</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="true">Reviews</a>
						</li>
					</ul>
					<!-- tab-content -->
					<div class="tab-content">
						<!-- description-tab -->
						<div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 col-lg-9">
									<div class="extraWrap pl-lg-14 py-4 py-md-9 pr-lg-13">
										<div class="text-gray777">
											<p><?php echo $product1['description'];?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- information-tab -->
						<div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 col-lg-9">
									<div class="extraWrap pl-lg-14 py-4 py-md-9 pr-lg-13">
										<!-- apDataTable -->
										<table class="apDataTable apDataTableIII w-100 text-gray777">
											<tbody>
												<tr>
													<td>Design1</td>
													<td><?php echo $product1['design'];?></td>
												</tr>
												<tr>
													<td>Design2</td>
													<td><?php echo $product1['design1'];?></td>
												</tr>
												<tr>
													<td>Design3</td>
													<td><?php echo $product1['design2'];?></td>
												</tr>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- reviews-tab -->
						<div class="tab-pane fade show active" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 col-lg-9">
									<div class="extraWrap pl-lg-14 py-4 py-md-9 pr-lg-13">
										<h2 class="mb-6">2 Reviews For Zerabis Caritime Mhoker</h2>
										<!-- reviewList -->
										<ul class="reviewList list-unstyled text-gray777 mb-11">
											<li>
												<!-- cmWrap -->
												<div class="cmWrap d-flex">
													<div class="imgHolder rounded-circle flex-shrink-0 mr-2 mr-md-6">
														<img src="images/img145.jpg" class="img-fluid rounded-circle" alt="image description">
													</div>
													<div class="descrWrap border px-5 pt-4 pb-2 flex-grow-1">
														<div class="d-sm-flex cmTopWrap align-items-center mb-2">
															<div class="wrap flex-grow-1 d-sm-flex align-items-center">
																<h3 class="fontBase mb-0">Beter Cobus</h3>
																<time datetime="2011-01-12" class="text-gray888 d-block d-sm-inline mb-2 mb-sm-0">June 7, 2019</time>
															</div>
															<div class="wrap flex-shrink-0">
																<!-- ratingStarListSpan -->
																<span class="ratingStarListSpan ratingStarListSpanIII d-flex">
																	<span class="rslsItem d-block">
																		<i class="fas fa-star text-secondary" aria-hidden="true"><span class="sr-only">icon</span></i>
																	</span>
																	<span class="rslsItem d-block">
																		<i class="fas fa-star text-secondary" aria-hidden="true"><span class="sr-only">icon</span></i>
																	</span>
																	<span class="rslsItem d-block">
																		<i class="fas fa-star text-secondary" aria-hidden="true"><span class="sr-only">icon</span></i>
																	</span>
																	<span class="rslsItem d-block">
																		<i class="fas fa-star text-secondary" aria-hidden="true"><span class="sr-only">icon</span></i>
																	</span>
																	<span class="rslsItem d-block">
																		<i class="fas fa-star text-secondary" aria-hidden="true"><span class="sr-only">icon</span></i>
																	</span>
																</span>
															</div>
														</div>
														<p>You only get the picture, not the person holding it, something they don’t mention in the description, now I’ve got to find my own person.</p>
													</div>
												</div>
											</li>
											<li>
												<!-- cmWrap -->
												<div class="cmWrap d-flex">
													<div class="imgHolder rounded-circle flex-shrink-0 mr-2 mr-md-6">
														<img src="images/img159.jpg" class="img-fluid rounded-circle" alt="image description">
													</div>
													<div class="descrWrap border px-5 pt-4 pb-2 flex-grow-1">
														<div class="d-sm-flex cmTopWrap align-items-center mb-2">
															<div class="wrap flex-grow-1 d-sm-flex align-items-center">
																<h3 class="fontBase mb-0">Khon Deck</h3>
																<time datetime="2011-01-12" class="text-gray888 d-block d-sm-inline mb-2 mb-sm-0">June 7, 2019</time>
															</div>
															<div class="wrap flex-shrink-0">
																<!-- ratingStarListSpan -->
																<span class="ratingStarListSpan ratingStarListSpanIII d-flex">
																	<span class="rslsItem d-block">
																		<i class="fas fa-star text-secondary" aria-hidden="true"><span class="sr-only">icon</span></i>
																	</span>
																	<span class="rslsItem d-block">
																		<i class="fas fa-star text-secondary" aria-hidden="true"><span class="sr-only">icon</span></i>
																	</span>
																	<span class="rslsItem d-block">
																		<i class="fas fa-star text-secondary" aria-hidden="true"><span class="sr-only">icon</span></i>
																	</span>
																	<span class="rslsItem d-block">
																		<i class="fas fa-star text-secondary" aria-hidden="true"><span class="sr-only">icon</span></i>
																	</span>
																	<span class="rslsItem d-block">
																		<i class="fas fa-star" aria-hidden="true"><span class="sr-only">icon</span></i>
																	</span>
																</span>
															</div>
														</div>
														<p>This is a Fantastic quality print and is happily hanging on my wall now.</p>
													</div>
												</div>
											</li>
										</ul>
										<!-- reviewForm -->
										<form action="#" class="reviewForm">
											<h2 class="mb-1">Add Review</h2>
											<div class="text-gray777">
												<p class="mb-6">Your email address will not be published. Required fields are marked&nbsp;*</p>
											</div>
											<div class="form-group position-relative mb-4 d-flex">
												<strong class="label font-weight-normal d-block flex-shrink-0 mb-0">Your Rating</strong>
												<!-- ratingWrap -->
												<div class="ratingWrap d-flex pt-1576 pt-md-2">
													<input id="5" type="radio" name="rating" class="custom-control-input" value="5">
													<label for="5" class="fas fa-star"><span class="sr-only">icon</span></label>
													<input id="4" type="radio" name="rating" class="custom-control-input" value="4">
													<label for="4" class="fas fa-star"><span class="sr-only">icon</span></label>
													<input id="3" type="radio" name="rating" class="custom-control-input" value="3">
													<label for="3" class="fas fa-star"><span class="sr-only">icon</span></label>
													<input id="2" type="radio" name="rating" class="custom-control-input" value="2">
													<label for="2" class="fas fa-star"><span class="sr-only">icon</span></label>
													<input id="1" type="radio" name="rating" class="custom-control-input" value="1" checked>
													<label for="1" class="fas fa-star"><span class="sr-only">icon</span></label>
												</div>
											</div>
											<div class="form-group position-relative mb-4 d-sm-flex">
												<label for="yr" class="label font-weight-normal d-block flex-shrink-0 mb-0">Your Review</label>
												<textarea class="form-control d-block w-100" id="yr"></textarea>
											</div>
											<div class="form-group position-relative align-items-center mb-4 d-sm-flex">
												<label for="nm" class="label font-weight-normal d-block flex-shrink-0 mb-0">Name *</label>
												<input class="form-control d-block w-100" id="nm" type="text">
											</div>
											<div class="form-group position-relative align-items-center mb-4 d-sm-flex">
												<label for="em" class="label font-weight-normal d-block flex-shrink-0 mb-0">Email *</label>
												<input class="form-control d-block w-100" id="em" type="email">
											</div>
											<input type="submit" class="btn btn-secondary ml-sm-30 mt-1 text-uppercase px-7" value="Submit">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

<?php } ?>

			</article>
			<!-- onlineShopBlock -->
			<section class="onlineShopBlock pt-3 pb-5 pt-lg-6 pb-lg-10 pt-xl-9 pb-xl-15">
				<div class="container">
					<!-- topHeadingHead -->
					<header class="topHeadingHead mb-8">
						<h2 class="h2Medium">Related Products</h2>
					</header>
					<div class="row">
						<div class="col-12 col-sm-6 col-lg-3">
							<!-- shopItemColumn -->
							<article class="shopItemColumn position-relative mb-6 mx-auto">
								<div class="imgHolder position-relative mb-4 overflow-hidden">
									<a href="javascript:void(0);">
										<img src="images/img86.jpg" class="img-fluid w-100" alt="image description">
									</a>
									<a href="javascript:void(0);" class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add to Cart</a>
								</div>
								<h3 class="mb-2">
									<a href="javascript:void(0);">Museum Jaggur Aceumale</a>
								</h3>
								<h4 class="fontBase">£67.00</h4>
							</article>
						</div>
						<div class="col-12 col-sm-6 col-lg-3">
							<!-- shopItemColumn -->
							<article class="shopItemColumn position-relative mb-6 mx-auto">
								<div class="imgHolder position-relative mb-4 overflow-hidden">
									<a href="javascript:void(0);">
										<img src="images/img87.jpg" class="img-fluid w-100" alt="image description">
									</a>
									<a href="javascript:void(0);" class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add to Cart</a>
									<strong class="prdctTag position-absolute rounded-circle bg-brown text-white d-flex align-items-center justify-content-center text-uppercase">new</strong>
								</div>
								<h3 class="mb-2">
									<a href="javascript:void(0);">Blcak Fancy Vavoom Cap</a>
								</h3>
								<h4 class="fontBase">£99.00</h4>
							</article>
						</div>
						<div class="col-12 col-sm-6 col-lg-3">
							<!-- shopItemColumn -->
							<article class="shopItemColumn position-relative mb-6 mx-auto">
								<div class="imgHolder position-relative mb-4 overflow-hidden">
									<a href="javascript:void(0);">
										<img src="images/img88.jpg" class="img-fluid w-100" alt="image description">
									</a>
									<a href="javascript:void(0);" class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add to Cart</a>
								</div>
								<h3 class="mb-2">
									<a href="javascript:void(0);">Zerabis Caritime Mhoker Art</a>
								</h3>
								<h4 class="fontBase">£51.00</h4>
							</article>
						</div>
						<div class="col-12 col-sm-6 col-lg-3">
							<!-- shopItemColumn -->
							<article class="shopItemColumn position-relative mb-6 mx-auto">
								<div class="imgHolder position-relative mb-4 overflow-hidden">
									<a href="javascript:void(0);">
										<img src="images/img89.jpg" class="img-fluid w-100" alt="image description">
									</a>
									<a href="javascript:void(0);" class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add to Cart</a>
								</div>
								<h3 class="mb-2">
									<a href="javascript:void(0);">Mia Calimao Uttliparian Plate</a>
								</h3>
								<h4 class="fontBase">£49.00</h4>
							</article>
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