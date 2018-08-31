<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="personCtrl">

	First Name: <input type="text" ng-model="firstName"><br>
    Last Name: <input type="text" ng-model="lastName"><br>
    <br>
    Full Name: {{fullName()}}
    <p>The lastname with FILTER uppercase is {{ lastName | uppercase }}</p>
    <p>Full Name with FILTER uppercase: {{fullName() | uppercase }}</p>
	
	<p>The lastname with FILTER lowercase is {{ lastName | lowercase }}</p>
    <p>Full Name with FILTER lowercase: {{fullName() | lowercase }}</p>
	
	
    </div>

	<script src="js/personController.js"></script>  
</body>
</html>
