<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	require_once "includes/head.php";
	require_once "includes/header.php";

	$posts = DB::query("SELECT * FROM posts");
	$posts = array_reverse($posts);
	date_default_timezone_set("America/New_York");
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
			</div>
			<hr>
			<div id="post-entry-wrapper">
				<?php if(isset($_SESSION["userName"])): ?>
				<form role="form" action="post_process.php" method="post">
				  <div class="form-group">
				    <label class="col-sm-12" for="post_text">Make a post</label>
				    <textarea name="post_text" type="text" id="post-text" maxlength="255"></textarea>
				  </div>
				  <button type="submit" class="btn btn-primary">Post</button>
					</form>
				<?php else: ?>
					<h3>You must be <a href="login.php">logged in</a> to make a post</h3>		
				<?php endif; ?>
			</div>
			<hr>
			<div id="posts-wrapper">
				<?php 
				foreach($posts as $post):
				$time_stamp_unix = strtotime($post["timeStamp"]); ?>
					<div class="post">
						<div class="text"><?php print $post["postText"]; ?></div>	
						<div class="date"><?php print date("D F j, Y -  h:ia", $time_stamp_unix); ?></div>
						<div class="user">Posted by: <a href=""><?php print $post["userName"]; ?></a></div>
					</div>
				<?php endforeach; ?>
			</div>	

		</div>
	</div>

<?php require_once "includes/footer.php"; ?>	
