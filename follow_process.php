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
		$poster_unserName = $decodedJSON["userName"];

			DB::insert("following", array(
				"follower" => $_SESSION["userName"],
				"poster" => $poster_unserName
				));
			print json_encode($total_votes[0]["voteTotal"], JSON_NUMERIC_CHECK);
			
	}

?>