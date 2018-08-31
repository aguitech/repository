<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
	<script src="js/myApp.js"></script>
	<script src="js/myCtrl.js"></script>
</head>
<body>
    <div ng-app="myApp" ng-controller="myCtrl">
		{{ firstName + " " + lastName }}
    </div>
</body>
</html>