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
		    0%   {top: 0px; background: red;}
		    40% {top: 200px; background: yellow;}
            60% {top: 200px; background: yellow;}
            100%   {top: 0px; background: red;}
		}
		
		/* Standard syntax */
		@keyframes mymove {
		    0%   {top: 0px; background: red;}
		    40% {top: 200px; background: yellow;}
            60% {top: 200px; background: yellow;}
            100%   {top: 0px; background: red;}
		}
        </style>
	</head>
	<body style="background:lime;">
		
	</body>
</html>