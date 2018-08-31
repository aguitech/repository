<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>slideUp demo</title>
  <style>
 div {
   margin: 2px;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<div>
  <button>Hide One</button>
  <input type="text" value="One">
</div>
 
<div>
  <button>Hide Two</button>
  <input type="text" value="Two">
</div>
 
<div>
  <button>Hide Three</button>
  <input type="text" value="Three">
</div>
 
<div id="msg"></div>
 
<script>
$( "button" ).click(function() {
  $( this ).parent().slideUp( "slow", function() {
    $( "#msg" ).text( $( "button", this ).text() + " has completed." );
  });
});
</script>
 
</body>
</html>