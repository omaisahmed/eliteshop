<!DOCTYPE html>
<?php
	require_once 'connect.php'; 
session_start();
?>
<html lang = "eng">
	<head>
		<title>EliteShop</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel="icon" href="images/icon.JPG">
		<link rel = "stylesheet" href = "css/bootstrap.css" />
		<link rel = "stylesheet" href = "css/jquery.dataTables.css" />
		
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
				<li><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
				<li class = "dropdown active">
					<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#"><span class = "glyphicon glyphicon-cog"></span> Accounts <span class = "caret"></span></a>
					<ul class = "dropdown-menu">
						<li><a href = "admin.php"><span class = "glyphicon glyphicon-user"></span> Admin</a></li>
						<li><a href = "record.php"><span class = "glyphicon glyphicon-user"></span> Users</a></li>
					</ul>
				</li>
				
			</ul>
			<br />

			<div class = "alert alert-info">All Users</div>
			<div class = "well col-lg-12">
				<table id = "table" class = "table table-bordered">
					<thead class = "alert-info">
						<tr>
							<th>S.No</th>
							<th>Name</th>
							<th>Email</th>
							<th>Password</th>
							<th>Confirm Password</th>
							
						</tr>
					</thead>
					<tbody>
					<?php
						$q_time = $conn->query("SELECT * FROM `signup`") or die(mysqli_error());
						$count=1;
						while($f_time = $q_time->fetch_array()){
							
					?>	
						<tr>
							<td><?php echo $count++ ?></td> 
							<td><?php echo $f_time['name']?></td>
							<td><?php echo $f_time['email']?></td>
							<td><?php echo htmlentities($f_time['password'])?>
							<td><?php echo htmlentities($f_time['confirmpassword'])?>	
							</td>
							
							
						</tr>
					<?php
						}
					?>	
					</tbody>
				</table>
			<br />
			<br />	
			<br />	
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
	<script src = "js/jquery.dataTables.js"></script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('.rtime_id').click(function(){
				$time_id = $(this).attr('name');
				$('.remove_id').click(function(){
					window.location = 'delete_time.php?time_id=' + $time_id;
				});
			});
		});
	</script>
</html>