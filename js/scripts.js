var fcApp = angular.module("fcApp", []);

fcApp.controller("fcController", function($scope, $http){

	$scope.follow = function(userName){
		$http.post("follow_process.php", {
			poster: userName,
		}). then(function successCallback(response){
			if(response.data == "notLoggedIn"){
				element.currentTarget.children[0].innerHTML = "Must be logged in to vote!";
			}else if(response.data == "alreadyVoted"){
				element.currentTarget.children[0].innerHTML = "Sorry you already voted!";
			}else{
				if(vote == 1){
						element.currentTarget.children[0].innerHTML = response.data;
				}else{
					element.target.previousElementSibling.innerHTML = response.data;
				}
			}
		}, function errorCallback(response){
			console.log(response);
		});
	}

	$scope.upVote = function(element, vote){
		// console.log(element.target.parentElement.id);
		$http.post("upVote_process.php", {
			voteDirection: 1,
			idOfPost: element.target.parentElement.id
		}). then(function successCallback(response){
			if(response.data == "notLoggedIn"){
				element.currentTarget.children[0].innerHTML = "Must be logged in to vote!";
			}else if(response.data == "alreadyVoted"){
				element.currentTarget.children[0].innerHTML = "Sorry you already voted!";
			}else{
				if(vote == 1){
						element.currentTarget.children[0].innerHTML = response.data;
				}else{
					element.target.previousElementSibling.innerHTML = response.data;
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