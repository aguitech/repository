<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="namesCtrl">
    	<p>Type a letter in the input field:</p>
    	<p><input type="text" ng-model="test"></p>
    	<ul>
    		<li ng-repeat="x in names | filter:test">
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
	<p>The list will only consists of names matching the filter.</p>
</body>
</html>
