<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>slideDown demo</title>
  <style>
  div {
    background: #cfd;
    margin: 3px;
    width: 50px;
    text-align: center;
    float: left;
    cursor: pointer;
    border: 2px outset black;
    font-weight: bolder;
  }
  input {
    display: none;
    width: 120px;
    float: left;
    margin: 10px;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<div>Push!</div>
<input type="text">
<input type="text" class="middle">
<input type="text">
 
<script>
$( "div" ).click(function() {
  $( this ).css({
    borderStyle: "inset",
    cursor: "wait"
  });
  $( "input" ).slideDown( 1000, function() {
    $( this )
      .css( "border", "2px red inset" )
      .filter( ".middle" )
        .css( "background", "yellow" )
        .focus();
    $( "div" ).css( "visibility", "hidden" );
  });
});
 
</script>
 
</body>
</html>