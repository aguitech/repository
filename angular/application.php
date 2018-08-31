<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<script>
	var app = angular.module("myShoppingList", []); 
	app.controller("myCtrl", function($scope) {
		$scope.products = ["Milk", "Bread", "Cheese"];
	});
	</script>
	<div ng-app="myShoppingList" ng-controller="myCtrl">
		<ul>
			<li ng-repeat="x in products">{{x}}</li>
		</ul>
	</div>
	<p>So far we have made an HTML list based on the items of an array.</p>
</body>
</html>
