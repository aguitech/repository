<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="myCtrl">
		<p>The time is:</p>
		<h1>{{theTime}}</h1>
	</div>
	<p>The $interval service runs a function every specified millisecond.</p>
	<script>
	var app = angular.module('myApp', []);
	app.controller('myCtrl', function($scope, $interval) {
		$scope.theTime = new Date().toLocaleTimeString();
		$interval(function () {
			$scope.theTime = new Date().toLocaleTimeString();
		}, 1000);
	});
	</script>
</body>
</html>
