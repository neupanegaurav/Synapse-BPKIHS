<!doctype html>
<html lang="en">

<head>

	
	<title> Dashboard | Synapse</title>

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<div class="brand clearfix">
		<a href="index.php" class="logo"><img src="img/logo.png" class="img-responsive" style="width:150px;height:20px;margin:0px;padding:0px;" alt=""></a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#">Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="#">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				
				<br/><br/><br/>
				<li class="ts-label">Main menu</li>
				<li <?php if($page=="dashboard") { echo 'class = "open" ';} ?>  ><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li <?php if($page=="registerdata") { echo 'class = "open" ';} ?> ><a href="registerdata.php"><i class="fa fa-registered"></i> Register data </a></li>
				<li <?php if($page=="home") { echo 'class = "open" ';} ?> ><a href="home.php"><i class="fa fa-home"></i> Synapse Home </a></li>
				<li <?php if($page=="competition") { echo 'class = "open" ';} ?> > <a href="index.php"> <i class="fa fa-trophy"></i> Competition </a>
					<ul>
						<li><a href="sports.php">Sports</a></li>
						<li><a href="literary.php">Literary</a></li>
						<li><a href="cultural.php">Cultural</a></li>
					</ul>
				</li>
				<li <?php if($page=="gallery") { echo 'class = "open" ';} ?> ><a href="gallery.php"><i class="fa fa-picture-o"></i> Gallery </a></li>
				
				

				<!-- Account from above -->
				<ul class="ts-profile-nav">
					<li class="ts-account">
						<a href="#">Account <i class="fa fa-angle-down hidden-side"></i></a>
						<ul>
							<li><a href="#">Logout</a></li>
						</ul>
					</li>
		</ul>

			</ul>
		</nav>

		
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	


</body>

</html>