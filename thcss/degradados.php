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
		    0%   {top: 0px; background: #66ccff;}
		    40% {top: 200px; background: #00ff7f;}
            60% {top: 200px; background: #00ff7f;}
            100%   {top: 0px; background: #66ccff;}
		}
		
		/* Standard syntax */
		@keyframes mymove {
		    0%   {top: 0px; background: #66ccff;}
		    40% {top: 200px; background: #00ff7f;}
            60% {top: 200px; background: #00ff7f;}
            100%   {top: 0px; background: #66ccff;}
		}
        </style>
	</head>
	<body style="background:lime;">
		
	</body>
</html>