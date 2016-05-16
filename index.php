<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Atlanta United Fanzone Chat</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	
	<nav class="navbar navbar-inverse navbar-top">
		<div class="container-fluid">
			<dir id="left-nav-wrapper" class="col-sm-3">
				<a href=""><div class="button-wrapper col-sm-8 col-md-5"><img src="img/logo.svg"></div></a>
			</dir>
			<div class="navbar-header col-sm-6 text-center">
				<div id="title">ATLANTA UNITED FC FANZONE</div>
			</div>
			<div id="right-nav-wrapper" class="col-sm-3">
				<div class="welcome-wrapper hidden"><div>Welcome back, </div></div>
				<div class="button-wrapper"><button type="button" class="btn btn-warning">REGISTER</button></div>
				<div class="button-wrapper"><button type="button" class="btn btn-link">LOGIN</button></div>
				<div class="button-wrapper hidden"><button type="button" class="btn btn-link">LOGOUT</button></div>
			</div>
		</div>
	</nav>

	<div id="main-wrapper" class="container-fluid">
		
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="img/aufc_carol1.jpg" alt="Chania">
		    </div>

		    <div class="item">
		      <img src="img/aufc_carol2.jpg" alt="Chania">
		    </div>

		    <div class="item">
		      <img src="img/aufc_carol3.jpg" alt="Flower">
		    </div>

		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>

	<div id="content-wrapper" class="col-sm-8 col-sm-offset-2">
		<div id="mission-wrapper">
			<h2>The Goal</h2>
			<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</dir>
		<hr>
		<div id="posts-wrapper">
			<div id="my-post-wrapper">
				<div class="col-sm-10"><h2>Recent Posts</h2></div>
				<div class="col-sm-2 text-right">+</div>
				<div class="col-sm-12">
					<h3>Post</h3>
					<textarea rows="5"></textarea>
					<div class="button-wrapper"><button class="btn btn-primary">POST</button></div>
				</div>
			</div>
			<div id="recent-posts-wrapper">
				
			</div>
		</div>
	</div>

	
</body>
</html>