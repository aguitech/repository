<!doctype html>
<html>
<head>

<title>3D Buttons with CSS3</title>

<style type="text/css">

body {
	font-family: Helvetica, Arial, sans-serif;
	background: #d6d6d6;
	text-align: center;
	padding: 50px 0px;
	-webkit-transform-style: preserve-3d;
	-webkit-perspective: 400;
}

.button {
	display: inline-block;
	text-decoration: none;
	color: #fff;
	font-weight: bold;
	background-color: #538fbe;
	padding: 20px 70px;
	font-size: 24px;
	border: 1px solid #2d6898;
	background-image: linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
	background-image: -o-linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
	background-image: -moz-linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
	background-image: -webkit-linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
	background-image: -ms-linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
	
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(0, rgb(73,132,180)),
		color-stop(1, rgb(97,155,203))
	);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	text-shadow: 0px -1px 0px rgba(0,0,0,.5);
	-webkit-box-shadow: 0px 6px 0px #2b638f, 0px 3px 15px rgba(0,0,0,.4), inset 0px 1px 0px rgba(255,255,255,.3), inset 0px 0px 3px rgba(255,255,255,.5);
	-moz-box-shadow: 0px 6px 0px #2b638f, 0px 3px 15px rgba(0,0,0,.4), inset 0px 1px 0px rgba(255,255,255,.3), inset 0px 0px 3px rgba(255,255,255,.5);
	box-shadow: 0px 6px 0px #2b638f, 0px 3px 15px rgba(0,0,0,.4), inset 0px 1px 0px rgba(255,255,255,.3), inset 0px 0px 3px rgba(255,255,255,.5);
	-webkit-transition: all .1s ease-in-out;
	-moz-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
	-webkit-transform: rotateX(20deg);
}

.button:hover {
	background-image: linear-gradient(bottom, rgb(79,142,191) 0%, rgb(102,166,214) 100%);
	background-image: -o-linear-gradient(bottom, rgb(79,142,191) 0%, rgb(102,166,214) 100%);
	background-image: -moz-linear-gradient(bottom, rgb(79,142,191) 0%, rgb(102,166,214) 100%);
	background-image: -webkit-linear-gradient(bottom, rgb(79,142,191) 0%, rgb(102,166,214) 100%);
	background-image: -ms-linear-gradient(bottom, rgb(79,142,191) 0%, rgb(102,166,214) 100%);
	
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(0, rgb(79,142,191)),
		color-stop(1, rgb(102,166,214))
	);
}

.button:active {
-webkit-box-shadow: 0px 2px 0px #2b638f, 0px 1px 6px rgba(0,0,0,.4), inset 0px 1px 0px rgba(255,255,255,.3), inset 0px 0px 3px rgba(255,255,255,.5);
-moz-box-shadow: 0px 2px 0px #2b638f, 0px 1px 6px rgba(0,0,0,.4), inset 0px 1px 0px rgba(255,255,255,.3), inset 0px 0px 3px rgba(255,255,255,.5);
box-shadow: 0px 2px 0px #2b638f, 0px 1px 6px rgba(0,0,0,.4), inset 0px 1px 0px rgba(255,255,255,.3), inset 0px 0px 3px rgba(255,255,255,.5);
	background-image: linear-gradient(bottom, rgb(88,154,204) 0%, rgb(90,150,199) 100%);
	background-image: -o-linear-gradient(bottom, rgb(88,154,204) 0%, rgb(90,150,199) 100%);
	background-image: -moz-linear-gradient(bottom, rgb(88,154,204) 0%, rgb(90,150,199) 100%);
	background-image: -webkit-linear-gradient(bottom, rgb(88,154,204) 0%, rgb(90,150,199) 100%);
	background-image: -ms-linear-gradient(bottom, rgb(88,154,204) 0%, rgb(90,150,199) 100%);
	
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(0, rgb(88,154,204)),
		color-stop(1, rgb(90,150,199))
	);
    -webkit-transform: translate(0, 4px) rotateX(20deg);  
    -moz-transform: translate(0, 4px);  
    transform: translate(0, 4px);  
}



</style>
<meta name="robots" content="noindex,follow" />
</head>

<body>

<a href="#" class="button">Press Me</a>

</body>
</html>