<style>
.animation_circle{
	animation: mymove2 5s infinite;
}
@keyframes mymove2 {
    0%   {top: 0px; background: #ce0000; width: 0%;}
	20%   {top: 0px; background: #c6b500; width: 20%;}
	40%   {top: 0px; background: #24c600; width: 40%;}
	60%   {top: 0px; background: #00c6b2; width: 60%;}
	80%   {top: 0px; background: #0039bf; width: 80%;}
    100% {top: 0px; background: #8500bf; width: 100%;}
}
.animacion_circulo{
	/*stroke-dasharray: 20;*/
	
	animation: dash 5s linear;
}
@keyframes dash {
  to {
    /*stroke-dashoffset: 1000;*/
	stroke-dashoffset: 1000;
    animation: dash 5s linear forwards;
  }
  
}
</style>
<!-- <svg viewbox="0 0 36 36" style="position:absolute; top:0px; z-index:0;" class="animation_circle">-->
<svg viewbox="0 0 36 36" style="position:absolute; top:0px; z-index:0;" class="">
  <path
    d="M18 2.0845
      a 15.9155 15.9155 0 0 1 0 31.831
      a 15.9155 15.9155 0 0 1 0 -31.831"
    fill="none"
    stroke="#444";
    stroke-width="1";
    
    
  />
</svg>
<svg viewbox="0 0 36 36" style="position:absolute; top:0; z-index:0;">
  <path
    d="M18 2.0845
      a 15.9155 15.9155 0 0 1 0 31.831
      a 15.9155 15.9155 0 0 1 0 -31.831"
    fill="none"
    stroke="#876";
    stroke-width="1";
    stroke-dasharray="75, 100"
    class="animacion_circulo"
  />
</svg>
