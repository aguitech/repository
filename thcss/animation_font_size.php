<!DOCTYPE html>
<html>
<head>
<style> 
#myDIV {
    border: 1px solid black;
    width: 400px;
    height: 100px;
    -webkit-animation: mymove 5s infinite; /* Chrome, Safari, Opera */
    animation: mymove 5s infinite;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    50% {font-size: 40px;}
}

/* Standard syntax */
@keyframes mymove {
    50% {font-size: 40px;}
}
</style>
</head>
<body>

<h1>Animation of font-size</h1>

<p>Gradually change the font-size of the text:<p>
<div id="myDIV">
  <p>This is a paragraph</p>
</div>

<p><b>Note:</b> CSS Animations do not work in Internet Explorer 9 and earlier versions.</p>

</body>
</html>
