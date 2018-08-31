<html>
<head>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <!-- 
    
    // A $( document ).ready() block.
    $( document ).ready(function() {
        console.log( "ready!" );
    });
    
    
    
    
    
    // Shorthand for $( document ).ready()
    $(function() {
        console.log( "ready!" );
    });
    
    
    
    
    
    // Passing a named function instead of an anonymous function.
 
    function readyFn( jQuery ) {
        // Code to run when the document is ready.
    }
     
    $( document ).ready( readyFn );
    // or:
    $( window ).on( "load", readyFn );
    
     -->
    
    <script>
    $( document ).ready(function() {
        console.log( "document loaded" );
    });
 
    $( window ).on( "load", function() {
        console.log( "window loaded" );
    });
    </script>
</head>
<body>
    <iframe src="http://aguitech.com"></iframe>
</body>
</html>