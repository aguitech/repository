<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
    <div ng-app="">
        <p>Input something in the input box:</p>
        <p>Name : <input type="text" ng-model="name" placeholder="Enter name here"></p>
        <h1>Hello {{name}}</h1>
    </div>
</body>
</html>
