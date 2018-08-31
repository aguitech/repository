<style>
.content_redes{
	display:flex;
	justify-content:flex-start;
    align-items: center;
	height:100%;
	/*
	Centrado Perfecto
    display:flex;
	justify-content: center;
    align-items: center;
	height:100%;
	*/
}
.content_redes>div {
    background-color: white;
    color: white;
}
.content_redes>div:hover{
	cursor:pointer;
	/**
	webkit-transition: all 5s ease;
    -moz-transition: all 5s ease;
    -ms-transition: all 5s ease;
    -o-transition: all 5s ease;
    transition: all 5s ease;
	*/
}
.content_redes_fb:hover{
	background:#44619D;
	-webkit-animation-name: difuminado; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 1s; /* Safari 4.0 - 8.0 */
    animation-name: difuminado;
    animation-duration: 1s;
}
.content_redes_yt:hover{
	background:#DA2823;
	-webkit-animation-name: difuminado; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 1s; /* Safari 4.0 - 8.0 */
    animation-name: difuminado;
    animation-duration: 1s;
}
.content_redes_tw:hover{
	background:#55ACEE;
	-webkit-animation-name: difuminado; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 1s; /* Safari 4.0 - 8.0 */
    animation-name: difuminado;
    animation-duration: 1s;
}
.content_redes_general>div{
	width:30px;
	height:30px;
	border:1px solid white;
	background:#DCDCDC;
}
.content_redes_instagram:hover{
	background:#EE4A5C;
	-webkit-animation-name: difuminado; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 1s; /* Safari 4.0 - 8.0 */
    animation-name: difuminado;
    animation-duration: 1s;
}
.content_redes_snapchat:hover{
	background:#FDE20D;
	
	
	-webkit-animation-name: difuminado; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 1s; /* Safari 4.0 - 8.0 */
    animation-name: difuminado;
    animation-duration: 1s;
}
.content_redes_linkedin:hover{
	-webkit-animation-name: difuminado; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 1s; /* Safari 4.0 - 8.0 */
    animation-name: difuminado;
    animation-duration: 1s;
	background:#0077B5;
}
.content_redes_twitch:hover{
	background:#6441A5;
	
	-webkit-animation-name: difuminado; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 1s; /* Safari 4.0 - 8.0 */
    animation-name: difuminado;
    animation-duration: 1s;
}
.content_redes_twitch::before{
	content:"";
	display:block;
	width:30px;
	height:30px;
	margin-top:0px;
	margin-left:0px;
	
	
	/*background:#6441A5;*/
	
}

.content_redes_colores:hover{
	
	
	-webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
    animation-name: example;
    animation-duration: 4s;
}
.content_redes_colores::before{
	content:"";
	display:block;
	width:30px;
	height:30px;
	margin-top:0px;
	margin-left:0px;
	
	
	/*background:#6441A5;*/
	
}

@-webkit-keyframes example {
    0%   {background-color: red;}
    25%  {background-color: yellow;}
    50%  {background-color: blue;}
    100% {background-color: green;}
}

/* Standard syntax */
@keyframes example {
    0%   {background-color: red;}
    25%  {background-color: yellow;}
    50%  {background-color: blue;}
    100% {background-color: green;}
}


@-webkit-keyframes difuminado {
0%    {filter:alpha(opacity=0); -moz-opacity:.0; opacity:.0;}
    10%   {filter:alpha(opacity=10); -moz-opacity:.10; opacity:.10;}
    20%   {filter:alpha(opacity=20); -moz-opacity:.20; opacity:.20;}
    30%   {filter:alpha(opacity=30); -moz-opacity:.30; opacity:.30;}
    40%   {filter:alpha(opacity=40); -moz-opacity:.40; opacity:.40;}
    50%   {filter:alpha(opacity=50); -moz-opacity:.50; opacity:.50;}
    60%   {filter:alpha(opacity=60); -moz-opacity:.60; opacity:.60;}
    70%   {filter:alpha(opacity=70); -moz-opacity:.70; opacity:.70;}
    80%   {filter:alpha(opacity=80); -moz-opacity:.80; opacity:.80;}
    90%   {filter:alpha(opacity=90); -moz-opacity:.90; opacity:.90;}
    100%  {filter:alpha(opacity=100); -moz-opacity:1; opacity:1;}
}

/* Standard syntax */
@keyframes difuminado {
    0%    {filter:alpha(opacity=0); -moz-opacity:.0; opacity:.0;}
    10%   {filter:alpha(opacity=10); -moz-opacity:.10; opacity:.10;}
    20%   {filter:alpha(opacity=20); -moz-opacity:.20; opacity:.20;}
    30%   {filter:alpha(opacity=30); -moz-opacity:.30; opacity:.30;}
    40%   {filter:alpha(opacity=40); -moz-opacity:.40; opacity:.40;}
    50%   {filter:alpha(opacity=50); -moz-opacity:.50; opacity:.50;}
    60%   {filter:alpha(opacity=60); -moz-opacity:.60; opacity:.60;}
    70%   {filter:alpha(opacity=70); -moz-opacity:.70; opacity:.70;}
    80%   {filter:alpha(opacity=80); -moz-opacity:.80; opacity:.80;}
    90%   {filter:alpha(opacity=90); -moz-opacity:.90; opacity:.90;}
    100%  {filter:alpha(opacity=100); -moz-opacity:1; opacity:1;}
}
</style>
<div style="position:fixed; top:0; left:0; bottom:0;" id="contenedor_redes">
    <div class="content_redes">
    	<div class="content_redes_general">
    
            <div class="content_redes_fb">
            	FB
            </div>
            <div class="content_redes_yt">
            	YT
            </div>
            <div class="content_redes_tw">
            	TW
            </div>
            <div class="content_redes_instagram">
            	
            </div>
            <div class="content_redes_snapchat">
            	
            </div>
            <div class="content_redes_linkedin">
            	
            </div>
            <div class="content_redes_twitch">
            	
            </div>
            <div class="content_redes_colores">
            	
            </div>
    	</div>
    </div>
</div>