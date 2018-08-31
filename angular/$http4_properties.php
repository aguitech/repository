<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="myCtrl"> 
        <p>Data : {{content}}</p>
        <p>Status : {{statuscode}}</p>
        <p>StatusText : {{statustext}}</p>
	</div>
	<p>The response object has many properties. This example demonstrate the value of the data, status, and statusText properties.</p>

	<script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope, $http) {
		$http.get("welcome.htm")
		.then(function(response) {
			$scope.content = response.data;
			$scope.statuscode = response.status;
			$scope.statustext = response.statusText;            
		});
	});
</script>

</body>
</html>

