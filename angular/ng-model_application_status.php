<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
    <form ng-app="" name="myForm" ng-init="myText = 'post@myweb.com'">
		Email:
		<input type="email" name="myAddress" ng-model="myText" required>
		<h1>Status</h1>
		{{myForm.myAddress.$valid}}
		{{myForm.myAddress.$dirty}}
		{{myForm.myAddress.$touched}}
    </form>
</body>
</html>
