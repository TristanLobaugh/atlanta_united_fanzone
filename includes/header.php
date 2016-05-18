<nav class="navbar navbar-inverse navbar-top">
	<div class="container-fluid">
		<dir id="left-nav-wrapper" class="col-sm-3">
			<a href="index.php"><div class="button-wrapper col-sm-8 col-md-5"><img src="img/logo.svg"></div></a>
		</dir>
		<div class="navbar-header col-sm-6 text-center">
			<div id="title">ATLANTA UNITED FC FANZONE</div>
		</div>
		<div id="right-nav-wrapper" class="col-sm-3">
		<?php
			if(isset($_SESSION["userName"])){
				print '<div class="button-wrapper"><a href="logout.php"><button type="button" class="btn btn-link">LOGOUT</button></a></div>
				<div class="button-wrapper"><a href=""><button type="button" class="btn btn-link">Welcome back, '.$_SESSION['userName'].'</button></a></div>';
			}else{ 
				print '<div class="button-wrapper"><a href="register.php"><button type="button" class="btn btn-warning">REGISTER</button></a></div>
					<div class="button-wrapper"><a href="login.php"><button type="button" class="btn btn-link">LOGIN</button></a></div>';
			}
		?>
		</div>
	</div>
</nav>