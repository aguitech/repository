<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>mousemove demo</title>
  <style>
  div {
    width: 220px;
    height: 170px;
    margin: 10px 50px 10px 10px;
    background: yellow;
    border: 2px groove;
    float: right;
  }
  p {
    margin: 0;
    margin-left: 10px;
    color: red;
    width: 220px;
    height: 120px;
    padding-top: 70px;
    float: left;
    font-size: 14px;
  }
  span {
    display: block;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<p>
  <span>Move the mouse over the div.</span>
  <span>&nbsp;</span>
</p>
<div></div>
 
<script>
$( "div" ).mousemove(function( event ) {
  var pageCoords = "( " + event.pageX + ", " + event.pageY + " )";
  var clientCoords = "( " + event.clientX + ", " + event.clientY + " )";
  $( "span:first" ).text( "( event.pageX, event.pageY ) : " + pageCoords );
  $( "span:last" ).text( "( event.clientX, event.clientY ) : " + clientCoords );
});
</script>
 
</body>
</html>