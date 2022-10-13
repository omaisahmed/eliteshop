<!DOCTYPE html>
<?php 
session_start();
?>

<html>
<head>
<title>Elite Shop</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header -->
<div class="header" id="home">
	<div class="container">
		<ul>
		    <li> <a href="#" data-toggle="modal" data-target="#myModal" id="link1"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
			<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
			<li><i class="fa fa-phone" aria-hidden="true"></i> Call : 021-35035543</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@wmomiti.com<">info@wmomiti.com</a></li>
		<div class="dropdown"> <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">    <input type="hidden" ><?php echo $_SESSION["name"]; ?>                    
                                <i class="glyphicon glyphicon-user"></i>
                                                               <b class="caret"></b></a>
                                <ul class="dropdown-menu" style="background-color: white;">
                                 
                                    <li><a href="logout-main.php"  style="background-color: white;color: black;">Logout</a></li>
                                </ul>
                            </li></div>
                        </ul>

	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="searchresult.php" method="get">
					<input type="search" name="search" placeholder="Search here..." required="" name="search">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="index.php"><span>E</span>lite Shop</a></h1>
			</div>
        <!-- header-bot -->
		<div class="col-md-4 agileits-social top_content">
						<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						                                   <li class="share">Share On : </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>



		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item"><a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="about.php">About</a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Men's wear <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.php"><img src="images/top2.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="mens.php">Clothing</a></li>
											<li><a href="mens.php">Wallets</a></li>
											<li><a href="mens.php">Footwear</a></li>
											<li><a href="mens.php">Watches</a></li>
											<li><a href="mens.php">Accessories</a></li>
											<li><a href="mens.php">Bags</a></li>
											<li><a href="mens.php">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="mens.php">Jewellery</a></li>
											<li><a href="mens.php">Sunglasses</a></li>
											<li><a href="mens.php">Perfumes</a></li>
											<li><a href="mens.php">Beauty</a></li>
											<li><a href="mens.php">Shirts</a></li>
											<li><a href="mens.php">Sunglasses</a></li>
											<li><a href="mens.php">Swimwear</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Women's wear <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.php">Clothing</a></li>
											<li><a href="womens.php">Wallets</a></li>
											<li><a href="womens.php">Footwear</a></li>
											<li><a href="womens.php">Watches</a></li>
											<li><a href="womens.php">Accessories</a></li>
											<li><a href="womens.php">Bags</a></li>
											<li><a href="womens.php">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.php">Jewellery</a></li>
											<li><a href="womens.php">Sunglasses</a></li>
											<li><a href="womens.php">Perfumes</a></li>
											<li><a href="womens.php">Beauty</a></li>
											<li><a href="womens.php">Shirts</a></li>
											<li><a href="womens.php">Sunglasses</a></li>
											<li><a href="womens.php">Swimwear</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.php"><img src="images/top1.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					
					<li class=" menu__item"><a class="menu__link" href="contact.php">Contact</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
						
						<button class="w3view-cart" type="submit" name="submit" value=""><a href="mycart.php"><i class="fa fa-cart-arrow-down" aria-hidden="true">(<?php echo $_SESSION["index"];?>)</i></a></button>
					 
						</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
									<form action="signin.php" method="post">
							<div class="styled-input">
								<input type="email" name="t1" required> 
								<label>Email</label>
								
							</div>
							<div class="styled-input">
								<input type="password" name="t2" required> 
								<label>Password</label>
							
							</div> 
							<input type="submit" value="Sign In">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->
<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
						 <form action="signup.php" method="post" onsubmit="return validatesignup()">

							<div class="styled-input agile-styled-input-top">
								<input type="text" name="name-signup" required>
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="email-signup" required> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="password-signup" required id="pass-signup"> 
								<label>Password</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="confirmpassword-signup" required id="confirm_pass-signup"> 
								<label>Confirm Password</label>
								<span></span>
							</div> 

							<input type="submit" value="Sign Up">
						</form>

						
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">By clicking register, I agree to your terms</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->
<!--/single_page-->
       <!-- /banner_bottom_agile_info -->


<br>
<br>
 <div class="container" align="center">
 	<div class="jumbotron">
<form id="myCCForm" action="payment1.php" method="post">
            <input id="token" name="token" type="hidden" value="">
            <div>
                <label>
                    <span>Card Number</span>
                </label>
                <input id="ccNo" type="text" size="20" value="" autocomplete="off" required />
            </div> <br>
            <div>

                <label>
                    <span>Expiration Date (MM/YYYY)</span>
                </label>
                <input type="text" size="2" id="expMonth" required />
                <span> / </span>
                <input type="text" size="2" id="expYear" required />
                <input type="hidden" size="2" name="amount" value='<?php echo $_SESSION["total"] ?>' required />
            </div> <br>
            <div>
                <label>
                    <span>CVC</span>
                </label>
                <input id="cvv" size="4" type="text" value="" autocomplete="off" required />
                Amount to be paid Rs.<?php echo $_SESSION["total"] ?>
            </div><br>
            <input type="submit" value="Submit Payment">
        </form>
        <br><br><br>
</div>
</div>

        <script type="text/javascript" src="https://www.2checkout.com/checkout/api/2co.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

        <script>
            // Called when token created successfully.
            var successCallback = function(data) {
                var myForm = document.getElementById('myCCForm');

                // Set the token as the value for the token input
                myForm.token.value = data.response.token.token;

                // IMPORTANT: Here we call `submit()` on the form element directly instead of using jQuery to prevent and infinite token request loop.
                myForm.submit();
            };

            // Called when token creation fails.
            var errorCallback = function(data) {
                if (data.errorCode === 200) {
                    tokenRequest();
                } else {
                    alert(data.errorMsg);
                }
            };

            var tokenRequest = function() {
                // Setup token request arguments
                var args = {
                    sellerId: "901406865",
                    publishableKey: "CECDEC54-0C71-41A2-92A0-F4E6EEA25C7D",
                    ccNo: $("#ccNo").val(),
                    cvv: $("#cvv").val(),
                    expMonth: $("#expMonth").val(),
                    expYear: $("#expYear").val()
                };

                // Make the token request
                TCO.requestToken(successCallback, errorCallback, args);
            };

            $(function() {
                // Pull in the public encryption key for our environment
                TCO.loadPubKey('sandbox');

                $("#myCCForm").submit(function(e) {
                    // Call our token request function
                    tokenRequest();

                    // Prevent form from submitting
                    return false;
                });
            });
        </script>
 
<!--//single_page-->
<!--/grids-->
<div class="coupons">
		<div class="coupons-grids text-center">
			<div class="w3layouts_mail_grid">
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>FREE SHIPPING</h3>
						<p>Online Shopping in Pakistan with free home delivery.</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-headphones" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>24/7 SUPPORT</h3>
						<p>Online Shopping in Pakistan with free home delivery.</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-shopping-bag" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>MONEY BACK GUARANTEE</h3>
						<p>Online Shopping in Pakistan with free home delivery.</p>
					</div>
				</div>
					<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-gift" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>FREE GIFT COUPONS</h3>
						<p>Online Shopping in Pakistan with free home delivery.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
</div>
<!--grids-->
<!-- footer -->
<div class="footer">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left">
			<h2><a href="index.php"><span>E</span>lite Shop </a></h2>
			<p>Our online shop in Pakistan is frequently updated to provide you with the latest style advice and will help you find the perfect item to wear on any occasion.</p>
			<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
		</div>
		<div class="col-md-9 footer-right">
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Our <span>Information</span> </h4>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="mens.php">Men's Wear</a></li>
						<li><a href="womens.php">Women's wear</a></li>
						<li><a href="about.php">About</a></li>
						
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				
				<div class="col-md-5 sign-gd-two">
					<h4>Store <span>Information</span></h4>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Phone Number</h6>
								<p>021-35035543</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Email Address</h6>
								<p>Email :<a href="mailto: info@wmomiti.com">  info@wmomiti.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Location</h6>
								<p>Plot No ST-1/8, Sector No 36-1, Korangi 5
Sherabad Colony Sector 36 C Landhi Town, Karachi, Karachi City, Sindh. 
								
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 sign-gd flickr-post">
					<h4>Flickr <span>Posts</span></h4>
					<ul>
						<li><a href="images/5.jpg"><img src="images/5.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="images/4.jpg"><img src="images/4.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="images/3.jpg"><img src="images/3.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="images/2.jpg"><img src="images/2.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="images/1.jpg"><img src="images/1.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="images/6.jpg"><img src="images/6.jpg" alt=" " class="img-responsive" /></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
			<div class="agile_newsletter_footer">
					<div class="col-sm-6 newsleft">
				<h3>SIGN UP FOR NEWSLETTER !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form action="#" method="post">
					<input type="email" placeholder="Enter your email..." name="email" required>
					<input type="submit" value="Submit">
				</form>
			</div>

		<div class="clearfix"></div>
	</div>
		<p class="copy-right">&copy 2019 Elite Shop. All rights reserved | Design by <a href="https://omais-ahmed.blogspot.com/">Omais Ahmed</a></p>
	</div>
</div>
<!-- //footer -->

<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>

<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<script src="js/modernizr.custom.js"></script>

	<script src="js/minicart.min.js"></script>
<script>

	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

<script src="js/imagezoom.js"></script>
				
<script src="js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default',           
	width: 'auto', 
	fit: true,   
	closed: 'accordion', 
	activate: function(event) { 
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>

<script src="js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
					
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

	<script type="text/javascript">
		$(document).ready(function() {
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
