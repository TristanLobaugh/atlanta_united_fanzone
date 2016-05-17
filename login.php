<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	require_once "includes/head.php";
	require_once "includes/header.php";
?>

<form role="form" action="login_process.php" method="post">
  <div class="form-group">
    <label for="email">Username:</label>
    <input name="userName" type="text" class="form-control" id="userName">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input name="password" type="password" class="form-control" id="pwd">
  </div>
  <button type="submit" class="btn btn-default">Register</button>
</form>

<?php require_once "includes/footer.php"; ?>