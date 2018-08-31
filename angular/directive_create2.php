<!DOCTYPE html>
<html>
<head>
	<script src="js/angular_1.7.2.js"></script>
</head>
<body ng-app="myApp">
	
    <script>
	var app = angular.module("myApp", []);
	app.directive("w3TestDirective", function() {
		return {
			template : "<h1>Made by a directive!</h1>"
		};
	});
	</script>
	
	
	
	<?php /**
	// ELEMENT NAME
	<w3-test-directive></w3-test-directive>
	
	
	// POR ATRIBUTO	
	<div w3-test-directive></div>

	
	// POR CLASE
	<div class="w3-test-directive"></div>
	
	// POR UN COMENTARIO
	<!-- directive: w3-test-directive -->
	*/?>
</body>
</html>