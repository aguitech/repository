<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="myCtrl">
    	<p>Use a filter when displaying the array [255, 251, 200]:</p>
    	<ul>
    		<li ng-repeat="x in counts">{{x | myFormat}}</li>
    	</ul>
    	<p>This filter uses a service that converts numbers into hexadecimal values.</p>
	</div>
	<script>
	var app = angular.module('myApp', []);
	app.service('hexafy', function() {
		this.myFunc = function (x) {
			return x.toString(16);
		}
	});
	app.filter('myFormat',['hexafy', function(hexafy) {
		return function(x) {
			return hexafy.myFunc(x);
		};
	}]);
	app.controller('myCtrl', function($scope) {
		$scope.counts = [255, 251, 200];
	});
</script>
</body>
</html>

