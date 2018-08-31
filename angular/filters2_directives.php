<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="namesCtrl">

    
        <ul>
        	<li ng-repeat="x in names | orderBy:'country'">
        		{{ x.name + ', ' + x.country }}
        	</li>
        </ul>
	</div>

	<script src="js/namesController.js"></script>  
</body>
</html>
