<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp">
		Convert the number 255, using a custom made service inside a custom made filter:
		<h1>{{255 | myFormat}}</h1>
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
	</script>
</body>
</html>

