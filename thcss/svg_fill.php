<style>
.animacion_circulo{
	/*stroke-dasharray: 20;*/
	/*stroke-dasharray: 20;*/
	/*animation: dash 5s linear;*/
	animation-name: dash;
    animation-duration: 4s;
	/*
    animation-iteration-count: infinite;
    */
}
@keyframes dash {
    /*0%   {top: 0px; stroke-dashoffset: 1000; }*/
    from{
        stroke-dasharray:00, 100;
    }
	to{
        stroke-dasharray:<?php echo $porcentaje; ?>, 100;
    }
	/*
    0%   {top: 0px; stroke-dasharray:00, 100;}
	20%   {top: 0px; stroke-dasharray:15, 100;}
	40%   {top: 0px; stroke-dasharray:30, 100;}
	60%   {top: 0px; stroke-dasharray:45, 100;}
	80%   {top: 0px; stroke-dasharray:60, 100;}
    100% {top: 0px; stroke-dasharray:75, 100;}
	*/
}

</style>

<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1366 768" style="enable-background:new 0 0 1366 768;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#FFFFFF;stroke:#000000;stroke-miterlimit:10;}
</style>
<path class="st0" d="M239.5,601.5c11.6-63.3,68.8-390.3-37-446c-4.2-2.2-35.7-18.8-64-7c-42.2,17.5-60,90.5-41,146
	c1.5,4.2,27.6,76.4,100,88c61.9,9.9,105.1-32.8,112-40c2.1-2.2,42.7-44.8,29-70c-5.2-9.5-17.4-15.2-28-14c-17.4,2-31.1,22.9-28,37
	c4.1,19,36.2,14.7,64,35c42.1,30.8,43.2,95.4,44,141c0.7,42.8,2.4,136.9-41,153c-46.5,17.2-136-58.7-127-111
	c12.5-72.6,208.3-64.9,220-139c9.5-60-108-133.6-105-137c2.2-2.5,54.5,49.5,73,38c19.1-11.9-7.2-85.5-2-87c5.1-1.5,28.6,68.5,34,67
	c5.5-1.5-12.4-76.5-7-78c5.4-1.5,27.5,72.5,34,71c10.3-2.4-23.4-194.1-24-194c-0.6,0.1,11.6,175.2,45,178c23.2,1.9,60.2-79.1,41-99
	c-10-10.3-36.8-5.8-47,8c-19.5,26.4,20.7,89.2,41,86c4.4-0.7,9.4-5.2,24-66c9.8-40.7,20.8-94,21-94c0.3,0-34.2,101.4-6,120
	c23.2,15.3,91.2-24,93-64c2-45.4-81.5-85.9-83-84c-0.9,1.1,27.9,18.1,64,58c62.7,69.5,83.8,138,89,136c8.3-3.2-49.3-171.8-41-175
	c5.2-2,20.1,65.8,72,102c72.2,50.4,175,6,177,12c2.4,7.2-146,66.2-748,275"/>
</svg>
