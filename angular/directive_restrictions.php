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
            restrict : "A",
            template : "<h1>Made by a directive!</h1>"
        };
    });
	</script>
	
	// ELEMENT NAME
	<w3-test-directive></w3-test-directive>
	
	
	// POR ATRIBUTO	
	<div w3-test-directive></div>

	
	// POR CLASE
	<div class="w3-test-directive"></div>
	
	// POR UN COMENTARIO
	<!-- directive: w3-test-directive -->
	
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
	
	<br />
	<pre>
	The legal restrict values are:

    E for Element name
    A for Attribute
    C for Class
    M for Comment

	By default the value is EA, meaning that both Element names and attribute names can invoke the directive.
	</pre>
</body>
</html>