<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
	<script src="js/angular-route_1.7.2.js"></script>
</head>
<body ng-app="myApp">
	<p><a href="#/!">Main</a></p>
    <a href="#!banana">Banana</a>
    <a href="#!tomato">Tomato</a>

	<p>Click on the links to change the content.</p>

	<p>The HTML shown in the ng-view directive are written in the template property of the $routeProvider.when method.</p>

	<div ng-view></div>

	<script>
	var app = angular.module("myApp", ["ngRoute"]);
	app.config(function($routeProvider) {
		$routeProvider
		.when("/", {
			template : "<h1>Main</h1><p>Click on the links to change this content</p>"
		})
		.when("/banana", {
			template : "<h1>Banana</h1><p>Bananas contain around 75% water.</p>"
		})
		.when("/tomato", {
			template : "<h1>Tomato</h1><p>Tomatoes contain around 95% water.</p>"
		});
	});
	</script>
</body>
</html>
