<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="namesCtrl">
		<table border="1" width="100%">
			<tr>
				<th ng-click="orderByMe('name')">Name</th>
				<th ng-click="orderByMe('country')">Country</th>
			</tr>
			<tr ng-repeat="x in names | orderBy:myOrderBy">
				<td>{{x.name}}</td>
				<td>{{x.country}}</td>
			</tr>
		</table>
	</div>
	<script>
	angular.module('myApp', []).controller('namesCtrl', function($scope) {
		$scope.names = [
			{name:'Jani',country:'Norway'},
			{name:'Carl',country:'Sweden'},
			{name:'Margareth',country:'England'},
			{name:'Hege',country:'Norway'},
			{name:'Joe',country:'Denmark'},
			{name:'Gustav',country:'Sweden'},
			{name:'Birgit',country:'Denmark'},
			{name:'Mary',country:'England'},
			{name:'Kai',country:'Norway'}
		];
		$scope.orderByMe = function(x) {
			$scope.myOrderBy = x;
		}
	});
	</script> 
</body>
</html>
