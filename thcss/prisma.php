<script src="/js/jquery-1.7.2.js"></script>
<script>
var box = document.querySelector('.box');
var radioGroup = document.querySelector('.radio-group');
var currentClass = '';

function changeSide() {
  var checkedRadio = radioGroup.querySelector(':checked');
  var showClass = 'show-' + checkedRadio.value;
  if ( currentClass ) {
    box.classList.remove( currentClass );
  }
  box.classList.add( showClass );
  currentClass = showClass;
}
// set initial side
changeSide();

radioGroup.addEventListener( 'change', changeSide );
</script>
<style>
body { font-family: sans-serif; }

.scene {
  width: 300px;
  height: 200px;
  border: 1px solid #CCC;
  margin: 80px;
  perspective: 400px;
}

.box {
  width: 300px;
  height: 200px;
  position: relative;
  transform-style: preserve-3d;
  transform: translateZ(-50px);
  transition: transform 1s;
}

.box.show-front  { transform: translateZ( -50px) rotateY(   0deg); }
.box.show-back   { transform: translateZ( -50px) rotateY(-180deg); }
.box.show-right  { transform: translateZ(-150px) rotateY( -90deg); }
.box.show-left   { transform: translateZ(-150px) rotateY(  90deg); }
.box.show-top    { transform: translateZ(-100px) rotateX( -90deg); }
.box.show-bottom { transform: translateZ(-100px) rotateX(  90deg); }


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

label { margin-right: 10px; }
</style>
<div class="scene">
  <div class="box">
    <div class="box__face box__face--front">front</div>
    <div class="box__face box__face--back">back</div>
    <div class="box__face box__face--right">right</div>
    <div class="box__face box__face--left">left</div>
    <div class="box__face box__face--top">top</div>
    <div class="box__face box__face--bottom">bottom</div>
  </div>
</div>
<p class="radio-group">
  <label>
    <input type="radio" name="rotate-cube-side" value="front" checked /> front
  </label>
  <label>
    <input type="radio" name="rotate-cube-side" value="right" /> right
  </label>
  <label>
    <input type="radio" name="rotate-cube-side" value="back" /> back
  </label>
  <label>
    <input type="radio" name="rotate-cube-side" value="left" /> left
  </label>
  <label>
    <input type="radio" name="rotate-cube-side" value="top" /> top
  </label>
  <label>
    <input type="radio" name="rotate-cube-side" value="bottom" /> bottom
  </label>
</p>
