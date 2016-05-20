<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	require_once "includes/meekrodb.2.3.class.php";
	require_once "includes/head.php";
	require_once "includes/header.php";

	$following_array = DB::query("SELECT * FROM following WHERE follower = %s", $_SESSION["userName"]);
	$not_following_array = DB::query("SELECT userName FROM users WHERE userName != %s AND userName NOT IN($following_array)", $_SESSION["userName"]);

?>

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">

			<?php foreach($all_users_array as $user): ?>
				<div class="col-sm-8"><?php print $user["userName"]; ?></div>
				<div class="col-sm-4"><button ng-click="follow('<?php print $user ;?>',' unfollow')" class="btn btn-primary">FOLLOW</button></div>
			<?php endforeach; ?>

		</div>
		<div class="col-sm-8 col-sm-offset-2">

			<?php foreach($all_users_array as $user): ?>
				<div class="col-sm-8"><?php print $user["userName"]; ?></div>
				<div class="col-sm-4"><button ng-click="follow('<?php print $user ;?>',' follow')" class="btn btn-primary">FOLLOW</button></div>
			<?php endforeach; ?>

		</div>
	</div>
</div>


<?php require_once "includes/footer.php"; ?>