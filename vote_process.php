<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	require_once "includes/db_connect.php";

	if(!isset($_SESSION["userName"])){
		print "notLoggedIn";
		exit;
	}else{
		$jsonRevieved = file_get_contents("php://input");
		$decodedJSON = json_decode($jsonRevieved, true);
		$post_id = $decodedJSON["idOfPost"];
		$vote_direction = $decodedJSON["voteDirection"];

		$did_vote = DB::query("SELECT * FROM votes WHERE username = %s and pid =%i", $_SESSION["userName"], $post_id);

		if(DB::count() != 0){
			print "alreadyVoted";
			exit;
		}else{
			if($vote_direction == 1){
				DB::query("UPDATE posts SET upVotes = upVotes + 1 WHERE id =".$post_id);
				DB::insert("votes", array(
				"userName" => $_SESSION["userName"],
				"vote_direction" => $vote_direction,
				"pid" => $post_id
				));
				$total_votes = DB::query("SELECT upVotes FROM posts WHERE id =".$post_id);
			}else if($vote_direction == 0){
				DB::query("UPDATE posts SET downVotes = downVotes + 1 WHERE id =".$post_id);
				DB::insert("votes", array(
				"userName" => $_SESSION["userName"],
				"vote_direction" => $vote_direction,
				"pid" => $post_id
				));
				$total_votes = DB::query("SELECT downVotes FROM posts WHERE id =".$post_id);
			}
			
			// $total_votes = DB::query("SELECT SUM(vote_direction) AS voteTotal FROM votes WHERE pid =".$post_id);
			print json_encode($total_votes, JSON_NUMERIC_CHECK);
		}	
	}

?>