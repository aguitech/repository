<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>on demo</title>
  <style>
  p {
    color: red;
  }
  span {
    color: blue;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<p>Has an attached custom event.</p>
<button>Trigger custom event</button>
<span style="display:none;"></span>
 
<script>
$( "p" ).on( "myCustomEvent", function( event, myName ) {
  $( this ).text( myName + ", hi there!" );
  $( "span" )
    .stop()
    .css( "opacity", 1 )
    .text( "myName = " + myName )
    .fadeIn( 30 )
    .fadeOut( 1000 );
});
$( "button" ).click(function () {
  $( "p" ).trigger( "myCustomEvent", [ "John" ] );
});
</script>
 
</body>
</html>