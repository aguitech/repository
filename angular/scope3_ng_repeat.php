<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
    <div ng-app="myApp" ng-controller="myCtrl">
        <ul>
    		<li ng-repeat="x in names">{{x}}</li>
    	</ul>
    </div>
    <script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope) {
		$scope.names = ["Emil", "Tobias", "Linus"];
    });
    </script>
</body>
</html>

