<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="myCtrl">
		<select ng-model="selectedName" ng-options="x for x in names">
		</select>
	</div>
	<script>
	var app = angular.module('myApp', []);
	app.controller('myCtrl', function($scope) {
		$scope.names = ["Emil", "Tobias", "Linus"];
	});
	</script> 
</body>
</html>
