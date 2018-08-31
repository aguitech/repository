<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="myCtrl">
		Name: <input ng-model="name">
	</div>
    <script>
	var app = angular.module('myApp', []);
	app.controller('myCtrl', function($scope) {
		$scope.name = "John Doe";
	});
	</script> 
</body>
</html>
