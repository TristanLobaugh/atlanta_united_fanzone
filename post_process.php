<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	session_start();
	if(!isset($_SESSION["userName"])){
		header("Location: login.php");
		exit;
	}
	require_once "includes/meekrodb.2.3.class.php";
	DB::$user = "x";
	DB::$password = "x";
	DB::$dbName = "atlanta_united_fc";
	DB::$host = "127.0.0.1";
	DB::$error_handler = false; // since we're catching errors, don't need error handler
	DB::$throw_exception_on_error = true;


	try{
		DB::insert("posts", array(
			"userName" => $_SESSION["userName"],
			"postText" => $_POST["post_text"]
		));
		header("Location: index.php?post=success");
		exit;
	}catch(MeekroDBException $e){
		header("Location: index.php?error=yes");
		exit;
	}

?>