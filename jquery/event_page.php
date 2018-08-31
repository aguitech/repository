<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>event.pageY demo</title>
  <style>
  body {
    background-color: #eef;
  }
  div {
    padding: 20px;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<div id="log"></div>
 
<script>
$( document ).on( "mousemove", function( event ) {
  $( "#log" ).text( "pageX: " + event.pageX + ", pageY: " + event.pageY );
  if(event.pageY<=100 && event.pageY>=0){
	$("body").css({"background":"#DCDCDC"});
  }else{
	$("body").css({"background":"#D0D0D0"});
  }
  if(event.pageX<=100 && event.pageX>=0){
	$("body").css({"background":"yellowgreen"});
  }else{
	$("body").css({"background":"yellow"});
  }
	  
});
</script>
 
</body>
</html>