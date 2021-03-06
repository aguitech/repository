<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
	<style>
    table, td  {
        border: 1px solid grey;
        border-collapse: collapse;
        padding: 5px;
    }
    </style>
</head>
<body>
	<div ng-app="myApp" ng-controller="customersCtrl">
		 <table>
			<tr ng-repeat="x in names">
				<td ng-if="$odd" style="background-color:#f1f1f1">{{ x.Name }}</td>
				<td ng-if="$even">{{ x.Name }}</td>
				<td ng-if="$odd" style="background-color:#f1f1f1">{{ x.Country }}</td>
				<td ng-if="$even">{{ x.Country }}</td>
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

