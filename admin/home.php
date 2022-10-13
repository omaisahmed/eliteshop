<!DOCTYPE html>
<?php
session_start();
?>
<html lang = "eng">
	<head>
		<title>EliteShop</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel="icon" href="images/icon.JPG">
		<link rel = "stylesheet" href = "css/bootstrap.css" />
		
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<a href="images/logo.JPG"><img src = "images/logo.JPG" class="img-resposive" width = "200px" height = "55px"/></a>
					
				</div>
				<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class = "glyphicon glyphicon-user"></i> <?php echo $_SESSION["firstname"];?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<ul class = "nav nav-pills">
				<li class = "active"><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href = "products.php"><span class = "glyphicon glyphicon-home"></span> Products</a></li>
				<li class = "dropdown">
					<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#"><span class = "glyphicon glyphicon-cog"></span> Accounts <span class = "caret"></span></a>
					<ul class = "dropdown-menu">
						<li><a href = "admin.php"><span class = "glyphicon glyphicon-user"></span> Admin</a></li>
						<li><a href = "record.php"><span class = "glyphicon glyphicon-user"></span> Users</a></li>
					</ul>
				</li>
				
			</ul>
			<br />
			<div class = "alert alert-info">Home</div>
			<div class = "well col-lg-12">
				<a href="home.php"><img src = "images/play.png" width="200" height="200" class="img-resposive" /></a>
				
			</div>
		</div>
		<div class = "navbar navbar-fixed-bottom alert-warning">
			<div class = "container-fluid">
				<label class = "pull-left">&copy; eliteshop.epizy.com</label>
				<label class = "pull-right">Developer: <a href="https://omais-ahmed.blogspot.com">Omais Ahmed</a></label>
			</div>	
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	
</html>