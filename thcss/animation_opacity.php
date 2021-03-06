<!DOCTYPE html>
<html>
<head>
<style> 
#myDIV {
    position: absolute;
    top: 200px;
    width: 300px;
    height: 150px;
    background-color: lightblue;
    border: 1px solid black;
    -webkit-animation: mymove 5s infinite; /* Chrome, Safari, Opera */
    animation: mymove 5s infinite;
}

#DIV2 {
    position: absolute;
    top: 180px;
    left: 30px;
    width: 300px;
    height: 150px;
    background-color: coral;
    border: 1px solid black;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    50% {opacity: 0;}
}

/* Standard syntax */
@keyframes mymove {
    50% {opacity: 0;}
}
</style>
</head>
<body>

<h1>Animation of opacity</h1>

<p>The opacity property is <em>animatable</em> in CSS.</p>
<p><b>Note:</b> CSS Animations do not work in Internet Explorer 9 and earlier versions.</p>

<p>Change the opacity of the blue DIV element from 1 to 0, and back to 1:<p>

<div id="DIV2">
  <h1>Voila!</h1>
</div>

<div id="myDIV">
</div>

</body>
</html>
