<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<h2>Validation Example</h2>
	<form  ng-app="myApp"  ng-controller="validateCtrl" name="myForm" novalidate>
    	<p>Username:<br>
    		<input type="text" name="user" ng-model="user" required>
    		<span style="color:red" ng-show="myForm.user.$dirty && myForm.user.$invalid">
    			<span ng-show="myForm.user.$error.required">Username is required.</span>
    		</span>
    	</p>
    	<p>Email:<br>
    		<input type="email" name="email" ng-model="email" required>
    		<span style="color:red" ng-show="myForm.email.$dirty && myForm.email.$invalid">
        		<span ng-show="myForm.email.$error.required">Email is required.</span>
        		<span ng-show="myForm.email.$error.email">Invalid email address.</span>
    		</span>
    	</p>
    	<p>
    		<input type="submit" ng-disabled="myForm.user.$dirty && myForm.user.$invalid ||
      		myForm.email.$dirty && myForm.email.$invalid">
    	</p>
	</form>
	<script>
	var app = angular.module('myApp', []);
	app.controller('validateCtrl', function($scope) {
		$scope.user = 'John Doe';
		$scope.email = 'john.doe@gmail.com';
	});
	</script>
</body>
</html>
