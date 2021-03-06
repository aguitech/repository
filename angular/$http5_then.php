<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="myCtrl"> 
		<h1>{{content}}</h1>
	</div>
	<p>The $http service executes different functions on success and failure.</p>
	<script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope, $http) {
		$http.get("wrongfilename.htm")
		.then(function(response) {
			$scope.content = response.data;
		}, function(response) {
			$scope.content = "Something went wrong";
		});
	});
	</script>
</body>
</html>

