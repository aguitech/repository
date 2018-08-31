<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="myCtrl"> 
    	<p>This header will change after four seconds:</p>
    	<h1>{{myHeader}}</h1>
	</div>
	<p>The $timeout service runs a function after a specified number of milliseconds.</p>
	<script>
	var app = angular.module('myApp', []);
	app.controller('myCtrl', function($scope, $timeout) {
		$scope.myHeader = "Hello World!";
		$timeout(function () {
			$scope.myHeader = "How are you today?";
		}, 4000);
	});
	</script>
</body>
</html>

