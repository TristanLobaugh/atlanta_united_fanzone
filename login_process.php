<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	session_start();
	require_once "includes/meekrodb.2.3.class.php";
	DB::$user = "x";
	DB::$password = "x";
	DB::$dbName = "atlanta_united_fc";
	DB::$host = "127.0.0.1";
	DB::$error_handler = false; // since we're catching errors, don't need error handler
	DB::$throw_exception_on_error = true;

	try{
		$result = DB::query("SELECT * FROM users WHERE userName = %s", $_POST["userName"]);
			$hash = $result[0]["password"];
			$passwordVerify = password_verify($_POST["password"], $hash);
			if($passwordVerify){
				$_SESSION["userName"] = $_POST["userName"];
				$_SESSION["id"] = $result[0]["id"];
				header("Location: index.php?password=correct");
				exit;
			}else{
				header("Location: login.php?login=fail");
			}
	}catch(MeekroDBException $e){
		header("Location: /login.php?error=yes");
		exit;
	}

?>