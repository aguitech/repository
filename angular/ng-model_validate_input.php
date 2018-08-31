<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
    <form ng-app="" name="myForm">
		Email:
		<input type="email" name="myAddress" ng-model="text">
		<span ng-show="myForm.myAddress.$error.email">Not a valid e-mail address</span>
    </form>
</body>
</html>
