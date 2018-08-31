<!DOCTYPE html>
<html lang="en">
<head>

<title>CSS3 animated button demo</title>

<meta charset="utf-8" />

<script type="text/javascript" src="http://use.typekit.com/nuj5imv.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<style type="text/css">
body {	
	padding: 2em 5em;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: 250%;
	background: #eee;
	}
a:link, a:visited {
	text-decoration: none;
	color: #fff;
	border: none;
	}	
a img {	
	border: none;
	}
div.mod {	
	margin: 0 0 30px 0;
	padding: 80px;
	text-align: center;
	background: #fff;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	-webkit-box-shadow: 0 0 3px rgba(0,0,0,.1);
	-moz-box-shadow: 0 0 3px rgba(0,0,0,.1);
	box-shadow: 0 0 3px rgba(0,0,0,.1);
	}
p.notes {	
	margin: 0 0 10px 0;
	font-size: 13px;
	line-height: 1.4;
	color: #999;
	text-align: center;
	}
p.notes a {	
	font-weight: bold;
	color: #777;
	border-bottom: 1px solid #ccc;
	-webkit-transition: color .2s ease;
	-moz-transition: color .2s ease;
	-o-transition: color .2s ease;
	transition: color .2s ease;
	}
p.notes a:hover {	
	color: #555;
	}
p.notes span {	
	margin: 0 4px;
	color: #ccc;
	}
#stamp {	
	display: block;
	margin: 20px 0;
	border: none;
	-webkit-transition: opacity .2s ease;
	-moz-transition: opacity .2s ease;
	-o-transition: opacity .2s ease;
	transition: opacity .2s ease;
	}
#stamp:hover {	
	opacity: .7;
	}

/* button styles */

.btn {		
	display: inline-block;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	-webkit-box-shadow:
		0 8px 0 #1a74a1,
		0 15px 20px rgba(0,0,0,.35);
	-moz-box-shadow:
		0 8px 0 #1a74a1,
		0 15px 20px rgba(0,0,0,.35);
	box-shadow:
		0 8px 0 #1a74a1,
		0 15px 20px rgba(0,0,0,.35);
	-webkit-transition: -webkit-box-shadow .2s ease-in-out;
	-moz-transition: -moz-box-shadow .2s ease-in-out;
	-o-transition: -o-box-shadow .2s ease-in-out;
	transition: box-shadow .2s ease-in-out;
	}
.btn span {	
	display: inline-block;
	padding: 10px  20px;
	font-family: "cooper-black-std-1", "cooper-black-std-2", Helvetica, Arial, sans-serif;
	line-height: 1;
	text-shadow: 0 -1px 1px rgba(19,65,88,.8);
	background: #3194c6;
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#3194c6), to(#5bacd6));
	background: -moz-linear-gradient(#3194c6, #5bacd6);
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	-webkit-box-shadow: inset 0 -1px 1px rgba(255,255,255,.15);
	-moz-box-shadow: inset 0 -1px 1px rgba(255,255,255,.15);
	box-shadow: inset 0 -1px 1px rgba(255,255,255,.15);
	-webkit-transition: -webkit-transform .2s ease-in-out;
	-moz-transition: -moz-transform .2s ease-in-out;
	-o-transition: -o-transform .2s ease-in-out;
	transition: transform .2s ease-in-out;
	}
.btn:active {	
	-webkit-box-shadow: 
		0 8px 0 #1a74a1,
		0 12px 10px rgba(0,0,0,.3);
	-moz-box-shadow: 
		0 8px 0 #1a74a1,
		0 12px 10px rgba(0,0,0,.3);
	box-shadow: 
		0 8px 0 #1a74a1,
		0 12px 10px rgba(0,0,0,.3);
	}
.btn:active span {	
	-webkit-transform: translate(0, 4px);
	-moz-transform: translate(0, 4px);
	-o-transform: translate(0, 4px);
	transform: translate(0, 4px);
	}
</style>
</head>

<body>

<div id="wrap">

<div class="mod">
	<a href="#" class="btn"><span>Press this!</span></a>
</div>


</div>

<!-- c(~) -->
</body>
</html>
