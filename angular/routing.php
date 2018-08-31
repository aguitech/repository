<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
	<script src="js/angular-route_1.7.2.js"></script>
</head>
<body ng-app="myApp">
	<p><a href="#/!">Main</a></p>
	<a href="#!red">Red</a>
	<a href="#!green">Green</a>
	<a href="#!blue">Blue</a>
	
	<div ng-view></div>
		
	
	<pre>
		Direferentes maneras de llamar ng-view
		<div ng-view></div>
		<ng-view></ng-view>
		<div class="ng-view"></div>
	</pre>


	<script>
	var app = angular.module("myApp", ["ngRoute"]);
	app.config(function($routeProvider) {
		$routeProvider
		.when("/", {
			templateUrl : "main.htm"
		})
		.when("/red", {
			templateUrl : "red.htm"
		})
		.when("/green", {
			templateUrl : "green.htm"
		})
		.when("/blue", {
			templateUrl : "blue.htm"
		});
	});
	</script>
</body>
</html>
