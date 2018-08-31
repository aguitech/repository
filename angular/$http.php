<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="myCtrl">
		<p>Today's welcome message is:</p>
		<h1>{{myWelcome}}</h1>
	</div>
	<script>
	var app = angular.module('myApp', []);
	app.controller('myCtrl', function($scope, $http) {
    $http.get("welcome.htm")
		.then(function(response) {
			$scope.myWelcome = response.data;
		});
	});
	</script>

</body>
</html>

