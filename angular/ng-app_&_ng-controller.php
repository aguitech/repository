<!DOCTYPE html>
<html>
	<script src="js/angular_1.7.2.js"></script>
	<script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope) {
        $scope.firstName= "John";
        $scope.lastName= "Doe";
    });
    </script>
<body>
    <div ng-app="myApp" ng-controller="myCtrl">
    	First Name: <input type="text" ng-model="firstName"><br>
        Last Name: <input type="text" ng-model="lastName"><br>
        <br>
        Full Name: {{firstName + " " + lastName}}
    </div>
</body>
</html>
