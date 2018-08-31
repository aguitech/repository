<!-- 
<script src="/js/jquery-3.3.1.js"></script>
-->
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
    0%   {top: 35%; height: 30%;}
    10%   {top: 20%; height: 60%;}
    20%   {top: 40%; height: 20%;}
    30%   {top: 15%; height: 70%;}
    40%   {top: 5%; height: 90%;}
    50%   {top: 30%; height: 40%;}
    60%   {top: 20%; height: 60%;}
    70%   {top: 25%; height: 50%;}
    80%   {top: 40%; height: 20%;}
    90%   {top: 10%; height: 80%;}
    100% {top: 20%; height:60%;}
}

/* Standard syntax */
@keyframes mymove2 {
    0%   {top: 35%; height: 30%;}
    10%   {top: 20%; height: 60%;}
    20%   {top: 40%; height: 20%;}
    30%   {top: 15%; height: 70%;}
    40%   {top: 5%; height: 90%;}
    50%   {top: 30%; height: 40%;}
    60%   {top: 20%; height: 60%;}
    70%   {top: 25%; height: 50%;}
    80%   {top: 40%; height: 20%;}
    90%   {top: 10%; height: 80%;}
    100% {top: 20%; height:60%;}
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
	width: 10%;
	height: 10px;
	position: relative;
	-webkit-animation: mymove2 2s infinite; /* Safari 4.0 - 8.0 */
	animation: mymove2 2s infinite;
	float:left;
}

.colores2{
	width: 10%;
	height: 10px;
	position: relative;
	-webkit-animation: mymove3 2s infinite; /* Safari 4.0 - 8.0 */
	animation: mymove3 2s infinite;
	float:left;
}

.colores3{
	width: 10%;
	height: 10px;
	position: relative;
	-webkit-animation: mymove4 2s infinite; /* Safari 4.0 - 8.0 */
	animation: mymove4 2s infinite;
	float:left;
}

@-webkit-keyframes mymove3 {
    0%   {top: 15%; height: 70%;}
    10%   {top: 20%; height: 60%;}
    20%   {top: 25%; height: 50%;}
    
    30%   {top: 35%; height: 40%;}
    40%   {top: 25%; height: 50%;}
    50%   {top: 20%; height: 60%;}
    60%   {top: 15%; height: 70%;}
    70%   {top: 10%; height: 80%;}
    
    80%   {top: 15%; height: 70%;}
    90%   {top: 20%; height: 60%;}
    100% {top: 25%; height:50%;}
}

/* Standard syntax */
@keyframes mymove3 {
    0%   {top: 15%; height: 70%;}
    10%   {top: 20%; height: 60%;}
    20%   {top: 25%; height: 50%;}
    
    30%   {top: 35%; height: 40%;}
    40%   {top: 25%; height: 50%;}
    50%   {top: 20%; height: 60%;}
    60%   {top: 15%; height: 70%;}
    70%   {top: 10%; height: 80%;}
    
    80%   {top: 15%; height: 70%;}
    90%   {top: 20%; height: 60%;}
    100% {top: 25%; height:50%;}
}


@-webkit-keyframes mymove4 {
    0%   {top: 30%; height: 40%;}
    10%   {top: 35%; height: 30%;}
    20%   {top: 5%; height: 90%;}
    30%   {top: 10%; height: 80%;}
    40%   {top: 15%; height: 70%;}
    50%   {top: 20%; height: 60%;}
    60%   {top: 15%; height: 70%;}
    70%   {top: 10%; height: 80%;}
    80%   {top: 5%; height: 90%;}
    90%   {top: 20%; height: 60%;}
    100% {top: 30%; height:40%;}
}

/* Standard syntax */
@keyframes mymove4 {
    0%   {top: 30%; height: 40%;}
	10%   {top: 35%; height: 30%;}
    20%   {top: 5%; height: 90%;}
    30%   {top: 10%; height: 80%;}
    40%   {top: 15%; height: 70%;}
    50%   {top: 20%; height: 60%;}
    60%   {top: 15%; height: 70%;}
    70%   {top: 10%; height: 80%;}
    80%   {top: 5%; height: 90%;}
    90%   {top: 20%; height: 60%;}
    100% {top: 30%; height:40%;}
}
</style>

<!-- 
<div class="colores_1"></div>
-->
<div style="position:absolute; top:0; left:0; bottom:0; right:0;">
    <div style="height:100%; background:black;">
    	<div style="margin:0 20%;">
            <div class="colores" style="background:#cc0c19;">
            	&nbsp;
            </div>
            <div class="colores3" style="background:#ff1f27;">
            	&nbsp;
            </div>
            <div class="colores2" style="background:#fd901b;">
            	&nbsp;
            </div>
            <div class="colores" style="background:#eccc19;">
            	&nbsp;
            </div>
            <div class="colores" style="background:#68c51f;">
            	&nbsp;
            </div>
            <div class="colores2" style="background:#009927;">
            	&nbsp;
            </div>
            <div class="colores3" style="background:#0090d9;">
            	&nbsp;
            </div>
            <div class="colores" style="background:#0059b7;">
            	&nbsp;
            </div>
            <div class="colores2" style="background:#791ea1;">
            	&nbsp;
            </div>
            <div class="colores3" style="background:#b7179d;">
            	&nbsp;
            </div>
    	</div>
    </div>
</div>
<div style="position:fixed; bottom:20px; right:20px; color:white; cursor:pointer;" onclick="window.location='../'">
	Entrar
</div>