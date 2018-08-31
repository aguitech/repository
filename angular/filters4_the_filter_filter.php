<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="namesCtrl">
        <ul>
        	<li ng-repeat="x in names | filter : 'i'">
        		{{ x }}
        	</li>
        </ul>
	</div>

	<script>
	angular.module('myApp', []).controller('namesCtrl', function($scope) {
		$scope.names = [
			'Jani',
			'Carl',
			'Margareth',
			'Hege',
			'Joe',
			'Gustav',
			'Birgit',
			'Mary',
			'Kai'
		];
	});
	</script>
	<p>This example displays only the names containing the letter "i".</p>
</body>
</html>
