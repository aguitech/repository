<!DOCTYPE html>
<html>
<head>
<style> 
#myDIV {
    width: 300px;
    height: 200px;
    border: 1px solid black;
    -webkit-animation: mymove 5s infinite; /* Safari 4.0 - 8.0 */
    animation: mymove 5s infinite;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes mymove {
    50% {border-top-right-radius: 150px;}
}

@keyframes mymove {
    50% {border-top-right-radius: 150px;}
}
</style>
</head>
<body>

<h1>Animation of border-top-right-radius</h1>

<p>Gradually change the border-top-right-radius property from 0 to 150px, then back:<p>
<div id="myDIV"></div>

<p><b>Note:</b> CSS Animations do not work in Internet Explorer 9 and earlier versions.</p>

</body>
</html>