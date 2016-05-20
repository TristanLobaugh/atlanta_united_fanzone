<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	session_start();
	require_once "includes/meekrodb.2.3.class.php";

	if(!isset($_SESSION["userName"])){
		print "notLoggedIn";
		exit;
	}else{
		DB::$user = "x";
		DB::$password = "x";
		DB::$dbName = "atlanta_united_fc";
		DB::$host = "127.0.0.1";
		DB::$error_handler = false; // since we're catching errors, don't need error handler
		DB::$throw_exception_on_error = true;

		$jsonRevieved = file_get_contents("php://input");
		$decodedJSON = json_decode($jsonRevieved, true);
		$poster_unserName = $decodedJSON["poster"];
		$followMethod = $decoded_json["followMethod"];


		if($followMethod == "follow"){
			DB::insert("following", array(
				"follower" => $_SESSION["userName"],
				"poster" => $poster_unserName
				)
			);
			print "following";
			exit;
		}else if($followMethod == "unfollow"){
			DB:: delete("following", "follower=%s AND poster=%s", $_SESSION["userName"], $poster_userName);
			print "unfollowing";
			exit;
		}
	}

?>