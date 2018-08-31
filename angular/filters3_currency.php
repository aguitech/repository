<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="costCtrl">
		<h1>Price: {{ price | currency }}</h1>
	</div>
    <script>
    var app = angular.module('myApp', []);
    app.controller('costCtrl', function($scope) {
		$scope.price = 58;
    });
    </script>
	<p>The currency filter formats a number to a currency format.</p>  
</body>
</html>
