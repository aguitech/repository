<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<ul ng-app="myApp" ng-controller="namesCtrl">
		<li ng-repeat="x in names">
			{{x | myFormat}}
		</li>
	</ul>
	<script>
	var app = angular.module('myApp', []);
	app.filter('myFormat', function() {
		return function(x) {
			var i, c, txt = "";
			for (i = 0; i < x.length; i++) {
				c = x[i];
				if (i % 2 == 0) {
					c = c.toUpperCase();
				}else{
					c = c.toLowerCase();
				}
				txt += c;
			}
			return txt;
		};
	});
	app.controller('namesCtrl', function($scope) {
		$scope.names = ['JANI', 'CARL', 'MARGARETH', 'Hege', 'joe', 'Gustav', 'Birgit', 'Mary', 'Kai'];
	});
	</script>
</body>
</html>
