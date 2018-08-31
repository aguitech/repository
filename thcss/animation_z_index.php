<!DOCTYPE html>
<html>
<head>
<style> 
div {position: absolute;}

#container div {
    background-color: lightblue;
    border: 1px solid #333333;
    width: 100px;
    height: 100px;
    opacity: 0.5;
}

div#myBox {
    opacity: 1;
    background-color: coral;
    z-index: 1;
    -webkit-animation: mymove 5s infinite linear; /* Chrome, Safari, Opera */
    animation: mymove 5s infinite linear;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    50% {z-index: 5;}
}

/* Standard syntax */
@keyframes mymove {
    50% {z-index: 5;}
}
</style>
</head>
<body style="position:absolute">

<h1>Animation of z-index</h1>

<p>Gradually change the z-index property of "myBox" from 1 to 5, and back to 1:<p>
<div id="container">
  <div id="myBox">myBox</div>
  <div style="top:20px;left:20px;z-index:1;">z-index 1</div>
  <div style="top:40px;left:40px;z-index:2;">z-index 2</div>
  <div style="top:60px;left:60px;z-index:3;">z-index 3</div>
  <div style="top:80px;left:80px;z-index:4;">z-index 4</div>
</div>

<p><strong>Note:</strong> CSS Animations do not work in Internet Explorer 9 and earlier versions.</p>

</body>
</html>
