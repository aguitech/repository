<style>
@import url(https://fonts.googleapis.com/css?family=Shadows+Into+Light);
iframe {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	height: 100%;
	width: 100%;
}
#wrapper {
	width: 300px;
	height: 600px;
	position: relative;
	margin: -100px auto 0 auto;
}
#rocket {
	background: none repeat scroll 0 0 #fff;
	border-radius: 99% 40% 0 20%;
	box-shadow: -12px 10px 19px -5px rgba(0, 0, 0, 0.3) inset;
	height: 280px;
	left: -7%;
	top: 40%;
	width: 100px;
	z-index: 1;
}
#rocket:after {
	background: none repeat scroll 0 0 #fff;
	border-radius: 40% 99% 20% 0;
	box-shadow: -19px 10px 18px -5px rgba(0, 0, 0, 0.3) inset;
	content: "";
	height: 280px;
	left: 40px;
	position: absolute;
	width: 100px;
	z-index: 100;
}
.rocket__body__part {
	background: none repeat scroll 0 0 #fff;
	border-bottom: 1px solid red;
	border-top: 1px solid red;
	box-shadow: -19px 0px 18px -8px rgba(0, 0, 0, 0.3) inset;
	height: 40px;
	position: relative;
	margin: 0 auto;
	top: 25%;
  left:-1px;
	width: 140px;
	z-index: 1000;
}
.rocket__body__part p {
	text-align: center;
	font-size: 30px;
	margin: 0 auto;
	font-family: 'Shadows Into Light', cursive;
	line-height: 1.2em;
	color: red;
}
.container {
	margin: 0 auto;
	width: 60px;
	height: 60px;
	top: 13%;
	transform-origin: center top;
	animation-name: flicker;
	animation-duration: 3ms;
	animation-delay: 200ms;
	animation-timing-function: ease-in;
	animation-iteration-count: infinite;
	animation-direction: alternate;
}
.flame {
	bottom: 0;
	position: absolute;
	border-bottom-right-radius: 50%;
	border-bottom-left-radius: 50%;
	border-top-left-radius: 50%;
	transform: rotate(135deg) scale(1.5, 1.5);
  -moz-transform: rotate(135deg) scale(1.5, 1.5);
  -webkit-transform: rotate(135deg) scale(1.5, 1.5);
  -o-transform: rotate(135deg) scale(1.5, 1.5);
}
.yellow {
	left: 15px;
	width: 30px;
	height: 30px;
	background: gold;
	box-shadow: 0px 0px 9px 4px gold;
}
.orange {
	left: 10px;
	width: 40px;
	height: 40px;
	background: orange;
	box-shadow: 0px 0px 9px 4px orange;
}
.red {
	left: 5px;
	top: 20px;
	width: 50px;
	height: 50px;
	background: OrangeRed;
	border: 1px solid OrangeRed;
	box-shadow: 0px 0px 5px 4px OrangeRed;
}
.white {
	left: 15px;
	top: 20px;
	width: 30px;
	height: 30px;
	background: white;
	box-shadow: 0px 0px 9px 4px white;
}
.circle {
	border-radius: 50%;
	position: absolute;
}
.blue {
	width: 10px;
	height: 10px;
	left: 25px;
	top: 5px;
	background: SlateBlue;
	box-shadow: 0px 0px 15px 10px #4fc1e9;
}
.black {
	width: 40px;
	height: 40px;
	left: 10px;
	top: -30px;
	background: #ddd;
	border: 1px solid #282A3A;
	box-shadow: 0px 0px 10px 10px #282A3A;
}
 @keyframes flicker {
 0% {
transform: rotate(-1deg);
   -moz-transform: rotate(-1deg);
   -webkit-transform: rotate(-1deg);
}
 20% {
transform: rotate(1deg);
   -moz-transform: rotate(1deg);
   -webkit-transform: rotate(1deg);
}
 40% {
transform: rotate(-1deg);
   -moz-transform: rotate(-1deg);
   -webkit-transform: rotate(-1deg);
}
 60% {
transform: rotate(1deg) scaleY(1.04);
}
 80% {
transform: rotate(-2deg) scaleY(0.92);
   -moz-transform: rotate(-2deg) scaleY(0.92);
   -webkit-transform: rotate(-2deg) scaleY(0.92);
}
 100% {
   transform: rotate(1deg);
   -webkit-transform: rotate(1deg);
   -moz-transform: rotate(1deg);
   }
}
.circlee {
	width: 60px;
	height: 60px;
	border: 4px solid grey;
	top: 3%;
}
.circleee {
	width: 40px;
	height: 40px;
	border: 4px solid grey;
	top: -19%;
}
.circlee, .circleee {
	border-radius: 50%;
	position: relative;
	z-index: 10;
}
#advanced, #advancedd {
	background-image: -moz-radial-gradient(45px 45px 45deg, circle cover, #e6e9ed 0%, #aab2bd 100%, #aab2bd 95%);
	background-image: -webkit-radial-gradient(45px 45px, circle cover, #e6e9ed, #aab2bd);
	background-image: radial-gradient(45px 45px 45deg, circle cover, #e6e9ed 0%, #aab2bd 100%, #aab2bd 95%);
}
#advanced {
	width: 60px;
	height: 60px;
}
#advanced, #advancedd, .container, #rocket, .wings {
	position: relative;
	margin: 0 auto;
}
.wings {
	width: 200px;
	top: -15%;
	left: -1px;
}
#left, #right {
	width: 70px;
	height: 100px;
}
#left {
	float: left;
	-webkit-transform: skew(-30deg);
	-moz-transform: skew(-30deg);
	-o-transform: skew(-30deg);
	background: #ddd;
}
#right {
	float: right;
	-webkit-transform: skew(30deg);
	-moz-transform: skew(30deg);
	-o-transform: skew(30deg);
	background: #ddd;
}
</style>
<iframe src="https://codepen.io/frexuz/full/BvHsk/" frameborder="0"></iframe>
<div id="wrapper">
  <div id="rocket"></div>
  <div class="rocket__body__part">
    <p>N A S A</p>
  </div>
  <div id="advanced" class="circlee"></div>
  <div id="advancedd" class="circleee"></div>
  <div class="container">
    <div class="red flame"></div>
    <div class="orange flame"></div>
    <div class="yellow flame"></div>
    <div class="white flame"></div>
    <div class="blue circle"></div>
    <div class="black circle"></div>
  </div>
  <div class="wings">
    <div id="left"></div>
    <div id="right"></div>
  </div>
</div>