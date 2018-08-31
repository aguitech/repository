<!DOCTYPE>
<html>
	<head>
		<title></title>
		<style>
        body{
			background: red;
			-webkit-animation: mymove 50s infinite; /* Safari 4.0 - 8.0 */
			animation: mymove 50s infinite;
		}
		/* Safari 4.0 - 8.0 */
		@-webkit-keyframes mymove {
            0%   {top: 0px; background: #66ccff; background: linear-gradient(to bottom right, red, yellow);}
		    40% {top: 200px; background: #00ff7f; background: linear-gradient(to bottom right, yellow, red);}
            60% {top: 200px; background: #00ff7f; background: linear-gradient(to bottom right, yellow, red);}
            100%   {top: 0px; background: #66ccff; background: linear-gradient(to bottom right, red, yellow);}
		}
		
		/* Standard syntax */
		@keyframes mymove {
		    0%   {top: 0px; background: #66ccff; background: linear-gradient(to bottom right, red, yellow);}
		    40% {top: 200px; background: #00ff7f; background: linear-gradient(to bottom right, yellow, red);}
            60% {top: 200px; background: #00ff7f; background: linear-gradient(to bottom right, yellow, red);}
            100%   {top: 0px; background: #66ccff; background: linear-gradient(to bottom right, red, yellow);}
		}
        </style>
	</head>
	<body style="background:lime; background: linear-gradient(to bottom right, red, yellow);">
		
	</body>
</html>