<!DOCTYPE html>
<html style="width: 100%;height: 100%">
<head>
<!--     <script src="../../build/player/lottie.js"></script>-->
     <script src="lottie.js"></script>
     
</head>
<!--<body style=" margin: 0px;height: 100%; font-family: sans-serif;font-size: 10px">-->
<body style="">

<div style="position:absolute; top:0; left:0; right:0; bottom:0;">
	<div style="width:100%;height:100%;" id="bodymovin"></div>
</div>

<script>

    var animData = {
        wrapper: document.getElementById('bodymovin'),
        animType: 'html',
        loop: true,
        prerender: true,
        autoplay: true,
        path: 'data.json'

    };
    var anim = bodymovin.loadAnimation(animData);
</script>
</body>
</html>
