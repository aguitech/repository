<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="myCtrl">
		<p>The hexadecimal value of 255 is:</p>
		<h1>{{hex}}</h1>
	</div>
	<p>A custom service with a method that converts a given number into a hexadecimal number.</p>
	<script>
	var app = angular.module('myApp', []);
	
	app.service('hexafy', function() {
		this.myFunc = function (x) {
			return x.toString(16);
		}
	});
	app.controller('myCtrl', function($scope, hexafy) {
		$scope.hex = hexafy.myFunc(255);
	});
	</script> 
</body>
</html>

