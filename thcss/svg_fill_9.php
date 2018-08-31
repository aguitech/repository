<style>
.animacion_circulo{
	/*stroke-dasharray: 20;*/
	/*stroke-dasharray: 20;*/
	/*animation: dash 5s linear;*/
	/*
	animation-name: dash;
    animation-duration: 4s;
	fill:#FFFFFF;
	*/
	
	stroke-dasharray: 6000;
    stroke-dashoffset: 6000;
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
	 <defs>
        <linearGradient id="linear" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" style="stop-color:rgb(255,255,0);stop-opacity:1" />
          <stop offset="100%" style="stop-color:rgb(255,0,0);stop-opacity:1" />
        </linearGradient>
      </defs>
<style type="text/css">
	/*.st0{fill:#FFFFFF;stroke:#000000;stroke-miterlimit:10;}*/
</style>
<path 
	class="animacion_circulo" 
	stroke-width="10"
	stroke-dasharray="80, 100"
    stroke-linecap="butt"
    stroke="url(#linear)"
	d="M318.5,706.5c0,0-59-447-125-452s-154,407,220,289s-32-125-32-125s338,429,336,134s-183-388-183-388
	s236,623,435,404s-84-357-84-357s-237,204,261,412s-402,66-402,66L318.5,706.5z"/>
</svg>
