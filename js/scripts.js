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
});
