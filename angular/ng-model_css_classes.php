<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
	<style>
    input.ng-invalid {
        background-color: lightblue;
    }
    </style>
</head>
<body>
	<form ng-app="" name="myForm">
		Enter your name:
		<input name="myName" ng-model="myText" required>
	</form>
	<pre>
	The ng-model directive adds/removes the following classes, according to the status of the form field:

    ng-empty
    ng-not-empty
    ng-touched
    ng-untouched
    ng-valid
    ng-invalid
    ng-dirty
    ng-pending
    ng-pristine
	
	</pre>
</body>
</html>
