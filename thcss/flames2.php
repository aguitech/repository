<style>
@import url('https://fonts.googleapis.com/css?family=Bungee+Inline');

body { 
  background: #000;
}

.birthday {
  position: relative;
  height: 500px;
  margin:auto;
  margin-top: -100px;
}


p{
  position: absolute;
  top: 128px;
  left: 340px;
  font-family: 'Bungee Inline', cursive;
  font-size: 120px;
  color: #D983B2;
  transform: scaleY(1.5);
}

#second {
  top: 129px;
  left: 440px;
}

#cake {
  position: absolute;
  top: 330px;
  left: 230px;
  z-index: -1;
}

.fire {
	position: absolute;
  top: 75px;
  left: 245px;
	width: 256px;
	height: 256px;
	margin: 20px auto;
  transform: rotate(45deg) scale(.15,.15);
  box-shadow: 0px 0px 250px white;
  border-radius: 50%;
  animation: flame .001s linear infinite;
}

.fire2 {
  top: 75px;
  left: 357px;
  animation-delay: .5s;
}

.fire div:nth-child(1){
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	border-radius: 100%;
	border-top-left-radius: 0;
	background: transparent radial-gradient(at 20% 20%, #E2B822 22%, rgba(255, 248, 115, 0.8) 30%, rgba(255, 246, 77, 0.8) 45%, rgba(255, 252, 192, 0.7) 65%, #ff0000 100%);
}


.fire div:nth-child(2) {
	position: absolute;
	top: 45%;
	left: 20%;
	width: 75%;
	height: 55%;
	transform: matrix(1, -0.5, 0, 1, 0, 0);
	background: transparent radial-gradient(ellipse farthest-corner at 73% 73%, #E23822 6%, rgba(226,88,34, 0.1) 25%, rgba(226,88,34, 0) 30%);
}  

@keyframes flame {
  from, 11.1%, to {
    transform: rotate(45deg) scale(.15,.16);
  }

  22.2% {
    transform: skewX(-12.5deg) skewY(-12.5deg) rotate(45deg) scale(.16,.15);
  }

  33.3% {
    transform: skewX(6.25deg) skewY(6.25deg) rotate(45deg) scale(.15,.16);
  }

  44.4% {
    transform: skewX(-3.125deg) skewY(-3.125deg) rotate(45deg) scale(.16,.15);
    opacity: .7;
  }

  55.5% {
    transform: skewX(1.5625deg) skewY(1.5625deg) rotate(45deg) scale(.15,.16);
  }

  66.6% {
    transform: skewX(-0.78125deg) skewY(-0.78125deg) rotate(45deg) scale(.16,.15);
  }

  77.7% {
    transform: skewX(0.390625deg) skewY(0.390625deg) rotate(45deg) scale(.15,.16);
  }

  88.8% {
    transform: skewX(-0.1953125deg) skewY(-0.1953125deg) rotate(45deg) scale(.16,.15);
  }
}





</style>
<div class='birthday'>
  <div class='fire'>
    <div></div>
    <div></div>
  </div>
  <p>1</p>
  <div class='fire fire2'>
    <div></div>
    <div></div>
  </div>    
  <p id='second'>0</p>

  
<svg id='cake' width="411px" height="375px" viewBox="198 187 411 375" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <path d="M206.108183,359.996208 C206.139739,355.580024 209.740228,352 214.164945,352 L594.160137,352 C598.578208,352 602.159762,355.581678 602.159762,359.991203 L602.159762,486.029648 C602.159762,490.443068 599.713849,496.64629 596.610095,499.790524 C596.610095,499.790524 583.407671,515.258885 558.907032,528.212544 C530.360244,543.30543 486.017305,555.394116 440.162958,560.254223 C428.69398,561.469821 410.657725,560.999986 398.8157,560.254223 C392.292651,559.843427 391.338853,560.592156 384.681716,560.254223 C358.20013,558.909951 330.807076,556.417383 305.322427,549.831668 C291.695268,546.310152 287.719236,545.653893 275.493882,540.841928 C272.442116,539.640737 248.717577,530.959286 231.026194,518.958539 C221.037554,512.182859 213.115232,498.788099 211.570201,498.788099 C204.761588,498.788099 206.108183,359.996208 206.108183,359.996208 Z" id="path-1"></path>
        <mask id="mask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="396.159762" height="209" fill="white">
            <use xlink:href="#path-1"></use>
        </mask>
        <path d="M198.199298,263.782839 L602.509457,263.782839 C608.061365,263.782839 593.487573,263.782839 593.487573,263.782839 C593.487573,263.782839 607.007254,257.521451 607.594453,263.782839 C609.722486,286.474361 608.613647,353.053626 607.594453,390.094173 C607.502189,393.447317 602.509457,394.68974 602.509457,397.537946 C602.509457,398.545304 593.487573,402.024629 593.487573,402.024629 C593.487573,402.024629 585.137884,426.135523 569.91433,427.664171 C565.932632,428.063986 547.553389,395.063206 543.492373,397.537946 C529.962406,405.782968 532.466012,436.623469 509.303741,439.46187 C498.763857,440.753471 472.255724,399.712175 460.956111,402.024629 C442.82098,405.735964 430.93285,448.674566 410.92142,449.450193 C394.11792,450.101483 366.970203,401.140882 350.221056,402.024629 C328.768275,403.156557 305.227332,429.805865 285.633574,429.260121 C264.110955,428.660653 251.088522,379.393204 233.627343,379.393204 C223.394566,379.393204 208.341928,386.136687 201.939292,390.094173 C200.541393,390.958218 198.199298,384.285076 198.199298,384.285076 L198.199298,263.782839 Z" id="path-3"></path>
        <mask id="mask-4" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="410.609985" height="188.456634" fill="white">
            <use xlink:href="#path-3"></use>
        </mask>
    </defs>
    <use id="cakebase" stroke="#615A5A" mask="url(#mask-2)" stroke-width="18" fill="#C2B5ED" fill-rule="evenodd" xlink:href="#path-1"></use>
    <use id="cakeside" stroke="#615A5A" mask="url(#mask-4)" stroke-width="16" fill="#F1C0F3" fill-rule="evenodd" xlink:href="#path-3"></use>
    <path d="M403,355.472865 C427.542004,355.472865 451.293277,353.184591 473.035361,350 C549.637817,338.779938 604,304.699726 604,270.5 C604,226.593362 514.009235,191 403,191 C291.990765,191 202,226.593362 202,270.5 C202,314.406638 291.990765,355.472865 403,355.472865 Z" id="caketop" stroke="#615A5A" stroke-width="8" fill="#F1C0F3" fill-rule="evenodd"></path>
    <path d="M421.5,257 C421.5,257 446.166055,246.307631 457.5,246.307631 C470.166055,246.307631 493.5,257 493.5,257" id="frosting0" stroke="#615A5A" stroke-width="8" stroke-linecap="square" fill="none"></path>
    <path d="M287.700716,257.634392 C287.700716,257.634392 290.667653,242.854223 303.761786,243.413475 C306.736708,243.540535 313.276946,241.315772 317.401341,243.413475 C323.879823,246.708487 330.075439,251.035412 340.334078,250.042634 C350.298122,249.078365 362.673272,242.830646 372.508108,243.413475 C387.367203,244.294051 395.828782,257.634392 395.828782,257.634392" id="frosting1" stroke="#615A5A" stroke-width="8" stroke-linecap="square" fill="none"></path>
</svg>

</div>