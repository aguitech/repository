<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="customersCtrl">
		<table>
			<tr ng-repeat="x in names">
				<td>{{ x.Name }}</td>
				<td>{{ x.Country }}</td>
			</tr>
		</table>
	</div>
	<script>
	var app = angular.module('myApp', []);
	app.controller('customersCtrl', function($scope, $http) {
		$http.get("customers.php")
		.then(function (response) {$scope.names = response.data.records;});
	});
	</script> 
</body>
</html>

