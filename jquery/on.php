<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>on demo</title>
  <style>
  p {
    background: yellow;
    font-weight: bold;
    cursor: pointer;
    padding: 5px;
  }
  p.over {
    background: #ccc;
  }
  span {
    color: red;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <!-- 
$( "body" ).on( "click", "p", function() {
  alert( $( this ).text() );
});

$( "body" ).on( "click", "a", function( event ) {
  event.preventDefault();
});
$( "#cart" ).on( "mouseenter mouseleave", function( event ) {
  $( this ).toggleClass( "active" );
});
 -->
</head>
<body>
 
<p>Click me!</p>
<span></span>
 
<script>
var count = 0;
$( "body" ).on( "click", "p", function() {
  $( this ).after( "<p>Another paragraph! " + (++count) + "</p>" );
});
</script>
 
</body>
</html>
