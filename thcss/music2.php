<script src="/js/jquery-3.3.1.js"></script>
<style>
@keyframes flicker{
  0%   {transform: rotate(-1deg);}
  20%  {transform: rotate(1deg);}
  40%  {transform: rotate(-1deg);}
  60%  {transform: rotate(1deg) scaleY(1.04);}
  80%  {transform: rotate(-2deg) scaleY(0.92);}
  100% {transform: rotate(1deg);}
}


.colores_1{
	width: 100px;
	height: 100px;
	background: red;
	position: relative;
	-webkit-animation: mymove 5s infinite; /* Safari 4.0 - 8.0 */
	animation: mymove 5s infinite;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes mymove {
    0%   {top: 0px; background: red; width: 100px;}
    100% {top: 200px; background: yellow; width: 300px;}
}

/* Standard syntax */
@keyframes mymove {
    0%   {top: 0px; background: red; width: 100px;}
    100% {top: 200px; background: yellow; width: 300px;}
}


@-webkit-keyframes mymove2 {
    0%   {top: 60px; height: 10px;}
    10%   {top: 55px; height: 20px;}
    20%   {top: 50px; height: 30px;}
    30%   {top: 45px; height: 40px;}
    40%   {top: 40px; height: 50px;}
    50%   {top: 35px; height: 60px;}
    60%   {top: 30px; height: 70px;}
    70%   {top: 25px; height: 80px;}
    80%   {top: 20px; height: 90px;}
    90%   {top: 15px; height: 100px;}
    100% {top: 10px; height:110px;}
}

/* Standard syntax */
@keyframes mymove2 {
    0%   {top: 60px; height: 10px;}
    10%   {top: 55px; height: 20px;}
    20%   {top: 50px; height: 30px;}
    30%   {top: 45px; height: 40px;}
    40%   {top: 40px; height: 50px;}
    50%   {top: 35px; height: 60px;}
    60%   {top: 30px; height: 70px;}
    70%   {top: 25px; height: 80px;}
    80%   {top: 20px; height: 90px;}
    90%   {top: 15px; height: 100px;}
    100% {top: 10px; height:110px;}
}

/**
@-webkit-keyframes mymove2 {
    0%   {top: 60px; background: red; height: 10px;}
    10%   {top: 55px; background: red; height: 20px;}
    20%   {top: 50px; background: red; height: 30px;}
    30%   {top: 45px; background: red; height: 40px;}
    40%   {top: 40px; background: red; height: 50px;}
    50%   {top: 35px; background: red; height: 60px;}
    60%   {top: 30px; background: red; height: 70px;}
    70%   {top: 25px; background: red; height: 80px;}
    80%   {top: 20px; background: red; height: 90px;}
    90%   {top: 15px; background: red; height: 100px;}
    100% {top: 10px; background: yellow; height:110px;}
}


@keyframes mymove2 {
    0%   {top: 60px; background: red; height: 10px;}
    10%   {top: 55px; background: red; height: 20px;}
    20%   {top: 50px; background: red; height: 30px;}
    30%   {top: 45px; background: red; height: 40px;}
    40%   {top: 40px; background: red; height: 50px;}
    50%   {top: 35px; background: red; height: 60px;}
    60%   {top: 30px; background: red; height: 70px;}
    70%   {top: 25px; background: red; height: 80px;}
    80%   {top: 20px; background: red; height: 90px;}
    90%   {top: 15px; background: red; height: 100px;}
    100% {top: 10px; background: yellow; height:110px;}
}
*/


.colores{
	width: 10px;
	height: 10px;
	position: relative;
	-webkit-animation: mymove2 1s infinite; /* Safari 4.0 - 8.0 */
	animation: mymove2 1s infinite;
	float:left;
}

.colores2{
	width: 10px;
	height: 10px;
	position: relative;
	-webkit-animation: mymove3 1s infinite; /* Safari 4.0 - 8.0 */
	animation: mymove3 1s infinite;
	float:left;
}

.colores3{
	width: 10px;
	height: 10px;
	position: relative;
	-webkit-animation: mymove4 1s infinite; /* Safari 4.0 - 8.0 */
	animation: mymove4 1s infinite;
	float:left;
}

@-webkit-keyframes mymove3 {
    0%   {top: 30px; height: 70px;}
    10%   {top: 35px; height: 60px;}
    20%   {top: 40px; height: 50px;}
    
    30%   {top: 45px; height: 40px;}
    40%   {top: 40px; height: 50px;}
    50%   {top: 35px; height: 60px;}
    60%   {top: 30px; height: 70px;}
    70%   {top: 25px; height: 80px;}
    
    80%   {top: 30px; height: 70px;}
    90%   {top: 35px; height: 60px;}
    100% {top: 40px; height:50px;}
}

/* Standard syntax */
@keyframes mymove3 {
    0%   {top: 30px; height: 70px;}
    10%   {top: 35px; height: 60px;}
    20%   {top: 40px; height: 50px;}
    
    30%   {top: 45px; height: 40px;}
    40%   {top: 40px; height: 50px;}
    50%   {top: 35px; height: 60px;}
    60%   {top: 30px; height: 70px;}
    70%   {top: 25px; height: 80px;}
    
    80%   {top: 30px; height: 70px;}
    90%   {top: 35px; height: 60px;}
    100% {top: 40px; height:50px;}
}


@-webkit-keyframes mymove4 {
    10%   {top: 15px; height: 100px;}
    20%   {top: 20px; height: 90px;}
    30%   {top: 25px; height: 80px;}
    40%   {top: 30px; height: 70px;}
    50%   {top: 35px; height: 60px;}
    60%   {top: 30px; height: 70px;}
    70%   {top: 25px; height: 80px;}
    80%   {top: 20px; height: 90px;}
    90%   {top: 15px; height: 100px;}
    100% {top: 10px; height:110px;}
}

/* Standard syntax */
@keyframes mymove4 {
    10%   {top: 15px; height: 100px;}
    20%   {top: 20px; height: 90px;}
    30%   {top: 25px; height: 80px;}
    40%   {top: 30px; height: 70px;}
    50%   {top: 35px; height: 60px;}
    60%   {top: 30px; height: 70px;}
    70%   {top: 25px; height: 80px;}
    80%   {top: 20px; height: 90px;}
    90%   {top: 15px; height: 100px;}
    100% {top: 10px; height:110px;}
}
</style>

<!-- 
<div class="colores_1"></div>
-->
<div style="min-height:100%; background:gray;">
<div class="colores" style="background:#cc0c19;">
	a
</div>
<div class="colores3" style="background:#ff1f27;">
	b
</div>
<div class="colores2" style="background:#fd901b;">
	c
</div>
<div class="colores" style="background:#eccc19;">
	d
</div>
<div class="colores" style="background:#68c51f;">
	e
</div>
<div class="colores2" style="background:#009927;">
	e
</div>
<div class="colores3" style="background:#0090d9;">
	e
</div>
<div class="colores" style="background:#0059b7;">
	e
</div>
<div class="colores2" style="background:#791ea1;">
	e
</div>
<div class="colores3" style="background:#b7179d;">
	e
</div>
</div>