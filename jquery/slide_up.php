<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>slideUp demo</title>
  <style>
  div {
    background: #3d9a44;
    margin: 3px;
    width: 80px;
    height: 40px;
    float: left;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
Click me!
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
 
<script>
$( document.body ).click(function() {
  if ( $( "div:first" ).is( ":hidden" ) ) {
    $( "div" ).show( "slow" );
  } else {
    $( "div" ).slideUp();
  }
});
</script>
 
</body>
</html>