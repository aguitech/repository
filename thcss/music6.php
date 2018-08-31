<?php /**
<style>
.diviti {
    width: 100px;
    height: 100px;
    background-color: red;
    -webkit-animation-name: example; 
    -webkit-animation-duration: 4s; 
    animation-name: example;
    animation-duration: 4s;
}

// Safari 4.0 - 8.0
@-webkit-keyframes example {
    0%   {background-color: red;}
    25%  {background-color: yellow;}
    50%  {background-color: blue;}
    100% {background-color: green;}
}

// Standard syntax
@keyframes example {
    0%   {background-color: red;}
    25%  {background-color: yellow;}
    50%  {background-color: blue;}
    100% {background-color: green;}
}
</style>
<div class="diviti">ass</div>
*/ ?>

<!-- 
<script src="/js/jquery-3.3.1.js"></script>
-->
<style>

.colores{
	display:block;
	width: 10%;
	height: 10px;
	position: relative;
	-webkit-animation: mymove2 2s infinite; /* Safari 4.0 - 8.0 */
	animation: mymove2 2s infinite;
	float:left;
	animation-name: mymove2;
    animation-duration: 2s;
}

.colores2{
	display:block;
	width: 10%;
	height: 10px;
	position: relative;
	-webkit-animation: mymove3 2s infinite; /* Safari 4.0 - 8.0 */
	animation: mymove3 2s infinite;
	float:left;
}

.colores3{
	display:block;
	width: 10%;
	height: 10px;
	position: relative;
	-webkit-animation: mymove4 2s infinite; /* Safari 4.0 - 8.0 */
	animation: mymove4 2s infinite;
	float:left;
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