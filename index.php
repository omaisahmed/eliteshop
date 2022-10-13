<!DOCTYPE html>
<?php
include("db.php");
include("functions.php");
$f=new functions();
$f->loginclick();
$f->index();

?>
<html>
<head>
<title>Elite Shop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="validation.js"></script>
</head>
<body onload='somescript()'>

<?php include("header.php"); ?>

<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
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

<?php include("modals.php"); ?>
		
	<div id="myCarousel" class="carousel slide" data-ride="carousel">

		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			<li data-target="#myCarousel" data-slide-to="4" class=""></li> 
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
						<a class="hvr-outline-out button2" href="womens.php">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item2"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Summer <span>Collection</span></h3>
						<p>New Arrivals On Sale</p>
						<a class="hvr-outline-out button2" href="mens.php">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item3"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
						<a class="hvr-outline-out button2" href="womens.php">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item4"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Summer <span>Collection</span></h3>
						<p>New Arrivals On Sale</p>
						<a class="hvr-outline-out button2" href="womens.php">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item5"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
						<a class="hvr-outline-out button2" href="mens.php">Shop Now </a>
					</div>
				</div>
			</div> 
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		
    </div> 
	
    <div class="banner_bottom_agile_info">
	    <div class="container">
            <div class="banner_bottom_agile_info_inner_w3ls">
    	           <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="images/bottom1.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>F</span>all Ahead</h3>
								<p>New Arrivals</p>
							</figcaption>			
						</figure>
					</div>
					 <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="images/bottom2.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>F</span>all Ahead</h3>
								<p>New Arrivals</p>
							</figcaption>			
						</figure>
					</div>
					<div class="clearfix"></div>
		    </div> 
		 </div> 
    </div>
	
	<div class="schedule-bottom">
		<div class="col-md-6 agileinfo_schedule_bottom_left">
			<img src="images/mid.jpg" alt=" " class="img-responsive" />
		</div>
		<div class="col-md-6 agileits_schedule_bottom_right">
			<div class="w3ls_schedule_bottom_right_grid">
				<h3>Save up to <span>50%</span> in this week</h3>
				<p>Our online shop in Pakistan is frequently updated to provide you with the latest style advice and will help you find the perfect item to wear on any occasion.</p>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-user-o" aria-hidden="true"></i>
					<h4>Customers</h4>
					<h5 class="counter">653</h5>
				</div>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-calendar-o" aria-hidden="true"></i>
					<h4>Events</h4>
					<h5 class="counter">823</h5>
				</div>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-shield" aria-hidden="true"></i>
					<h4>Awards</h4>
					<h5 class="counter">45</h5>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>

	<div class="banner-bootom-w3-agileits">
	<div class="container">
		<h3 class="wthree_text_info">What's <span>Trending</span></h3>
	
		<div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
			<a href="womens.php">
			   <div class="bb-left-agileits-w3layouts-inner grid">
					<figure class="effect-roxy">
							<img src="images/bb1.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>S</span>ale </h3>
								<p>Upto 55%</p>
							</figcaption>			
						</figure>
			    </div>
			</a>
		</div>
		<div class="col-md-7 bb-grids bb-middle-agileits-w3layouts">
		      <a href="mens.php">
		       <div class="bb-middle-agileits-w3layouts grid">
			           <figure class="effect-roxy">
							<img src="images/bottom3.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>S</span>ale </h3>
								<p>Upto 55%</p>
							</figcaption>			
						</figure>
		        </div>
				</a>
				<a href="mens.php">
		      <div class="bb-middle-agileits-w3layouts forth grid">
						<figure class="effect-roxy">
							<img src="images/bottom4.jpg" alt=" " class="img-responsive">
							<figcaption>
								<h3><span>S</span>ale </h3>
								<p>Upto 65%</p>
							</figcaption>		
						</figure>
					</div>
					</a>
		<div class="clearfix"></div>
	</div>
	</div>
    </div>

      <div class="agile_last_double_sectionw3ls">
            <div class="col-md-6 multi-gd-img multi-gd-text ">
					<a href="womens.php"><img src="images/bot_1.jpg" alt=" "><h4>Flat <span>50%</span> offer</h4></a>
					
			</div>
			 <div class="col-md-6 multi-gd-img multi-gd-text ">
					<a href="mens.php"><img src="images/bot_2.jpg" alt=" "><h4>Flat <span>50%</span> offer</h4></a>
			</div>
			<div class="clearfix"></div>
	   </div>							

	<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
		    <h3 class="wthree_text_info">New <span>Arrivals</span></h3>		
				<div id="horizontalTab">
<?php
$sql="select pcategory from products group by pcategory";
$result=$connect->query($sql);
while ($row=$result->fetch_assoc())
{
	$cat=$row["pcategory"];
	echo "<ul class='resp-tabs-list'>
							<li>$cat</li>
							
						</ul>";
	
}
?>
						
					<div class="resp-tabs-container">
						<div class="tab1">
							
<?php
$sql1="select * from products where pcategory='bags'";
$result1=$connect->query($sql1);
while ($row1=$result1->fetch_assoc())
{
$a=$row1["pcode"];
$b=$row1["pname"];
$c=$row1["pprice"];
$d=$row1["pimage"];
$e=$row1["pdescription"];
$f=$row1["dprice"];
?>

							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
								

										<?php echo "<img src='$d' alt='' class='pro-image-front'>"; ?>
										<?php echo "<img src='$d' alt='' class='pro-image-back'>"; ?>
									
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
												<?php echo "<a href='cart.php?img=$d&name=$b&price=$c&delprice=$f&pcode=$a' class='link-product-add-cart'>Quick View</a>"; ?>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<?php echo "<p>$e</p>"; ?>
										<div class="info-product-price">
											<?php echo "<span class='item_price'>Rs.$c</span>"; ?>
											<del><?php echo "Rs.$f" ?></del>
										</div>
										<div class='snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2'>
															
																	<?php echo "<a href='addtocart.php?pcode=$a'><input type='submit' name='submit' value='Add to cart' class='button' /></a>";?></div>
																
																		
									</div>
								</div>
							</div>
							<?php } ?>
							<div class="clearfix"></div>	
						</div>

						
							
						
						<div class="tab2">
<?php
$sql2="select * from products where pcategory='footwear'";
$result2=$connect->query($sql2);
while ($row2=$result2->fetch_assoc())
{
$a=$row2["pcode"];
$b=$row2["pname"];
$c=$row2["pprice"];
$d=$row2["pimage"];
$e=$row2["pdescription"];
$f=$row2["dprice"];
?>							
							 <div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
								

										<?php echo "<img src='$d' alt='' class='pro-image-front'>"; ?>
										<?php echo "<img src='$d' alt='' class='pro-image-back'>"; ?>
									
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
												<?php echo "<a href='cart.php?img=$d&name=$b&price=$c&delprice=$f&pcode=$a' class='link-product-add-cart'>Quick View</a>"; ?>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<?php echo "<p>$e</p>"; ?>
										<div class="info-product-price">
											<?php echo "<span class='item_price'>Rs.$c</span>"; ?>
											<del><?php echo "Rs.$f" ?></del>
										</div>
										<div class='snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2'>
															
																	<?php echo "<a href='addtocart.php?pcode=$a'><input type='submit' name='submit' value='Add to cart' class='button' /></a>";?></div>
																				
									</div>
								</div>
							</div>
							<?php } ?>

							<div class="clearfix"></div>
						</div>
					 
						<div class="tab3">

<?php
$sql3="select * from products where pcategory='mens'";
$result3=$connect->query($sql3);
while ($row3=$result3->fetch_assoc())
{
$a=$row3["pcode"];
$b=$row3["pname"];
$c=$row3["pprice"];
$d=$row3["pimage"];
$e=$row3["pdescription"];
$f=$row3["dprice"];
?>	

								
						<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
								

										<?php echo "<img src='$d' alt='' class='pro-image-front'>"; ?>
										<?php echo "<img src='$d' alt='' class='pro-image-back'>"; ?>
									
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
												<?php echo "<a href='cart.php?img=$d&name=$b&price=$c&delprice=$f&pcode=$a' class='link-product-add-cart'>Quick View</a>"; ?>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<?php echo "<p>$e</p>"; ?>
										<div class="info-product-price">
											<?php echo "<span class='item_price'>Rs.$c</span>"; ?>
											<del><?php echo "Rs.$f" ?></del>
										</div>
										<div class='snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2'>
															
																	<?php echo "<a href='addtocart.php?pcode=$a'><input type='submit' name='submit' value='Add to cart' class='button' /></a>";?></div>
																
																			
									</div>
								</div>
							</div>
							<?php } ?>

							<div class="clearfix"></div>
						</div>


                            <div class="tab4"> 
<?php
$sql4="select * from products where pcategory='womens'";
$result4=$connect->query($sql4);
while ($row4=$result4->fetch_assoc())
{
$a=$row4["pcode"];
$b=$row4["pname"];
$c=$row4["pprice"];
$d=$row4["pimage"];
$e=$row4["pdescription"];
$f=$row4["dprice"];
?>	                            	
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
								

										<?php echo "<img src='$d' alt='' class='pro-image-front'>"; ?>
										<?php echo "<img src='$d' alt='' class='pro-image-back'>"; ?>
									
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
												<?php echo "<a href='cart.php?img=$d&name=$b&price=$c&delprice=$f&pcode=$a' class='link-product-add-cart'>Quick View</a>"; ?>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<?php echo "<p>$e</p>"; ?>
										<div class="info-product-price">
											<?php echo "<span class='item_price'>Rs.$c</span>"; ?>
											<del><?php echo "Rs.$f" ?></del>
										</div>
										<div class='snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2'>
															
																	<?php echo "<a href='addtocart.php?pcode=$a'><input type='submit' name='submit' value='Add to cart' class='button' /></a>";?></div>
																
																			
									</div>
								</div>
							</div>
						<?php } ?>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>	
			</div>
		</div>

		<div class="sale-w3ls">
			<div class="container">
				<h6>We Offer Flat <span>40%</span> Discount</h6>
 
				<a class="hvr-outline-out button2" href="womens.php">Shop Now </a>
			</div>
		</div>

<?php include("footer.php"); ?>

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
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required>	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>
												
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
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required>	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>
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
		action: 'mycart.php'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
					
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

	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
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
