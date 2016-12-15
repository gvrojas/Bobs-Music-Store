<!DOCTYPE html>
<!--Creates header to be displayed on each page.-->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Bob's Music Store </title>
  			<meta name="viewport" content="width=device-width, initial-scale=1">
  			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  			<link rel="stylesheet" type="text/css" href="../productStyle.css">
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>

		<div class="jumbotron">
			<div class="container text-center">
				<h1>Super Music Town</h1>
				<p>Striving to bring you better products, everyday</p>
			</div>
		</div>

		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class = "navbar-brand" href="#">Logo</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="../customer/homepage.php">Home</a></li>
					<!-- Creates the dropdown for Products-->
			    	<div class="dropdown">
			        	<a href = "../customer/categories.php"><button class="dropbtn">Products</button></a>
			        	<div class="dropdown-content">
			            	<a href = "../customer/categorypage.php?id=1">Guitars</a>
			            	<a href = "../customer/categorypage.php?id=2">Keyboards</a>
			            	<a href = "../customer/categorypage.php?id=3">Drums and Percussion</a>
			            	<a href = "../customer/categorypage.php?id=4">Orchestra</a>
			            	<a href = "../customer/categorypage.php?id=5">Sound Equipment</a>
			         	</div>
			      	</div>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="adminfunctions.php"><span class="glyphicon glyphicon-user"></span>My account</a></li>
					<li><a href="adminlogout.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</body>
</html>