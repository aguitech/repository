<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
	<script src="js/angular-route_1.7.2.js"></script>
</head>
<body ng-app="myApp">
	<p><a href="#/!">Main</a></p>
	<a href="#!london">City 1</a>
	<a href="#!paris">City 2</a>
	<p>Click on the links to read about London and Paris.</p>

	<div ng-view></div>

	<script>
	var app = angular.module("myApp", ["ngRoute"]);
	app.config(function($routeProvider) {
		$routeProvider
		.when("/", {
			templateUrl : "main.htm"
		})
		.when("/london", {
			templateUrl : "london.htm",
			controller : "londonCtrl"
		})
		.when("/paris", {
			templateUrl : "paris.htm",
			controller : "parisCtrl"
		});
	});
	app.controller("londonCtrl", function ($scope) {
		$scope.msg = "I love London";
	});
	app.controller("parisCtrl", function ($scope) {
		$scope.msg = "I love Paris";
	});
	</script>
</body>
</html>
