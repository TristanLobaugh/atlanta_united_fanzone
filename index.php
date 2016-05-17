<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	require_once "includes/head.php";
	require_once "includes/header.php";
?>	


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

<?php require_once "includes/footer.php"; ?>	
