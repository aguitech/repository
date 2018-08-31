<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>off demo</title>
  <style>
  button {
    margin: 5px;
  }
  button#theone {
    color: red;
    background: yellow;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<button id="theone">Does nothing...</button>
<button id="bind">Add Click</button>
<button id="unbind">Remove Click</button>
<div style="display:none;">Click!</div>
 
<script>
function flash() {
  $( "div" ).show().fadeOut( "slow" );
}
$( "#bind" ).click(function() {
  $( "body" )
    .on( "click", "#theone", flash )
    .find( "#theone" )
      .text( "Can Click!" );
});
$( "#unbind" ).click(function() {
  $( "body" )
    .off( "click", "#theone", flash )
    .find( "#theone" )
      .text( "Does nothing..." );
});
</script>
 
</body>
</html>