<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	require_once "includes/db_connect.php";
	require_once "includes/head.php";
	require_once "includes/header.php";

	$following_array = DB::queryOneColumn('poster', "SELECT poster FROM following WHERE follower = %s", $_SESSION['userName']);
	$people_user_is_following_as_string = implode("','",$following_array);
	$not_following_array = DB::queryOneColumn('userName', "SELECT userName FROM users 
		WHERE userName != %s 
		AND userName NOT IN ('" . $people_user_is_following_as_string. "' )", $_SESSION['userName']);

?>

<div id="follow-wrapper" class="container">
	<div class="row">
		<h3 class="col-sm-12 text-center">Following</h3>
		<div class="col-sm-8 col-sm-offset-2">
			<?php foreach($following_array as $user): ?>
				<div class="users-to-follow col-sm-12">
					<div class="col-sm-2">
						<button ng-click="follow('<?php print $user ;?>', 'unfollow')" class="btn btn-primary">UNFOLLOW</button>
					</div>
					<div class="col-sm-10"><?php print $user; ?></div>
				</div>	
			<?php endforeach; ?>

		</div>
		<div class="row"></div>
		<h3 class="col-sm-12 text-center">USERS YOU HAVE NOT FOLLOWED YET</h3>
		<div class="col-sm-8 col-sm-offset-2">
			<?php foreach($not_following_array as $user): ?>
				<div class="users-to-follow col-sm-12">
					<div class="col-sm-2">
						<button ng-click="follow('<?php print $user ;?>', 'follow')" class="btn btn-primary">FOLLOW</button>
					</div>
					<div class="col-sm-10"><?php print $user; ?></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<?php require_once "includes/footer.php"; ?>