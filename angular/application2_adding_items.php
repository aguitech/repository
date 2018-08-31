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
		$scope.addItem = function () {
			$scope.products.push($scope.addMe);
		}
	});
	</script>
	<div ng-app="myShoppingList" ng-controller="myCtrl">
		<ul>
			<li ng-repeat="x in products">{{x}}</li>
		</ul>
		<input ng-model="addMe">
		<button ng-click="addItem()">Add</button>
	</div>
</body>
</html>
