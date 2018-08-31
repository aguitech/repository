<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="myCtrl">
		<p>Select a car:</p>
		<select ng-model="selectedCar" ng-options="x for (x, y) in cars">
		</select>
		<h1>You selected: {{selectedCar}}</h1>

	</div>
	<p>This example demonstrates the use of an object as the data source when creating a dropdown list.</p>
	<script>
	var app = angular.module('myApp', []);
	app.controller('myCtrl', function($scope) {
		$scope.cars = {
			car01 : "Ford",
			car02 : "Fiat",
			car03 : "Volvo"
		}
	});
	</script> 
</body>
</html>
