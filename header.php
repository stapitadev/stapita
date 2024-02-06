	<header id="pageHeader" class="position-absolute w-100 bg-gray1b1d1f">
				
				<!-- hdHolder -->
				<div class="hdHolder headerFixer headerFixerII">
					<div class="container">
						<!-- navbar -->
						<nav class="navbar navbar-expand-md navbar-light d-block px-0 pt-2 pb-2 pt-md-2 pb-md-2 pt-lg-4 pb-lg-4">
							<div class="row">
								<div class="col-5 col-sm-3 col-lg-2">
									<!-- logo -->
									<div class="logo logoVii mt-lg-1">
										<a href="home.html">
											<img src="images/logo-dar.png" class="img-fluid" alt="Your Logo ">
										</a>
									</div>
								</div>
								<div class="col-7 col-sm-9 col-lg-10 position-static d-flex justify-content-end pt-lg-1">
									<!-- navbar collapse -->
									<div class="collapse navbar-collapse pageNavigationCollapse pageNavigationCollapseVii justify-content-md-end" id="pageNavigationCollapse">
										<!-- mainNavigation -->
										<ul class="navbar-nav mainNavigation mainNavigationVv text-capitalize">
											<li class="nav-item active dropdown">
												<a class="nav-link" href="index.php">Home</a>
												<!-- dropdown menu -->
												
											</li>
												<li class="nav-item dropdown">
												<a class="nav-link" href="about.php">About</a>
											
											</li>
											


											<li class="nav-item dropdown">
												<a class="nav-link" href="shop.php">Shop</a>
												<!-- dropdown menu -->
												
													
											</li>

						<li class="nav-item dropdown">
												<a class="nav-link" href="artists.php">Artists</a>
												<!-- dropdown menu -->
												
													
											</li>

										

											<li class="nav-item dropdown">
												<a class="nav-link" href="contact.php">Contact</a>
												<!-- dropdown menu -->
											
											</li>

											<?php if($_SESSION['id1']=='') {

//unset($_SESSION['id']);
//unset($_SESSION['name']);

											 ?>

											<li class="nav-item dropdown">
												<a class="nav-link" href="seller_login.php">Sell</a>
												<!-- dropdown menu -->
												
											</li>

											<?php } else { ?>

<?php if($_SESSION['id']=='') { ?>

												<li class="nav-item dropdown">
												<a class="nav-link" href="seller_account.php">Sell</a>
												<!-- dropdown menu -->
												
											</li>

										<?php }} ?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<?php if($_SESSION['id']=='' & $_SESSION['id1']=='') { ?>

											<li class="nav-item dropdown">
												<a class="nav-link" href="my-account.php"> Login / Register</a>
												<!-- dropdown menu -->
										
											</li>

<?php } else { ?>

	<?php if($_SESSION['name']) { ?>

<li class="nav-item dropdown">
												<a class="nav-link" href="my-account.php">Welcome,<?php echo $_SESSION['name']?></a>
											
									
											</li>

										<?php } else { ?>


											<li class="nav-item dropdown">
												<a class="nav-link" href="seller_account.php">Welcome,<?php echo $_SESSION['name1']?></a>
											
									
											</li>

<?php } ?>
										
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="logout.php"> logout </a>
										
							<?php } ?>		

										</ul>
									</div>
								</div>
							</div>
						</nav>
					</div>
				</div>
			<!--	<nav class="navbar navbar-light d-flex flex-column navbarSide position-fixed h-100 px-6 pt-10 pb-6 px-md-10 pb-md-10">
					<ul class="navbar-nav mainNavigation w-100 flex-grow-1 mainSideNavigation text-capitalize d-block">
						<li class="nav-item active dropdown">
							<a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
						
							<div class="dropdown-menu mndDropMenu mndDropMenuSmall p-0">
							
								<ul class="list-unstyled mnDropList mb-0">
									<li><a href="home.html">Home Default</a></li>
									<li><a href="home-classic.html">Home Classic</a></li>
									<li><a href="home-creative.html">Home Creative</a></li>
									<li><a href="home-fullscreen.html">Home FullScreen</a></li>
									<li><a href="home-exhibition.html">Home Exhibition</a></li>
									<li><a href="home-modern.html">Home Modern</a></li>
									<li><a href="home-minimal.html">Home Minimal</a></li>
									<li><a href="home-simple-boxed.html">Home Simple Boxed</a></li>
									<li><a href="home-parallax.html">Home Parallax</a></li>
									<li><a href="home-event.html">Home Event</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">What’s On</a>
						
							<div class="dropdown-menu mndDropMenu mndDropMenuSmall p-0">
							
								<ul class="list-unstyled mnDropList mb-0">
									<li class="hasDropdown">
										<a href="javascript:void(0);">Event &amp; Programs</a>
									
										<ul class="list-unstyled mnDropList mb-0">
											<li><a href="events-list.html">Event List</a></li>
											<li><a href="event-grid.html">Event Grid</a></li>
											<li><a href="event-compact.html">Event Compact</a></li>
											<li><a href="single-events.html">Single Event</a></li>
										</ul>
									</li>
									<li class="hasDropdown">
										<a href="javascript:void(0);">Exhibition</a>
									
										<ul class="list-unstyled mnDropList mb-0">
											<li><a href="exhibition-list.html">Exhibition List</a></li>
											<li><a href="exhibition-grid.html">Exhibition Grid</a></li>
											<li><a href="exhibition-compact.html">Exhibition Compact</a></li>
											<li><a href="single-exhibition.html">Exhibition Event</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seller</a>
						
							<div class="dropdown-menu mndDropMenu p-0">
							
								<ul class="list-unstyled mnDropList mb-0">
									<li>
										<a href="visit-us-block.html">Look our Designs</a>
									</li>
									<li>
										<a href="visit-us-block.html">Hours &amp; Admission</a>
									</li>
									<li>
										<a href="visit-us-block.html">Directions</a>
									</li>
									<li>
										<a href="visit-us-block.html">Accessibility</a>
									</li>
									<li>
										<a href="visit-us-block.html">Group Tours</a>
									</li>
									<li>
										<a href="visit-us-block.html">Rental</a>
									</li>
									<li>
										<a href="visit-us-block.html">Other Facilities</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
					
							<div class="dropdown-menu mndDropMenu mndDropMenuSmall p-0">
							
								<ul class="list-unstyled mnDropList mb-0">
									<li><a href="mission-history.html">Mission &amp; History</a></li>
									<li><a href="board-staff.html">On Board &amp; Staff</a></li>
									<li><a href="career.html">Career</a></li>
									<li><a href="sponsers.html">Sponsers</a></li>
									<li><a href="contact-us.html">Contact Us</a></li>
									<li><a href="membership.html">Membership</a></li>
									<li><a href="donate.html">Donate</a></li>
									<li><a href="facility-rental.html">Facility Rental</a></li>
									<li><a href="career-details.html">Career Details</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Collections</a>
						
							<div class="dropdown-menu mndDropMenu mndDropMenuSmall p-0">
							
								<ul class="list-unstyled mnDropList mb-0">
									<li><a href="collection-type-1.html">Collection Type-1</a></li>
									<li><a href="collection-type-2.html">Collection Type-2</a></li>
									<li><a href="single-works.html">Single Works</a></li>
									<li><a href="artists.html">Artists</a></li>
									<li><a href="single-artist.html">Single Artist</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
						
							<div class="dropdown-menu mndDropMenu mndDropMenuSmall p-0">
							
								<ul class="list-unstyled mnDropList mb-0">
									<li class="hasDropdown">
										<a href="javascript:void(0);">News</a>
									
										<ul class="list-unstyled mnDropList mb-0">
											<li><a href="news-grid.html">News Grid</a></li>
											<li><a href="news-list.html">News Grid W/S</a></li>
											<li><a href="news-classic.html">News Classic</a></li>
											<li><a href="single-post.html">Single Post</a></li>
										</ul>
									</li>
									<li class="hasDropdown">
										<a href="javascript:void(0);">Shop</a>
									
										<ul class="list-unstyled mnDropList mb-0">
											<li><a href="shop.html">Shop</a></li>
											<li><a href="single-product.html">Single Product</a></li>
											<li><a href="cart.html">Cart</a></li>
											<li><a href="checkout.html">Checkout</a></li>
										</ul>
									</li>
									<li class="hasDropdown">
										<a href="javascript:void(0);">Image Gallery</a>
									
										<ul class="list-unstyled mnDropList mb-0">
											<li><a href="image-gallery.html">Image Gallery</a></li>
											<li><a href="gallery-grid.html">Gallery Grid</a></li>
											<li><a href="gallery-masonry.html">Gallery Masonry</a></li>
											<li><a href="gallery-caption.html">Gallery Caption</a></li>
											<li><a href="gallery-fullwidth.html">Gallery Fullwidth</a></li>
										</ul>
									</li>
									<li><a href="venues.html">Venues</a></li>
									<li><a href="faq.html">Faq</a></li>
									<li><a href="my-account.html">My Account</a></li>
									<li><a href="404-page.html">404 Error</a></li>
								</ul>
							</div>
						</li>
					</ul>
					<div class="nvbBottomWrap w-100 flex-shrink-0 text-gray888 pt-10 pb-1">
						<address class="mb-0">
							<p>
								<a href="tel:16179876543" class="colorInherit textDecorationNone">1 (617) 987-6543</a>
								<br>
								<a href="mailto:info@museumwp.com" class="colorInherit textDecorationNone">info@museumwp.com</a>
							</p>
							<ul class="list-unstyled socialNetworks ftSocialNetworks ftSocialNetworksVix d-flex flex-wrap mb-2 mt-11">
								<li>
									<a href="javascript:void(0);">
										<i class="fab fa-twitter" aria-hidden="true"><span class="sr-only">twitter</span></i>
									</a>
								</li>
								<li>
									<a href="javascript:void(0);">
										<i class="fab fa-pinterest" aria-hidden="true"><span class="sr-only">pinterest</span></i>
									</a>
								</li>
								<li>
									<a href="javascript:void(0);">
										<i class="fab fa-facebook-f" aria-hidden="true"><span class="sr-only">facebook</span></i>
									</a>
								</li>
								<li>
									<a href="javascript:void(0);">
										<i class="fab fa-instagram" aria-hidden="true"><span class="sr-only">instagram</span></i>
									</a>
								</li>
							</ul>
							<ul class="list-unstyled ftTermLinks ftTermLinksVix d-flex flex-wrap mb-0">
								<li>
									<a href="javascript:void(0);">Privacy Policy</a>
								</li>
								<li>
									<a href="javascript:void(0);">Terms of Use</a>
								</li>
							</ul>
						</address>
					</div>
					<a href="javascript:void(0);" class="hdMenuOpener hdSideMenuOpener position-absolute">
						<span class="icnBar position-absolute"><span class="sr-only">menu</span></span>
					</a>
				</nav> -->
			</header>