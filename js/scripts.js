var fcApp = angular.module("fcApp", []);

fcApp.controller("fcController", function($scope, $http){

	$scope.follow = function(userName, followMethod){
		$http.post("follow_process.php", {
			poster: userName,
			followMethod: followMethod
		}). then(function successCallback(response){
			console.log(response.data);
		}, function errorCallback(response){
			console.log(response);
		});
	}



	$scope.vote = function(element, vote){
		// console.log(element.target.parentElement.id);
		$http.post("vote_process.php", {
			voteDirection: vote,
			idOfPost: element.target.parentElement.id
		}). then(function successCallback(response){
			if(response.data == "notLoggedIn"){
				element.currentTarget.nextElementSibling.nextElementSibling.innerHTML = "Must be logged in to vote!";
			}else if(response.data == "alreadyVoted"){
				element.currentTarget.nextElementSibling.nextElementSibling.innerHTML = "Sorry you already voted!";
			}else{
				if(vote == 1){
					element.currentTarget.children[0].innerHTML = response.data[0].upVotes;
				}else if(vote == 0){
					element.currentTarget.children[0].innerHTML = response.data[0].downVotes;
				}
			}
		}, function errorCallback(response){
			console.log(response);
		});
	}

	$scope.downVote = function(element){
		// console.log(element.target.parentElement.id);
		$http.post("downVote_process.php", {
			voteDirection: 1,
			idOfPost: element.target.parentElement.id
		}). then(function successCallback(response){
			
		}, function errorCallback(response){
			console.log(response);
		});
	}





//END OF CONTROLLER
});