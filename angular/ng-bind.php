<!DOCTYPE html>
<html>
	<script src="js/angular_1.7.2.js"></script>
<body>
    <div ng-app="">
        <p>Input something in the input box:</p>
		<p>Name: <input type="text" ng-model="name"></p>
		<p ng-bind="name"></p>
    </div>
</body>
</html>
