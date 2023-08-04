<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from caketheme.com/html/mojuri/shop-grid-left.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 08:43:57 GMT -->
<head>
		<!-- Meta Data -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>@yield('title','Shop')</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="media/favicon.png">
		
		<!-- Dependency Styles -->
		<link rel="stylesheet" href="{{ asset('client/libs/bootstrap/css/bootstrap.min.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('client/libs/feather-font/css/iconfont.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('client/libs/icomoon-font/css/icomoon.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('client/libs/font-awesome/css/font-awesome.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('client/libs/wpbingofont/css/wpbingofont.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('client/libs/elegant-icons/css/elegant.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('client/libs/slick/css/slick.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('client/libs/slick/css/slick-theme.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('client/libs/mmenu/css/mmenu.min.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('client/libs/slider/css/jslider.css') }}">

		<!-- Site Stylesheet -->
		<link rel="stylesheet" href="{{ asset('client/assets/css/app.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('client/assets/css/responsive.css') }}" type="text/css">
		
		<!-- Google Web Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">
	</head>
	
	<body class="shop">
		<div id="page" class="hfeed page-wrapper">
			<header id="site-header" class="site-header header-v1">
				<div class="header-mobile">
					<div class="section-padding">
						<div class="section-container">
							<div class="row">
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-left">
									<div class="navbar-header">
										<button type="button" id="show-megamenu" class="navbar-toggle"></button>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 header-center">
									<div class="site-logo">
										<a href="">
											<img width="400" height="79" src="{{ asset('client/media/logo-white.png') }}" alt="Mojuri – Jewelry Store HTML Template" />
										</a>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-right">
									<div class="mojuri-topcart dropdown">
										<div class="dropdown mini-cart top-cart">
											<div class="remove-cart-shadow"></div>
											<a class="dropdown-toggle cart-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<div class="icons-cart"><i class="icon-large-paper-bag"></i><span class="cart-count">2</span></div>
											</a>
											<div class="dropdown-menu cart-popup">
												<div class="cart-empty-wrap">
													<ul class="cart-list">
														<li class="empty">
															<span>No products in the cart.</span>
															<a class="go-shop" href="shop-grid-left.html">GO TO SHOP<i aria-hidden="true" class="arrow_right"></i></a>
														</li>
													</ul>
												</div>
												<div class="cart-list-wrap">
													<ul class="cart-list ">
														<li class="mini-cart-item">
															<a href="#" class="remove" title="Remove this item"><i class="icon_close"></i></a>
															<a href="shop-details.html" class="product-image"><img width="600" height="600" src="{{ asset('client/media/product/3.jpg') }}" alt=""></a>
															<a href="shop-details.html" class="product-name">Twin Hoops</a>		
															<div class="quantity">Qty: 1</div>
															<div class="price">$150.00</div>
														</li>
														<li class="mini-cart-item">
															<a href="#" class="remove" title="Remove this item"><i class="icon_close"></i></a>													
															<a href="shop-details.html" class="product-image"><img width="600" height="600" src="{{ asset('client/media/product/1.jpg') }}" alt=""></a>
															<a href="shop-details.html" class="product-name">Medium Flat Hoops</a>
															<div class="quantity">Qty: 1</div>
															<div class="price">$100.00</div>						
														</li>
													</ul>
													<div class="total-cart">
														<div class="title-total">Total: </div>
														<div class="total-price"><span>$250.00</span></div>
													</div>
													<div class="free-ship">
														<div class="title-ship">Buy <strong>$400</strong> more to enjoy <strong>FREE Shipping</strong></div>
														<div class="total-percent"><div class="percent" style="width:20%"></div></div>
													</div>
													<div class="buttons">
														<a href="shop-cart.html" class="button btn view-cart btn-primary">View cart</a>
														<a href="shop-checkout.html" class="button btn checkout btn-default">Check out</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="header-mobile-fixed">
						<!-- Shop -->
						<div class="shop-page">
							<a href="shop-grid-left.html"><i class="wpb-icon-shop"></i></a>
						</div>

						<!-- Login -->
						<div class="my-account">
							<div class="login-header">
								<a href="page-my-account.html"><i class="wpb-icon-user"></i></a>
							</div>
						</div>

						<!-- Search -->
						<div class="search-box">
							<div class="search-toggle"><i class="wpb-icon-magnifying-glass"></i></div>
						</div>

						<!-- Wishlist -->
						<div class="wishlist-box">
							<a href="shop-wishlist.html"><i class="wpb-icon-heart"></i></a>
						</div>
					</div>
				</div>

				<div class="header-desktop">
					<div class="header-wrapper">
						<div class="section-padding">
							<div class="section-container large p-l-r">
								<div class="row">
									<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 header-left">
										<div class="site-logo">
											<a href="{{ route('client.home') }}">
												<img width="400" height="140" src="{{ asset('client/media/logo.png') }}" alt="Mojuri – Jewelry Store HTML Template" />
											</a>
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-center header-center">
										<div class="site-navigation">
											<nav id="main-navigation">
												<ul id="menu-main-menu" class="menu">
													<li class="level-0 menu-item menu-item-has-children current-menu-item">
														<a href="{{ route('client.home') }}">Home</a>
													</li>
													<li class="level-0 menu-item menu-item-has-children">
														<a href="shop-grid-left.html"><span class="menu-item-text">Shop</span></a>
														<ul class="sub-menu">
															<li class="level-1 menu-item menu-item-has-children">
																<a href="shop-grid-left.html"><span class="menu-item-text">Shop - Products</span></a>
																<ul class="sub-menu">
																	<li>
																		<a href="shop-grid-left.html"><span class="menu-item-text">Shop Grid - Left Sidebar</span></a>
																	</li>
																	<li>
																		<a href="shop-list-left.html"><span class="menu-item-text">Shop List - Left Sidebar</span></a>
																	</li>
																	<li>
																		<a href="shop-grid-right.html"><span class="menu-item-text">Shop Grid - Right Sidebar</span></a>
																	</li>
																	<li>
																		<a href="shop-list-right.html"><span class="menu-item-text">Shop List - Right Sidebar</span></a>
																	</li>
																	<li>
																		<a href="shop-grid-fullwidth.html"><span class="menu-item-text">Shop Grid - No Sidebar</span></a>
																	</li>
																</ul>
															</li>
															<li>
																<a href="shop-details.html"><span class="menu-item-text">Shop Details</span></a>
															</li>
															<li>
																<a href="shop-cart.html"><span class="menu-item-text">Shop - Cart</span></a>
															</li>
															<li>
																<a href="shop-checkout.html"><span class="menu-item-text">Shop - Checkout</span></a>
															</li>
															<li>
																<a href="shop-wishlist.html"><span class="menu-item-text">Shop - Wishlist</span></a>
															</li>
														</ul>
													</li>
													<li class="level-0 menu-item menu-item-has-children mega-menu mega-menu-fullwidth align-center">
														<a href="blog-grid-left.html"><span class="menu-item-text">Blog</span></a>
														<div class="sub-menu">
															<div class="row">
																<div class="col-md-5">
																	<div class="menu-section">
																		<h2 class="sub-menu-title">Blog Category</h2>
																		<ul class="menu-list">
																			<li>
																				<a href="blog-grid-left.html"><span class="menu-item-text">Blog Grid - Left Sidebar</span></a>
																			</li>
																			<li>
																				<a href="blog-grid-right.html"><span class="menu-item-text">Blog Grid - Right Sidebar</span></a>
																			</li>
																			<li>
																				<a href="blog-list-left.html"><span class="menu-item-text">Blog List - Left Sidebar</span></a>
																			</li>
																			<li>
																				<a href="blog-list-right.html"><span class="menu-item-text">Blog List - Right Sidebar</span></a>
																			</li>
																			<li>
																				<a href="blog-grid-fullwidth.html"><span class="menu-item-text">Blog Grid - No Sidebar</span></a>
																			</li>
																		</ul>
																	</div>

																	<div class="menu-section">
																		<h2 class="sub-menu-title">Blog Details</h2>
																		<ul class="menu-list">
																			<li>
																				<a href="blog-details-left.html"><span class="menu-item-text">Blog Details - Left Sidebar</span></a>
																			</li>
																			<li>
																				<a href="blog-details-right.html"><span class="menu-item-text">Blog Details - Right Sidebar</span></a>
																			</li>
																			<li>
																				<a href="blog-details-fullwidth.html"><span class="menu-item-text">Blog Details - No Sidebar</span></a>
																			</li>
																		</ul>
																	</div>
																</div>
																<div class="col-md-7">
																	<div class="menu-section">
																		<h2 class="sub-menu-title">Recent Posts</h2>
																		<div class="block block-posts recent-posts p-t-5">
																			<ul class="posts-list">
																				<li class="post-item">
																					<a href="blog-details-right.html" class="post-image">
																						<img src="{{ asset('client/media/blog/1.jpg') }}">
																					</a>
																					<div class="post-content">
																						<h2 class="post-title">
																							<a href="blog-details-right.html">
																								Bridial Fair Collections 2023
																							</a>
																						</h2>
																						<div class="post-time">
																							<span class="post-date">May 30, 2022</span>
																							<span class="post-comment">4 Comments</span>
																						</div>
																					</div>
																				</li>
																				<li class="post-item">
																					<a href="blog-details-right.html" class="post-image">
																						<img src="{{ asset('client/media/blog/2.jpg') }}">
																					</a>
																					<div class="post-content">
																						<h2 class="post-title">
																							<a href="blog-details-right.html">
																								Our Sterling Silver
																							</a>
																						</h2>
																						<div class="post-time">
																							<span class="post-date">Aug 24, 2022</span>
																							<span class="post-comment">2 Comments</span>
																						</div>
																					</div>
																				</li>
																				<li class="post-item">
																					<a href="blog-details-right.html" class="post-image">
																						<img src="{{ asset('client/media/blog/3.jpg') }}">
																					</a>
																					<div class="post-content">
																						<h2 class="post-title">
																							<a href="blog-details-right.html">
																								Kitchen Inspired On Japanese
																							</a>
																						</h2>
																						<div class="post-time">
																							<span class="post-date">Dec 06, 2022</span>
																							<span class="post-comment">1 Comment</span>
																						</div>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="level-0 menu-item menu-item-has-children">
														<a href="#"><span class="menu-item-text">Pages</span></a>
														<ul class="sub-menu">
															<li>
																<a href="page-login.html"><span class="menu-item-text">Login / Register</span></a>
															</li>
															<li>
																<a href="page-forgot-password.html"><span class="menu-item-text">Forgot Password</span></a>
															</li>
															<li>
																<a href="page-my-account.html"><span class="menu-item-text">My Account</span></a>
															</li>
															<li>
																<a href="page-about.html"><span class="menu-item-text">About Us</span></a>
															</li>
															<li>
																<a href="page-contact.html"><span class="menu-item-text">Contact</span></a>
															</li>
															<li>
																<a href="page-faq.html"><span class="menu-item-text">FAQ</span></a>
															</li>
															<li>
																<a href="page-404.html"><span class="menu-item-text">Page 404</span></a>
															</li>
														</ul>
													</li>
													<li class="level-0 menu-item">
														<a href="page-contact.html"><span class="menu-item-text">Contact</span></a>
													</li>
												</ul>
											</nav>
										</div>
									</div>

									<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 header-right">
										<div class="header-page-link">
											<!-- Search -->
											<div class="search-box">
												<div class="search-toggle"><i class="icon-search"></i></div>
											</div>

											<!-- Login -->
											<div class="login-header icon">
												<a class="active-login" href="#"><i class="icon-user"></i></a>
												<div class="form-login-register">
													<div class="box-form-login">
														<div class="active-login"></div>
														<div class="box-content">
															<div class="form-login active">
																<form id="login_ajax" method="post" class="login">
																	<h2>Sign in</h2>
																	<p class="status"></p>
																	<div class="content">
																		<div class="username">
																			<input type="text" required="required" class="input-text" name="username" id="username" placeholder="Your name"/>
																		</div>
																		<div class="password">
																			<input class="input-text" required="required" type="password" name="password" id="password" placeholder="Password"/>
																		</div>
																		<div class="rememberme-lost">
																			<div class="rememberme">
																				<input name="rememberme" type="checkbox" id="rememberme" value="forever"/>
																				<label for="rememberme" class="inline">Remember me</label>
																			</div>
																			<div class="lost_password">
																				<a href="forgot-password.html">Lost your password?</a>
																			</div>
																		</div>
																		<div class="button-login">
																			<input type="submit" class="button" name="login" value="Login"/>
																		</div>
																		<div class="button-next-reregister">Create An Account</div>
																	</div>						
																</form>
															</div>
															<div class="form-register">
																<form method="post" class="register">
																	<h2>REGISTER</h2>
																	<div class="content">
																		<div class="email">
																			<input type="email" class="input-text" placeholder="Email" name="email" id="reg_email" value=""/>
																		</div>
																		<div class="password">
																			<input type="password" class="input-text" placeholder="Password" name="password" id="reg_password"/>
																		</div>															
																		<div class="button-register">
																			<input type="submit" class="button" name="register" value="Register"/>
																		</div>
																		<div class="button-next-login">Already has an account</div>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!-- Wishlist -->
											<div class="wishlist-box">
												<a href="{{ route('client.carts.index') }}"><i class="icon-large-paper-bag"><span class="count-wishlist" id="productCountCart">{{ $countProductInCart }}</span></i></a>
												
											</div>
											
											<!-- Cart -->
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</header>
			

			<div id="site-main" class="site-main">
                @yield('content')
            </div>

			@include('Client.Layout.footer')
		</div>

	
		<!-- Page Loader -->
		<div class="page-preloader">
	    	<div class="loader">
	    		<div></div>
	    		<div></div>
	    	</div>
	    </div>

		<!-- Dependency Scripts -->
		@include('Client.Layout.javascript')
	</body>

<!-- Mirrored from caketheme.com/html/mojuri/shop-grid-left.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 08:44:00 GMT -->
</html>