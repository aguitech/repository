<!DOCTYPE html>
<html>
<head>
<style> 
#myDIV {
    width: 300px;
    height: 200px;
    outline: 15px solid red;
    -webkit-animation: mymove 5s infinite; /* Chrome, Safari, Opera */
    animation: mymove 5s infinite;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    50% {outline-color: blue;}
}

/* Standard syntax */
@keyframes mymove {
    50% {outline-color: blue;}
}
</style>
</head>
<body>

<h1>Animation of outline-color</h1>

<p>Gradually change the outline-color property from red to blue then back to red:<p>

<div id="myDIV"></div>

<p><strong>Note:</strong> CSS Animations do not work in Internet Explorer 9 and earlier versions.</p>

</body>
</html>
