<!DOCTYPE html>
<html>
	<script src="js/angular_1.7.2.js"></script>
<body>
    <div ng-app="" ng-init="quantity=1;cost=5">
    	<p>Total in dollar: <span ng-bind="quantity * cost"></span></p>
    </div>
</body>
</html>
