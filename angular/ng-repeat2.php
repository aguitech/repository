<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="" ng-init="names=[
		{name:'Jani',country:'Norway'},
		{name:'Hege',country:'Sweden'},
		{name:'Kai',country:'Denmark'}]">
		<ul>
			<li ng-repeat="x in names">
				{{ x.name + ', ' + x.country }}
			</li>
		</ul>
	</div>
</body>
</html>
