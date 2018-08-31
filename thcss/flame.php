<style>
body{
  background:black;
}

.container{
  margin:80px auto;
  width: 60px;
  height: 60px;
  position:relative;
  transform-origin:center bottom;
  animation-name: flicker;
  animation-duration:3ms;
  animation-delay:200ms;
  animation-timing-function: ease-in;
  animation-iteration-count: infinite;
  animation-direction: alternate;
}

.flame{
  bottom:0;
  position:absolute;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
  border-top-left-radius: 50%;
  transform:rotate(-45deg) scale(1.5,1.5);
}

.yellow{
  left:15px; 
  width: 30px;
  height: 30px;
  background:gold;
  box-shadow: 0px 0px 9px 4px gold;
}

.orange{
  left:10px; 
  width: 40px;
  height: 40px;
  background:orange;
  box-shadow: 0px 0px 9px 4px orange;
}

.red{
  left:5px;
  width: 50px;
  height: 50px;
  background:OrangeRed;
  box-shadow: 0px 0px 5px 4px OrangeRed;
}

.white{
  left:15px; 
  bottom:-4px;
  width: 30px;
  height: 30px;
  background:white;
  box-shadow: 0px 0px 9px 4px white;
}

.circle{
  border-radius: 50%;
  position:absolute;  
}

.blue{
  width: 10px;
  height: 10px;
  left:25px;
  bottom:-25px; 
  background: SlateBlue;
  box-shadow: 0px 0px 15px 10px SlateBlue;
}

.black{
  width: 40px;
  height: 40px;
  left:10px;
  bottom:-60px;  
  background: black;
  box-shadow: 0px 0px 15px 10px black;
}

@keyframes flicker{
  0%   {transform: rotate(-1deg);}
  20%  {transform: rotate(1deg);}
  40%  {transform: rotate(-1deg);}
  60%  {transform: rotate(1deg) scaleY(1.04);}
  80%  {transform: rotate(-2deg) scaleY(0.92);}
  100% {transform: rotate(1deg);}
}
</style>
<div class="container">
  <div class="red flame"></div>
  <div class="orange flame"></div>
  <div class="yellow flame"></div>
  <div class="white flame"></div>
  <div class="blue circle"></div>
  <div class="black circle"></div>
</div>