<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="myCtrl">
    	<p>Today's welcome message is:</p>
    	<h1>{{myWelcome}}</h1>
	</div>
	<p>The $http service requests a page on the server, and the response is set as the value of the "myWelcome" variable.</p>
	<script>
	var app = angular.module('myApp', []);
	app.controller('myCtrl', function($scope, $http) {
		$http({
			method : "GET",
			url : "welcome.htm"
		}).then(function mySuccess(response) {
			$scope.myWelcome = response.data;
		}, function myError(response) {
			$scope.myWelcome = response.statusText;
		});
	});
</script>

</body>
</html>

