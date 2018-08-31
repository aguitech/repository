<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="myCtrl">
		<pre>
			ng-repeat
		</pre>
		
		<p>Select a car:</p>
		<select ng-model="selectedCar">
			<option ng-repeat="x in cars" value="{{x.model}}">{{x.model}}</option>
		</select>
		<h1>You selected: {{selectedCar}}</h1>
		
		<pre>
			ng-options
			When using the ng-options directive, the selected value can be an object:
		</pre>
        <select ng-model="selectedCar" ng-options="x.model for x in cars">
        </select>
        
        <h1>You selected: {{selectedCar.model}}</h1>
        <p>Its color is: {{selectedCar.color}}</p>
		
	</div>
	<script>
	var app = angular.module('myApp', []);
	app.controller('myCtrl', function($scope) {
		$scope.cars = [
			{model : "Ford Mustang", color : "red"},
			{model : "Fiat 500", color : "white"},
			{model : "Volvo XC90", color : "black"}
		];
	});
	</script>
	<p>When you use the ng-repeat directive to create dropdown lists, the selected value must be a string.</p>
	<p>In this example you will have to choose between the color or the model to be your selected value.</p> 
</body>
</html>
