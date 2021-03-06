<!DOCTYPE html>
<html>
	<head>
		<script>
		var cube = document.querySelector('.cube');
		var radioGroup = document.querySelector('.radio-group');
		var currentClass = '';

		function changeSide() {
		  var checkedRadio = radioGroup.querySelector(':checked');
		  var showClass = 'show-' + checkedRadio.value;
		  if ( currentClass ) {
		    cube.classList.remove( currentClass );
		  }
		  cube.classList.add( showClass );
		  currentClass = showClass;
		}
		// set initial side
		changeSide();

		radioGroup.addEventListener( 'change', changeSide );
		</script>
		<style>
        * { box-sizing: border-box; }

section, footer, nav {
  display: block;
}

body {
  max-width: 720px;
  margin: 0 auto;
  padding: 10px;
  font-family: 'Helvetica Neue', Arial, sans-serif;
  color: #333;
  line-height: 1.5em;
}

a {
  color: hsl( 220, 90%, 40% );
  text-decoration: none;
}

a:hover {
  background-color: hsl( 220, 90%, 50% );
  color: white;
}

button {
  font-size: 16px;
}

footer {
  margin: 60px 0;
  padding-top: 40px;
  border-top: 1px solid #CCC;
  font-size: 0.9em;
  color: #777;
}

hr {
  border: none;
  border-top: 1px solid #CCC;
  margin: 40px 0;
}

/* code */

code, pre {
  font-family: 'Consolas', 'Monaco', 'Menlo', monospace;
  font-size: 15px;
  background: #F2F2F2;
}

code { padding: 2px 4px; }

a:hover code {
  background-color: hsl( 220, 90%, 50% );
  color: white;
}

pre {
  padding: 10px;
  white-space: pre-wrap;
}

pre code { padding: 0; }

figure.highlight {
  margin: 20px 0;
}

/**** Docs ****/

body { max-width: 920px; }

blockquote {
  margin-left: 0;
  padding: 10px;
  background: #EEE;
}

.content img {
  border: 10px solid #EEE;
  display: block;
  max-width: 100%;
}

.site-nav__title {
  font-size: 20px;
}

.site-nav__list {
  margin: 0;
  padding: 0;
  list-style: none;
}

.site-nav__title a,
.site-nav__list a {
  display: block;
  padding: 5px 10px;
}

/* seleted nav item */
.page--intro .nav-item-intro a,
.page--perspective .nav-item-perspective a,
.page--functions .nav-item-functions a,
.page--card .nav-item-card a,
.page--cube .nav-item-cube a,
.page--box .nav-item-box a,
.page--carousel .nav-item-carousel a,
.page--conclusion .nav-item-conclusion a {
  font-weight: bold;
  color: #333;
}
.page--intro .nav-item-intro a:hover,
.page--perspective .nav-item-perspective a:hover,
.page--functions .nav-item-functions a:hover,
.page--card .nav-item-card a:hover,
.page--cube .nav-item-cube a:hover,
.page--box .nav-item-box a:hover,
.page--carousel .nav-item-carousel a:hover,
.page--conclusion .nav-item-conclusion a:hover {
  color: white;
}

@media screen and (min-width: 768px) {

  .content {
    padding-left: 220px;
  }

  .site-nav {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
  }

  .site-nav__container {
    max-width: 920px;
    margin: 0 auto;
    position: relative;
  }

  .site-nav__title,
  .site-nav__list {
    width: 220px;
    padding-right: 10px;
    position: absolute; /* HACK to show over content */
  }

  .site-nav__list {
    top: 75px;
  }

  .site-nav__title {
    font-size: 22px;
    margin: 10px 0;
  }

  footer {
    margin-left: 220px;
  }

}


/******* Pygments *******/

code .s1,
code .s { color: #0A2; } /* string */
code .mi, /* integer */
code .cp { color: #07D; } /* doctype */
code .k { color: #E31; } /* keyword */
code .kd, /* storage */
code .na { color: #D31; } /* markup attribute */
code .p  { color: #456; } /* punctuation */
code .o  { color: #A62; }   /* operator */
code .nb { color: #3A3; } /* support, CSS color value */

/* comment */
code .c,
code .c1 { color: #999; font-style: italic; }

code .nt { color: #37B; } /* Markup open tag */

code .nf { color: #567; } /* css id */
code .nc { color: #486; }  /* CSS class */
code .m  { color: #35B; } /* CSS value */
code .nd { color: #38D; } /* CSS pseudo selector */

/* radio-button-group
------------------------- */


.radio-button-group label {
  margin-right: 10px;
}

/* edit-codepen
------------------------- */

.edit-codepen {
  font-size: 0.9em;
}

.edit-codepen .codepen-logo {
  display: inline-block;
  vertical-align: middle;
}

/* demos
------------------------- */

.scene {
  border: 1px solid #CCC;
  margin: 40px 0;
  position: relative;
}

/* ---- options ---- */

.options {
  position: relative;
  z-index: 2; /* above demo content */
  margin: 40px 0;
}

.options__row {
  margin: 10px 0;
}

/* ---- set-persp ---- */

.scene--set-persp {
  width: 200px;
  height: 200px;
}

.set-persp-panel {
  width: 100%;
  height: 100%;
}

.set-persp-panel--red {
  background: red;
  transform: perspective(400px) rotateY(45deg);
}

.scene--set-persp--blue {
  perspective: 400px;
}

.set-persp-panel--blue {
  background: blue;
  transform: rotateY(45deg);
}

/* ---- persp-children---- */

.scene--persp-children {
  width: 200px;
  height: 200px;
}

.persp-children-panel {
  width: 55px;
  height: 55px;
  float: left;
  margin: 5px;
}

.persp-children-panel--separate {
  background: red;
  transform: perspective(400px) rotateY(45deg);
}

.scene--persp-children--together {
  perspective: 400px;
}

.persp-children-panel--together {
  background: blue;
  transform: rotateY(45deg);
}

/* ---- cube---- */

.scene--cube {
  width: 200px;
  height: 200px;
  margin: 80px 0;
  perspective: 500px;
}

.scene--persp-cube {
  perspective: 400px;
}

.cube {
  width: 200px;
  height: 200px;
  position: relative;
  transform-style: preserve-3d;
  transform: translateZ(-100px);
}

.scene--hero {
  height: 200px;
  margin: 80px 0;
  perspective: 500px;
  border: none;
}

.cube--hero {
  margin: 0 auto;
}

.cube.is-spinning {
  animation: spinCube 8s infinite ease-in-out;
}

@keyframes spinCube {
    0% { transform: translateZ(-100px) rotateX(  0deg) rotateY(  0deg); }
  100% { transform: translateZ(-100px) rotateX(360deg) rotateY(360deg); }
}

.cube__face {
  position: absolute;
  width: 200px;
  height: 200px;
  border: 2px solid black;
  line-height: 200px;
  font-size: 40px;
  font-weight: bold;
  color: white;
  text-align: center;
}

.cube.is-backface-hidden .cube__face {
  backface-visibility: hidden;
}

.cube__face--front  { background: hsla(  0, 100%, 50%, 0.7); }
.cube__face--right  { background: hsla( 60, 100%, 50%, 0.7); }
.cube__face--back   { background: hsla(120, 100%, 50%, 0.7); }
.cube__face--left   { background: hsla(180, 100%, 50%, 0.7); }
.cube__face--top    { background: hsla(240, 100%, 50%, 0.7); }
.cube__face--bottom { background: hsla(300, 100%, 50%, 0.7); }

.cube__face--front  { transform: rotateY(  0deg) translateZ(100px); }
.cube__face--right  { transform: rotateY( 90deg) translateZ(100px); }
.cube__face--back   { transform: rotateY(180deg) translateZ(100px); }
.cube__face--left   { transform: rotateY(-90deg) translateZ(100px); }
.cube__face--top    { transform: rotateX( 90deg) translateZ(100px); }
.cube__face--bottom { transform: rotateX(-90deg) translateZ(100px); }

.cube.show-front  { transform: translateZ(-100px) rotateY(   0deg); }
.cube.show-right  { transform: translateZ(-100px) rotateY( -90deg); }
.cube.show-back   { transform: translateZ(-100px) rotateY(-180deg); }
.cube.show-left   { transform: translateZ(-100px) rotateY(  90deg); }
.cube.show-top    { transform: translateZ(-100px) rotateX( -90deg); }
.cube.show-bottom { transform: translateZ(-100px) rotateX(  90deg); }

/* cube--step0 */

.cube--step0 {
  position: relative;
  width: auto;
  height: auto;
  transform: none;
}

.cube--step0 .cube__face {
  display: inline-block;
  position: static;
  margin: 0 10px 10px 0;
  transform: none;
}

/* cube--step1 */

.cube--step1 {
  transform: none;
}

.cube--step1 .cube__face {
  transform: none;
}

/* cube--step2 */

.cube--step2 {
  transform: none;
}

.cube--step2 .cube__face--front  { transform: rotateY(  0deg); }
.cube--step2 .cube__face--right  { transform: rotateY( 90deg); }
.cube--step2 .cube__face--back   { transform: rotateY(180deg); }
.cube--step2 .cube__face--left   { transform: rotateY(-90deg); }
.cube--step2 .cube__face--top    { transform: rotateX( 90deg); }
.cube--step2 .cube__face--bottom { transform: rotateX(-90deg); }

/* cube--step3 */

.cube--step3 {
  transform: none;
}

/* cube--rotate */

.cube--rotate { transition: transform 1s; }

/* ---- scene--transform-func ---- */

.scene--transform-func {
  display: inline-block;
  width: 200px;
  height: 200px;
  margin: 60px 60px 60px 0;
  perspective: 600px;
}

.transform-func-panel {
  width: 200px;
  height: 200px;
  background: hsla(0, 100%, 50%, 0.7);
  line-height: 200px;
  color: white;
  font-size: 18px;
  text-align: center;
}


/* ---- pixelation ---- */

.pixelation-p {
  text-align: center;
  margin: 40px 0;
}

/* ---- card-flip ---- */

.scene--card {
  width: 200px;
  height: 260px;
  perspective: 600px;
}

.card {
  width: 100%;
  height: 100%;
  transition: transform 1s;
  transform-style: preserve-3d;
  cursor: pointer;
}

.card.is-flipped {
  transform: rotateY(180deg);
}

.card--slide {
  transform-origin: center right;
}

.card--slide.is-flipped {
  transform: translateX(-100%) rotateY(-180deg);
}

.card__face {
  position: absolute;
  width: 100%;
  height: 100%;
  line-height: 260px;
  color: white;
  text-align: center;
  font-weight: bold;
  font-size: 40px;
  backface-visibility: hidden;
}

.card__face--front {
  background: red;
}

.card__face--back {
  background: blue;
  transform: rotateY( 180deg );
}

/* card--step0 */

.card--step0 .card__face {
  display: inline-block;
  position: static;
  width: 200px;
  height: 260px;
  margin: 0 10px 10px 0;
  transform: none;
  cursor: default;
}


/* ---- box ---- */


.scene--box {
  width: 300px;
  height: 200px;
  margin: 60px 0;
  perspective: 500px;
}

.box {
  width: 300px;
  height: 200px;
  position: relative;
  transform-style: preserve-3d;
  transform: translateZ(-50px);
}

.box__face {
  position: absolute;
  border: 2px solid black;
  font-size: 40px;
  font-weight: bold;
  color: white;
  text-align: center;
}

.box__face--front,
.box__face--back {
  width: 300px;
  height: 200px;
  line-height: 200px;
}

.box__face--right,
.box__face--left {
  width: 100px;
  height: 200px;
  left: 100px;
  line-height: 200px;
}

.box__face--top,
.box__face--bottom {
  width: 300px;
  height: 100px;
  top: 50px;
  line-height: 100px;
}

.box__face--front  { background: hsla(  0, 100%, 50%, 0.7); }
.box__face--right  { background: hsla( 60, 100%, 50%, 0.7); }
.box__face--back   { background: hsla(120, 100%, 50%, 0.7); }
.box__face--left   { background: hsla(180, 100%, 50%, 0.7); }
.box__face--top    { background: hsla(240, 100%, 50%, 0.7); }
.box__face--bottom { background: hsla(300, 100%, 50%, 0.7); }

.box__face--front  { transform: rotateY(  0deg) translateZ( 50px); }
.box__face--back   { transform: rotateY(180deg) translateZ( 50px); }

.box__face--right  { transform: rotateY( 90deg) translateZ(150px); }
.box__face--left   { transform: rotateY(-90deg) translateZ(150px); }

.box__face--top    { transform: rotateX( 90deg) translateZ(100px); }
.box__face--bottom { transform: rotateX(-90deg) translateZ(100px); }

.box.show-front  { transform: translateZ( -50px) rotateY(   0deg); }
.box.show-back   { transform: translateZ( -50px) rotateY(-180deg); }
.box.show-right  { transform: translateZ(-150px) rotateY( -90deg); }
.box.show-left   { transform: translateZ(-150px) rotateY(  90deg); }
.box.show-top    { transform: translateZ(-100px) rotateX( -90deg); }
.box.show-bottom { transform: translateZ(-100px) rotateX(  90deg); }

/* box--step0 */

.box--step0 {
  position: relative;
  width: auto;
  height: auto;
  transform: none;
}

.box--step0 .box__face {
  display: inline-block;
  position: static;
  margin: 0 10px 10px 0;
  transform: none;
}

/* box--step1 */

.box--step1 {
  transform: none;
}

.box--step1 .box__face {
  transform: none;
}

.box--step1a .box__face {
  top: 0;
  left: 0;
}

/* box--rotate */

.box--rotate { transition: transform 1s; }


/* carousel
------------------------- */


.scene--carousel {
  width: 210px;
  height: 140px;
  margin: 40px auto;
  perspective: 1000px;
}

.carousel {
  width: 100%;
  height: 100%;
  position: absolute;
  transform: translateZ(-288px);
  transform-style: preserve-3d;
  transition: transform 1s;
}

.carousel__cell {
  position: absolute;
  width: 190px;
  height: 120px;
  left: 10px;
  top: 10px;
  border: 2px solid black;
  line-height: 116px;
  font-size: 80px;
  font-weight: bold;
  color: white;
  text-align: center;
}

.carousel__cell:nth-child(9n+1) { background: hsla(  0, 100%, 50%, 0.8); }
.carousel__cell:nth-child(9n+2) { background: hsla( 40, 100%, 50%, 0.8); }
.carousel__cell:nth-child(9n+3) { background: hsla( 80, 100%, 50%, 0.8); }
.carousel__cell:nth-child(9n+4) { background: hsla(120, 100%, 50%, 0.8); }
.carousel__cell:nth-child(9n+5) { background: hsla(160, 100%, 50%, 0.8); }
.carousel__cell:nth-child(9n+6) { background: hsla(200, 100%, 50%, 0.8); }
.carousel__cell:nth-child(9n+7) { background: hsla(240, 100%, 50%, 0.8); }
.carousel__cell:nth-child(9n+8) { background: hsla(280, 100%, 50%, 0.8); }
.carousel__cell:nth-child(9n+0) { background: hsla(320, 100%, 50%, 0.8); }

.carousel__cell:nth-child(1) { transform: rotateY(  0deg) translateZ(288px); }
.carousel__cell:nth-child(2) { transform: rotateY( 40deg) translateZ(288px); }
.carousel__cell:nth-child(3) { transform: rotateY( 80deg) translateZ(288px); }
.carousel__cell:nth-child(4) { transform: rotateY(120deg) translateZ(288px); }
.carousel__cell:nth-child(5) { transform: rotateY(160deg) translateZ(288px); }
.carousel__cell:nth-child(6) { transform: rotateY(200deg) translateZ(288px); }
.carousel__cell:nth-child(7) { transform: rotateY(240deg) translateZ(288px); }
.carousel__cell:nth-child(8) { transform: rotateY(280deg) translateZ(288px); }
.carousel__cell:nth-child(9) { transform: rotateY(320deg) translateZ(288px); }

/* carousel--step0 */

.carousel--step0 {
  width: auto;
  height: auto;
  transform: none;
  position: relative;
}

.carousel--step0 .carousel__cell {
  display: inline-block;
  position: static;
  margin: 0 10px 10px 0;
  transform: none;
}

/* carousel--dynamic */

.carousel--dynamic .carousel__cell {
  transition: transform 1s, opacity 1s;
}

.dynamic-carousel-options {
  text-align: center;
  position: relative;
  z-index: 2;
  background: hsla(0, 0%, 100%, 0.8);
}

        </style>	
	</head>
	<body>
		
	<div class="scene scene--hero">
        <div class="cube cube--hero is-spinning">
          <div class="cube__face cube__face--front">front</div>
          <div class="cube__face cube__face--right">right</div>
          <div class="cube__face cube__face--back">back</div>
          <div class="cube__face cube__face--left">left</div>
          <div class="cube__face cube__face--top">top</div>
          <div class="cube__face cube__face--bottom">bottom</div>
        </div>
      </div>
        		
	</body>
</html>