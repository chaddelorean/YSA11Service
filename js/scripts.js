/**
 * @author Chad
 */
$(function(){
	$("#news").click(function(e){
		e.preventDefault();
		$eventID = $('#eventID').val();
	});
});

var YSA11Service = angular.module('YSA11Service', []);

YSA11Service.controller('homePageCtrl', function($scope, $http) {
	$http.get('clipBoard.php').success(function (data) {
		$scope.clipBoard = data;
	});
	
	$http.get('serviceList.php').success(function (data) {
		$scope.events = data;
	});
	
	$scope.goToEventSignup = function(id) {
		sessionStorage.setItem('id', id);
		location.href= "eventsignup.html";
	};
});

YSA11Service.controller('serviceListingCtrl', function($scope, $http) {
	$http.get('serviceList.php').success(function (data) {
		$scope.events = data;
	});
	
	$scope.goToEventSignup = function(id) {
		sessionStorage.setItem('id', id);
		location.href= "eventsignup.html";
	};
});

YSA11Service.controller('eventSignupCtrl', function($scope, $http) {
	 $scope.id = sessionStorage.getItem('id');
});
