<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body ng-app="myApp">
    <p>The rootScope's favorite color:</p>
    <h1>{{color}}</h1>
    
    <div ng-controller="myCtrl">
		<p>The scope of the controller's favorite color:</p>
		<h1>{{color}}</h1>
	</div>
	
	<p>The rootScope's favorite color is still:</p>
	<h1>{{color}}</h1>
	
	<script>
	var app = angular.module('myApp', []);
	app.run(function($rootScope) {
		$rootScope.color = 'blue';
	});
	app.controller('myCtrl', function($scope) {
		$scope.color = "red";
	});
	</script>
</body> 
</html>

