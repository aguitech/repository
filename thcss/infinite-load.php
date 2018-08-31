<!DOCTYPE html>
<html>
	<head>
		<style>
		.contenido1{
			background:yellow;
			float:left;
			margin:10px;
			width:100px;
			height:100px;
			transform: translateZ(0);
		}
		.contenido1:hover{
			background:green;
			float:left;
			margin:10px;
			transform: translateY(100px);
			transform: translateZ(10px);
			transform: scaleY(2);
			transform: skewY(20deg);
		}
		.contenido2{
			background:red;
			float:left;
			margin:10px;
			width:100px;
			height:100px;
		}
		.contenido2:hover{
			background:red;
			float:left;
			margin:10px;
			transform: scaleY(2);
		}
		.contenido3{
			background:blue;
			float:left;
			margin:10px;
			width:100px;
			height:100px;
		}
		.contenido3:hover{
			background:red;
			float:left;
			margin:10px;
			transform: scaleY(2);
		}
		.contenido4{
			background:blue;
			float:left;
			margin:10px;
			width:100px;
			height:100px;
		}
		.contenido4:hover{
			background:red;
			float:left;
			margin:10px;
			transform: scaleY(1.5);
		
			transition-duration: 3s;
			transition-timing-function: ease;
		}
		.contenido5{
			background:blue;
			float:left;
			margin:10px;
			width:100px;
			height:100px;
		}
		.contenido5:hover{
			background:yellow;
			float:left;
			margin:10px;
			transform: scaleX(2);
			transform: scaleY(1.5);
			transition-duration: 3s;
		
		/*
		 * transition-property: width, height;
			*/
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
		
		.colores_2{
			width: 100px;
			height: 100px;
			background: red;
			position: relative;
			/*-webkit-animation: mymove2 5s infinite; /* Safari 4.0 - 8.0 */
			animation: mymove2 5s infinite;
		}
		/* Safari 4.0 - 8.0 */
		/*
		@-webkit-keyframes mymove2 {
		    0%   {top: 0px; background: red; width: 100px;}
		    100% {top: 200px; background: yellow; width: 300px;}
		}
		*/
		
		/* Standard syntax */
		@keyframes mymove2 {
		    0%   {top: 0px; background: #ce0000; width: 0%;}
			20%   {top: 0px; background: #c6b500; width: 20%;}
			40%   {top: 0px; background: #24c600; width: 40%;}
			60%   {top: 0px; background: #00c6b2; width: 60%;}
			80%   {top: 0px; background: #0039bf; width: 80%;}
		    100% {top: 0px; background: #8500bf; width: 100%;}
		}
		
		.colores_3{
			width: 20px;
			height: 10px;
			/*background: red;*/
			/*-webkit-animation: mymove2 5s infinite; /* Safari 4.0 - 8.0 */
			animation: mymove3 5s infinite;
			transition-timing-function: linear;
			/*transition-timing-function: ease;*/
			margin:10px 0;
		}
		/* Safari 4.0 - 8.0 */
		/*
		@-webkit-keyframes mymove2 {
		    0%   {top: 0px; background: red; width: 100px;}
		    100% {top: 200px; background: yellow; width: 300px;}
		}
		*/
		
		/* Standard syntax */
		@keyframes mymove3 {
		    0%   {background: #ffffff; width: 0%;}
			20%   {background: #c6b500; width: 20%;}
			40%   {background: #24c600; width: 40%;}
			60%   {0px; background: #00c6b2; width: 60%;}
			80%   {0px; background: #0039bf; width: 80%;}
		    100% {0px; background: #8500bf; width: 100%;}
		}
		.colores_4{
			width: 20px;
			height: 10px;
			/*background: red;*/
			/*-webkit-animation: mymove2 5s infinite; /* Safari 4.0 - 8.0 */
			animation: mymove3 2s infinite;
			transition-timing-function: ease-in-out;
			/*transition-timing-function: ease;*/
			margin:10px 0;
		}
		@keyframes mymove4 {
		    0%   {background: yellow; width: 0%;}
			20%   {background: #c6b500; width: 20%;}
			40%   {background: #24c600; width: 40%;}
			60%   {0px; background: #00c6b2; width: 60%;}
			80%   {0px; background: #0039bf; width: 80%;}
		    100% {0px; background: #8500bf; width: 100%;}
		}

		</style>
	</head>
	<body>
		<div>
			<div class="colores_4"></div>
			
		</div>
	</body>
</html>


