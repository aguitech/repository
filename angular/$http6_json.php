<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="customersCtrl">
    	<ul>
    		<li ng-repeat="x in myData">
    			{{ x.Name + ', ' + x.Country }}
    		</li>
    	</ul>
	</div>
    <script>
    var app = angular.module('myApp', []);
    app.controller('customersCtrl', function($scope, $http) {
		$http.get("customers.php").then(function(response) {
			$scope.myData = response.data.records;
		});
	});
	</script>
</body>
</html>

