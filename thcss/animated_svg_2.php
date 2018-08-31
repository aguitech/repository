<!DOCTYPE html>
<html>
	<head>
<!-- <script src="http://chokococo.com/jquery-1.7.2.js"></script> -->
<script src='http://code.jquery.com/jquery-1.8.3.min.js' type='text/javascript'></script>		
<style>
* {margin: 0; padding: 0}

body {
height: 100vh;
background-image: url(http://ataredo.com/external/image/radial.png);
background-size: 100% 100%
}

#writing {
width: 300px;
height: 50px;
position: relative;
top: 50%;
-webkit-transform: translateY(-50%);
transform: translateY(-50%);
margin: auto
}

#button {
width: 100px;
height: 25px;
display: none;
position: absolute;
top: 25px;
left: 0;
right: 0;
margin: auto;
text-align: center;
line-height: 25px;
border: 1px solid;
cursor: pointer;
opacity: 0.5
}
</style>
<script>
$(document).ready(function() {

	setAttributes();
	vectorInit();
});

$(window).on('load', function() {

	drawCurves();
	$('#button').click(function() {
	$(this).hide();
	vectorInit();
	drawCurves();
	});
});

var target = '#writing';

function setAttributes() {

    $(target).find('path').attr({'fill': 'none', 'stroke': 'url(#gradient)', 'stroke-width': '3'});
}

function vectorInit() {

	$(target).each(function() {

	var sequence = $('path', this);
	var iter, vector, length;

	for (iter = 0; iter < sequence.length; iter++) {
	vector = sequence[iter];
	length = vector.getTotalLength();
	$(vector).attr('data-length', length).css({'stroke-dashoffset': length, 'stroke-dasharray': length});
	}
	});
}

var count = 0;

function drawCurves() {

var sequence = $(target).find('path');
var total = sequence.length-1;
var vector = sequence.eq(count);
var length = vector.attr('data-length');

	vector.animate({'stroke-dashoffset': 0}, {
 
		duration: 1.5*length,
		easing: 'linear',
		complete: function() {
		vector.stop(true, true);
		if (count == total) {count = 0; $('#button').fadeIn()}
		else {count++; drawCurves()}
		}
	});
}
</script>
		
	</head>
	<body>
		
		<div id="writing">
         <svg x="0px" y="0px"
	 viewBox="0 0 1366 1166" style="enable-background:new 0 0 1366 1166;" xml:space="preserve" id="svg_test">
           <defs>
             <linearGradient id="gradient" x1="0" y1="0" x2="0" y2="100%">
               <stop stop-color="#041f92" stop-opacity="0.85" offset="0%"/>
               <stop stop-color="#7992fd" stop-opacity="1" offset="100%"/>
             </linearGradient>
           </defs>
           <path d="M311.5,1112.5c0,0-52-603-69-612s-255,7-137,306s274-254,274-254s-81,39-81,81s12,135,39,126s56-187,49-197
	s109,233,84,339s-66,141-79,141s-52-23-46-45s148-174,54-457c0,0,146,409,68-36c0,0,137,423,61-18c0,0,160,394,55-35s-87-376-87-376
	s57,555,155,543s40-221,40-221s-74-6-52,122s90,54,90,54s3-96-25-164c0,0,157,358,67-41l53,150c0,0-51-188,22-199s198,176,198,176
	s-614,203-980,562"/>
         </svg>
         
        </div>
        <div id="button">REPLAY</div>
        		
		
		
	</body>
</html>





