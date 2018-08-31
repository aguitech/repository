<!DOCTYPE html>
<html>
	<script src="js/angular_1.7.2.js"></script>
<body>
	<div ng-app="" ng-init="quantity=1;price=5">
		Quantity: <input type="number" ng-model="quantity">
    	Costs:    <input type="number" ng-model="price">
    	Total in dollar: {{ quantity * price }}
	</div> 
</body>
</html>
