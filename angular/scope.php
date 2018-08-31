<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>

    <div ng-app="myApp" ng-controller="myCtrl">
    	<h1>{{carname}}</h1>
    </div>
    
    <script>
    var app = angular.module('myApp', []);
    
    app.controller('myCtrl', function($scope) {
        $scope.carname = "Volvo";
    });
    </script>
</body>
</html>
