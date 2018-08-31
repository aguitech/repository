<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="myCtrl">
        <input ng-model="name">
        <h1>My name is {{name}}</h1>
    </div>
    <script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope) {
        $scope.name = "Hector Aguilar";
    });
    </script> 
</body>
</html>