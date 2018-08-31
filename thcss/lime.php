<!DOCTYPE>
<html>
	<head>
		<title></title>
		<style>
        body{
			background: red;
			-webkit-animation: mymove 5s infinite; /* Safari 4.0 - 8.0 */
			animation: mymove 5s infinite;
		}
		/* Safari 4.0 - 8.0 */
		@-webkit-keyframes mymove {
		    0%   {top: 0px; background: red;}
		    100% {top: 200px; background: yellow;}
		}
		
		/* Standard syntax */
		@keyframes mymove {
		    0%   {top: 0px; background: red;}
		    100% {top: 200px; background: yellow;}
		}
        </style>
	</head>
	<body style="background:lime;">
		
	</body>
</html>