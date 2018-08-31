<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="" ng-init="names=['Jani','Hege','Kai']">
		<ul>
			<li ng-repeat="x in names">
				{{ x }}
			</li>
		</ul>
	</div>
</body>
</html>
