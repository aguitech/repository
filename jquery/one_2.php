<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>one demo</title>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<div class="count">0</div>
<div class="target">Hover/click me</div>
 
<script>
var n = 0;
$(".target").one("click mouseenter", function() {
  $(".count").html(++n);
});
</script>
 
</body>
</html>