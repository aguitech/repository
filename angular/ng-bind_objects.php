<!DOCTYPE html>
<html>
	<script src="js/angular_1.7.2.js"></script>
<body>
    <div ng-app="" ng-init="person={firstName:'John',lastName:'Doe'}">
    	<p>The name is <span ng-bind="person.lastName"></span></p>
	</div> 
</body>
</html>
