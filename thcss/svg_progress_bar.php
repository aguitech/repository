<?php
$porcentaje = $_GET["porcentaje"];
?>
<style>
/*
	stroke-dasharray: 100;
    stroke-dashoffset: <?php echo $porcentaje; ?>;

* **/
.animacion_linea{

    animation: dash 4s linear forwards;
}
.animacion_circulo{
	/*stroke-dasharray: 20;*/
	/*stroke-dasharray: 20;*/
	/*animation: dash 5s linear;*/
	/*
	animation-name: dash;
    animation-duration: 4s;
	fill:#FFFFFF;
	*/
	
	stroke-dasharray: 500;
    stroke-dashoffset: 500;
    animation: dash 4s linear forwards;
	
	
	
	/*
	 * animation: dash 4s linear forwards;
	 * 
	 * animation: dash 5s linear forwards;
	 * 
	 * 
	 * 
    animation-iteration-count: infinite;
    */
}



@keyframes dash {
  to {
    stroke-dashoffset: 0;
  }
}



</style>
<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg x="0px" y="0px"
	 viewBox="0 0 1366 768" style="enable-background:new 0 0 1366 768;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#FFFFFF;stroke:#000000;stroke-miterlimit:10;}
</style>
<defs>
<linearGradient id="linear" x1="0%" y1="0%" x2="100%" y2="100%">
  <stop offset="0%" style="stop-color:rgb(255,255,0);stop-opacity:1" />
  <stop offset="100%" style="stop-color:rgb(255,0,0);stop-opacity:1" />
</linearGradient>
</defs>
<!-- <line x1="20px" y1="10px" x2="80px" y2="10px" stroke="url(#linear)" stroke-width="10px" class="animacion_linea" /> -->
<!-- 
stroke-dashoffset="0" stroke-dasharray="80%"-->
<line x1="30px" y1="30px" x2="110px" y2="30px" style="stroke:#DCDCDC; stroke-width:5px" class="animacion_linea" />
<line x1="30px" y1="30px" x2="110px" y2="30px" style="stroke:#000; stroke-width:5px" class="animacion_linea" stroke-dashoffset="10%" stroke-dasharray="20%" />
<!-- 
<line x1="30px" y1="30px" x2="110px" y2="30px" style="stroke:#000; stroke-width:5px" class="animacion_linea" />

<line x1="20mm" y1="10mm" x2="60mm" y2="10mm" style="stroke:#000; stroke-width:5mm" />
<path class="animacion_circulo"
	stroke-width="10"
	stroke-dasharray="80, 100"
    stroke-linecap="butt"
    stroke="url(#linear)"
    d="M311.5,714.5c0,0-52-603-69-612s-255,7-137,306s274-254,274-254s-81,39-81,81s12,135,39,126s56-187,49-197
	s109,233,84,339s-66,141-79,141s-52-23-46-45s148-174,54-457c0,0,146,409,68-36c0,0,137,423,61-18c0,0,160,394,55-35s-87-376-87-376
	s57,555,155,543s40-221,40-221s-74-6-52,122s90,54,90,54s3-96-25-164c0,0,157,358,67-41l53,150c0,0-51-188,22-199s198,176,198,176
	s-614,203-980,562"/>
	-->
</svg>


