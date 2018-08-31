<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="personCtrl">
    First Name: <input type="text" ng-model="firstName"><br>
    Last Name: <input type="text" ng-model="lastName"><br>
    <br>
    Full Name: {{fullName()}}
    </div>
    <script>
	var app = angular.module('myApp', []);
	app.controller('personCtrl', function($scope) {
		$scope.firstName = "John";
		$scope.lastName = "Doe";
		$scope.fullName = function() {
			return $scope.firstName + " " + $scope.lastName;
		};
	});
    </script> 
</body>
</html>
