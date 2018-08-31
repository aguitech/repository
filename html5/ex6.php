<!DOCTYPE html>
<html>
    <head>
    <style type="text/css">
    .star {
    position:absolute;
    layer-background-color:white;
    visibility:visible;
    top:-50px;
    width:50px;
    height:50px;
    font-size:1px;
    background-color:white;
    }
    </style>
     
    <script>
    var starnum = 75; // Numero de estrellas
    var isNS = (document.layers);
    var _all = (isNS)? '' : 'all.';
    var _style = (isNS) ? '' : '.style';
    var xoffset, yoffset, w_x, w_y, tmpx, tmpy, scrlx, scrly;
    function getstartpos(obj) {
    obj.deltay = Math.floor(Math.random() * 12);
    obj.deltax = Math.floor(Math.random() * 12);
    obj.xdir = (Math.floor(Math.random() * 2) == 1) ? '+' : '-';
    obj.ydir = (Math.floor(Math.random() * 2) == 1) ? '+' : '-';
    obj.counter = 1;
    if (isNS) {
    obj.clip.width = 1;
    obj.clip.height = 1;
    obj.moveTo(xoffset+pageXOffset, yoffset+pageYOffset);
    } else {
    obj.width = 1;
    obj.height = 1;
    obj.pixelTop = yoffset+document.body.scrollTop;
    obj.pixelLeft = xoffset+document.body.scrollLeft;
       }
    }
    function movestar(starN) {
    tmpx = starN.deltax*starN.counter+starN.counter;
    tmpy = starN.deltay*starN.counter+starN.counter;
    if (isNS) {
    starN.clip.width = starN.counter / 3;
    starN.clip.height = starN.counter / 3;
    scrlx = pageXOffset;
    scrly = pageYOffset;
    if ((starN.left+tmpx >= w_x+scrlx) || (starN.top+tmpy >= w_y+scrly) || (starN.left-tmpx <= scrlx) || (starN.top-tmpy <= scrly)) {
    getstartpos(starN);
    } else {
    eval('starN.moveBy('+starN.xdir+tmpx+', '+starN.ydir+tmpy+')');
       }
    } else {
    starN.width = starN.counter/3;
    starN.height = starN.counter/3;
    scrlx = document.body.scrollLeft;
    scrly = document.body.scrollTop;
    if ((starN.pixelLeft+tmpx >= w_x+scrlx)||(starN.pixelTop+tmpy >= w_y+scrly) || (starN.pixelLeft-tmpx <= scrlx)||(starN.pixelTop-tmpy <= scrly)) {
    getstartpos(starN);
    } else {
    eval('starN.pixelTop'+starN.ydir+'=tmpy');
    eval('starN.pixelLeft'+starN.xdir+'=tmpx');
       }
    }
    starN.counter++;
    }
    function animate() {
    for(i=1; i <= starnum; i++) {
    movestar(eval('star'+i));
    }
    setTimeout('animate()', 100);
    }
    function findwindowparams() {
    w_x = (isNS) ? window.innerWidth : document.body.clientWidth;
    w_y = (isNS) ? window.innerHeight : document.body.clientHeight;
    xoffset = w_x / 2;
    yoffset = w_y / 2;
    for (i = 1; i <= starnum; i++) {
    getstartpos(eval('star'+i));
       }
    }
    function resizeNS() {
    setTimeout('document.location.reload()', 400);
    }
    (isNS) ? window.onresize = resizeNS : window.onresize = findwindowparams;
    window.onload = new Function("findwindowparams(); animate();");
    </script>
    </head>
    <body bgcolor="#000000">
    <script>
    <!--
    for (i = 1; i <= starnum; i++) {
    document.writeln('<div id="star'+i+'" class="star"></div>');
    eval('var star'+i+'=document.'+_all+'star'+i+_style);
    }
    -->
    </script>
    <h2 align="center" style="color: #A52A2A;">Este seria algo de texto o contenido</h2>
    </body>

</html>