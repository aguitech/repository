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
		<h1>You selected: {{selectedCar.brand}}</h1>
		<h2>Model: {{selectedCar.model}}</h2>
		<h3>Color: {{selectedCar.color}}</h3>
		<p>Note that the selected value represents an object.</p>
	</div>
	<script>
	var app = angular.module('myApp', []);
	app.controller('myCtrl', function($scope) {
		$scope.cars = {
			car01 : {brand : "Ford", model : "Mustang", color : "red"},
			car02 : {brand : "Fiat", model : "500", color : "white"},
			car03 : {brand : "Volvo", model : "XC90", color : "black"}
		}
	});
	</script>
</body>
</html>
