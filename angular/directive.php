<!DOCTYPE html>
<html>
	<script src="js/angular_1.7.2.js"></script>
	<script>
    var app = angular.module("myApp", []);
	app.directive("w3TestDirective", function() {
		return {
			template : "I was made in a directive constructor!"
		};
    });
    </script>
<body>
    <div ng-app="myApp" w3-test-directive></div>
</body>
</html>
