<!DOCTYPE html>
<html>
<head>
<style> 
#main {
    width: 350px;
    height: 100px;
    border: 1px solid #c3c3c3;
    display: flex;
}

#main div {
    flex-grow: 1;
    flex-shrink: 1;
    flex-basis: 300px;
}

#myBlueDiv {
    -webkit-animation: mymove 5s infinite; /* Chrome, Safari, Opera */
    animation: mymove 5s infinite;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    50% {flex-shrink: 8;}
}

/* Standard syntax */
@keyframes mymove {
    50% {flex-shrink: 8;}
}
</style>
</head>
<body>

<h1>Animation of flex-shrink</h1>

<p>Gradually change the flex-shrink property of the "blue DIV" from 1 to 8, and back to 1:<p>

<div id="main">
  <div style="background-color:coral;">Red DIV</div>
  <div style="background-color:lightblue;" id="myBlueDiv">Blue DIV</div>
</div>

<p><b>Note:</b> CSS Animations do not work in Internet Explorer 9 and earlier versions.</p>

</body>
</html>
