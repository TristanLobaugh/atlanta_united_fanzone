<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	require_once "includes/db_connect.php";

	if(!isset($_SESSION["userName"])){
		print "notLoggedIn";
		exit;
	}else{
		$jsonRecieved = file_get_contents("php://input");
		$decodedJSON = json_decode($jsonRecieved, true);
		$poster_userName = $decodedJSON["poster"];
		$followMethod = $decodedJSON["followMethod"];


		if($followMethod == "follow"){
			DB::insert("following", array(
				"follower" => $_SESSION["userName"],
				"poster" => $poster_userName
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