<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="customersCtrl"> 
		<div ng-include="'myTable.htm'"></div>
	</div>
	<script>
	var app = angular.module('myApp', []);
	app.controller('customersCtrl', function($scope, $http) {
		$http.get("customers.php").then(function (response) {
			$scope.names = response.data.records;
		});
	});
	</script>
	<p>The HTML, and AngularJS code, for this table are located in the file "myTable.htm".</p>
</body>
</html>
