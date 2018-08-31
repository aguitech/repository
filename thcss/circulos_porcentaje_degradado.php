<div class="flex-wrapper">
  <div class="single-chart">
    <svg viewbox="0 0 36 36" class="circular-chart orange">
      <path class="circle-bg"
        d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
      />
      <path class="circle"
        stroke-dasharray="30, 100"
        d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
      />
      <text x="18" y="20.35" class="percentage">30%</text>
    </svg>
  </div>
  
  <div class="single-chart">
    <svg viewbox="0 0 36 36" class="circular-chart green">
      <path class="circle-bg"
        d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
      />
      <path class="circle"
        stroke-dasharray="60, 100"
        d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
      />
      <text x="18" y="20.35" class="percentage">60%</text>
    </svg>
  </div>

  <div class="single-chart">
    <svg viewbox="0 0 36 36" class="circular-chart blue">
		<defs>
    		<linearGradient id="linear" x1="0%" y1="0%" x2="100%" y2="0%">
    			<stop offset="0%" style="stop-color:rgb(255,255,0);stop-opacity:1" />
    			<stop offset="100%" style="stop-color:rgb(255,0,0);stop-opacity:1" />
    		</linearGradient>
		</defs>
      <path class="circle-bg"
        d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
      />
      <path class="circle"
      stroke="url(#linear)";
        stroke-dasharray="90, 100"
        d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
      />
      <text x="18" y="20.35" class="percentage">90%</text>
    </svg>
  </div>
</div>
<style>
.flex-wrapper {
  display: flex;
  flex-flow: row nowrap;
}

.single-chart {
  width: 33%;
  justify-content: space-around ;
}

.circular-chart {
  display: block;
  margin: 10px auto;
  max-width: 80%;
  max-height: 250px;
}

.circle-bg {
  fill: none;
  stroke: #eee;
  stroke-width: 3.8;
}

.circle {
  fill: none;
  stroke-width: 2.8;
  stroke-linecap: round;
  animation: progress 1s ease-out forwards;
}

@keyframes progress {
  0% {
    stroke-dasharray: 0 100;
  }
}

.circular-chart.orange .circle {
  /*stroke: #ff9f00;*/
	stroke: rgba(252,236,252,1);
    stroke: -moz-linear-gradient(left, rgba(252,236,252,1) 0%, rgba(251,166,225,1) 50%, rgba(253,137,215,1) 51%, rgba(255,124,216,1) 100%);
    stroke: -webkit-gradient(left top, right top, color-stop(0%, rgba(252,236,252,1)), color-stop(50%, rgba(251,166,225,1)), color-stop(51%, rgba(253,137,215,1)), color-stop(100%, rgba(255,124,216,1)));
    stroke: -webkit-linear-gradient(left, rgba(252,236,252,1) 0%, rgba(251,166,225,1) 50%, rgba(253,137,215,1) 51%, rgba(255,124,216,1) 100%);
    stroke: -o-linear-gradient(left, rgba(252,236,252,1) 0%, rgba(251,166,225,1) 50%, rgba(253,137,215,1) 51%, rgba(255,124,216,1) 100%);
    stroke: -ms-linear-gradient(left, rgba(252,236,252,1) 0%, rgba(251,166,225,1) 50%, rgba(253,137,215,1) 51%, rgba(255,124,216,1) 100%);
    stroke: linear-gradient(to right, rgba(252,236,252,1) 0%, rgba(251,166,225,1) 50%, rgba(253,137,215,1) 51%, rgba(255,124,216,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcecfc', endColorstr='#ff7cd8', GradientType=1 );
}

.circular-chart.green .circle {
  /*stroke: #4CC790;*/
	stroke: rgba(203,96,179,1);
    stroke: -moz-linear-gradient(left, rgba(203,96,179,1) 0%, rgba(193,70,161,1) 50%, rgba(168,0,119,1) 51%, rgba(219,54,164,1) 100%);
    stroke: -webkit-gradient(left top, right top, color-stop(0%, rgba(203,96,179,1)), color-stop(50%, rgba(193,70,161,1)), color-stop(51%, rgba(168,0,119,1)), color-stop(100%, rgba(219,54,164,1)));
    stroke: -webkit-linear-gradient(left, rgba(203,96,179,1) 0%, rgba(193,70,161,1) 50%, rgba(168,0,119,1) 51%, rgba(219,54,164,1) 100%);
    stroke: -o-linear-gradient(left, rgba(203,96,179,1) 0%, rgba(193,70,161,1) 50%, rgba(168,0,119,1) 51%, rgba(219,54,164,1) 100%);
    stroke: -ms-linear-gradient(left, rgba(203,96,179,1) 0%, rgba(193,70,161,1) 50%, rgba(168,0,119,1) 51%, rgba(219,54,164,1) 100%);
    stroke: linear-gradient(to right, rgba(203,96,179,1) 0%, rgba(193,70,161,1) 50%, rgba(168,0,119,1) 51%, rgba(219,54,164,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cb60b3', endColorstr='#db36a4', GradientType=1 );
}

.circular-chart.blue .circle {
  /*stroke: #3c9ee5;*/
	
stroke: rgba(210,255,82,1);
stroke: -moz-linear-gradient(left, rgba(210,255,82,1) 0%, rgba(145,232,66,1) 100%);
stroke: -webkit-gradient(left top, right top, color-stop(0%, rgba(210,255,82,1)), color-stop(100%, rgba(145,232,66,1)));
stroke: -webkit-linear-gradient(left, rgba(210,255,82,1) 0%, rgba(145,232,66,1) 100%);
stroke: -o-linear-gradient(left, rgba(210,255,82,1) 0%, rgba(145,232,66,1) 100%);
stroke: -ms-linear-gradient(left, rgba(210,255,82,1) 0%, rgba(145,232,66,1) 100%);
stroke: linear-gradient(to right, rgba(210,255,82,1) 0%, rgba(145,232,66,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d2ff52', endColorstr='#91e842', GradientType=1 );	
}

.percentage {
  fill: #666;
  font-family: sans-serif;
  font-size: 0.5em;
  text-anchor: middle;
}
</style>