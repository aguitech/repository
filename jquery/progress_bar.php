<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset='UTF-8'>

	<title>Progress Bars</title>

	<link rel='stylesheet' href='css/style.css'>

<!-- 
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
	-->
	<script src="/js/jquery-3.3.1.js"></script>
	<script>
		$(function() {
			$(".meter > span").each(function() {
				$(this)
					.data("origWidth", $(this).width())
					.width(0)
					.animate({
						width: $(this).data("origWidth")
					}, 1200);
			});
		});
	</script>

	<style>
		.meter {
			height: 20px;  /* Can be anything */
			position: relative;
			margin: 60px 0 20px 0; /* Just for demo spacing */
			background: #555;
			-moz-border-radius: 25px;
			-webkit-border-radius: 25px;
			border-radius: 25px;
			padding: 10px;
			-webkit-box-shadow: inset 0 -1px 1px rgba(255,255,255,0.3);
			-moz-box-shadow   : inset 0 -1px 1px rgba(255,255,255,0.3);
			box-shadow        : inset 0 -1px 1px rgba(255,255,255,0.3);
		}
		.meter > span {
			display: block;
			height: 100%;
			   -webkit-border-top-right-radius: 8px;
			-webkit-border-bottom-right-radius: 8px;
			       -moz-border-radius-topright: 8px;
			    -moz-border-radius-bottomright: 8px;
			           border-top-right-radius: 8px;
			        border-bottom-right-radius: 8px;
			    -webkit-border-top-left-radius: 20px;
			 -webkit-border-bottom-left-radius: 20px;
			        -moz-border-radius-topleft: 20px;
			     -moz-border-radius-bottomleft: 20px;
			            border-top-left-radius: 20px;
			         border-bottom-left-radius: 20px;
			background-color: rgb(43,194,83);
			background-image: -webkit-gradient(
			  linear,
			  left bottom,
			  left top,
			  color-stop(0, rgb(43,194,83)),
			  color-stop(1, rgb(84,240,84))
			 );
			background-image: -moz-linear-gradient(
			  center bottom,
			  rgb(43,194,83) 37%,
			  rgb(84,240,84) 69%
			 );
			-webkit-box-shadow:
			  inset 0 2px 9px  rgba(255,255,255,0.3),
			  inset 0 -2px 6px rgba(0,0,0,0.4);
			-moz-box-shadow:
			  inset 0 2px 9px  rgba(255,255,255,0.3),
			  inset 0 -2px 6px rgba(0,0,0,0.4);
			box-shadow:
			  inset 0 2px 9px  rgba(255,255,255,0.3),
			  inset 0 -2px 6px rgba(0,0,0,0.4);
			position: relative;
			overflow: hidden;
		}
		.meter > span:after, .animate > span > span {
			content: "";
			position: absolute;
			top: 0; left: 0; bottom: 0; right: 0;
			background-image:
			   -webkit-gradient(linear, 0 0, 100% 100%,
			      color-stop(.25, rgba(255, 255, 255, .2)),
			      color-stop(.25, transparent), color-stop(.5, transparent),
			      color-stop(.5, rgba(255, 255, 255, .2)),
			      color-stop(.75, rgba(255, 255, 255, .2)),
			      color-stop(.75, transparent), to(transparent)
			   );
			background-image:
				-moz-linear-gradient(
				  -45deg,
			      rgba(255, 255, 255, .2) 25%,
			      transparent 25%,
			      transparent 50%,
			      rgba(255, 255, 255, .2) 50%,
			      rgba(255, 255, 255, .2) 75%,
			      transparent 75%,
			      transparent
			   );
			z-index: 1;
			-webkit-background-size: 50px 50px;
			-moz-background-size: 50px 50px;
			background-size: 50px 50px;
			-webkit-animation: move 2s linear infinite;
			-moz-animation: move 2s linear infinite;
			   -webkit-border-top-right-radius: 8px;
			-webkit-border-bottom-right-radius: 8px;
			       -moz-border-radius-topright: 8px;
			    -moz-border-radius-bottomright: 8px;
			           border-top-right-radius: 8px;
			        border-bottom-right-radius: 8px;
			    -webkit-border-top-left-radius: 20px;
			 -webkit-border-bottom-left-radius: 20px;
			        -moz-border-radius-topleft: 20px;
			     -moz-border-radius-bottomleft: 20px;
			            border-top-left-radius: 20px;
			         border-bottom-left-radius: 20px;
			overflow: hidden;
		}

		.animate > span:after {
			display: none;
		}

		@-webkit-keyframes move {
		    0% {
		       background-position: 0 0;
		    }
		    100% {
		       background-position: 50px 50px;
		    }
		}

		@-moz-keyframes move {
		    0% {
		       background-position: 0 0;
		    }
		    100% {
		       background-position: 50px 50px;
		    }
		}


		.orange > span {
			background-color: #f1a165;
			background-image: -moz-linear-gradient(top, #f1a165, #f36d0a);
			background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #f1a165),color-stop(1, #f36d0a));
			background-image: -webkit-linear-gradient(#f1a165, #f36d0a);
		}

		.red > span {
			background-color: #f0a3a3;
			background-image: -moz-linear-gradient(top, #f0a3a3, #f42323);
			background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #f0a3a3),color-stop(1, #f42323));
			background-image: -webkit-linear-gradient(#f0a3a3, #f42323);
		}

		.nostripes > span > span, .nostripes > span:after {
			-webkit-animation: none;
			-moz-animation: none;
			background-image: none;
		}
	</style>
</head>

<body>

<div id="demo-top-bar">

  <div id="demo-bar-inside">

    <h2 id="demo-bar-badge">
      <a href="/">CSS-Tricks Example</a>
    </h2>

    <div id="demo-bar-buttons">
      <a class='header-button' href='/css3-progress-bars/'>&larr; Back to Article</a> &nbsp; <a class='header-button' href='/examples/'>More Demos &rarr;</a>    </div>

  </div>

</div>
	<div id="page-wrap">

	  <h1>Progress Bars</h1>

	  <p>They should stretch fine to whatever the width of the container element is,
	  or just set it. Also they should stretch fine to whatever height you give .meter. </p>

		<div class="meter">
			<span style="width: 25%"></span>
		</div>
		<pre><code>&lt;div class=&quot;meter&quot;&gt;
	&lt;span style=&quot;width: 25%&quot;&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>

		<div class="meter orange nostripes">
			<span style="width: 33.3%"></span>
		</div>
		<pre><code>&lt;div class=&quot;meter orange nostripes&quot;&gt;
	&lt;span style=&quot;width: 33.3%&quot;&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>

		<div class="meter red">
			<span style="width: 80%"></span>
		</div>
		<pre><code>&lt;div class=&quot;meter red&quot;&gt;
	&lt;span style=&quot;width: 80%&quot;&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>

		<div class="meter animate">
			<span style="width: 50%"><span></span></span>
		</div>
		<pre><code>&lt;div class=&quot;meter animate&quot;&gt;
	&lt;span style=&quot;width: 50%&quot;&gt;&lt;span&gt;&lt;/span&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>

	</div>

 <style type="text/css" style="display: none !important;">
	* {
		margin: 0;
		padding: 0;
	}
	body {
		overflow-x: hidden;
	}
	#demo-top-bar {
		text-align: left;
		background: #222;
		position: relative;
		zoom: 1;
		width: 100% !important;
		z-index: 6000;
		padding: 20px 0 20px;
	}
	#demo-bar-inside {
		width: 960px;
		margin: 0 auto;
		position: relative;
		overflow: hidden;
	}
	#demo-bar-buttons {
		padding-top: 10px;
		float: right;
	}
	#demo-bar-buttons a {
		font-size: 12px;
		margin-left: 20px;
		color: white;
		margin: 2px 0;
		text-decoration: none;
		font: 14px "Lucida Grande", Sans-Serif !important;
	}
	#demo-bar-buttons a:hover,
	#demo-bar-buttons a:focus {
		text-decoration: underline;
	}
	#demo-bar-badge {
		display: inline-block;
		width: 302px;
		padding: 0 !important;
		margin: 0 !important;
		background-color: transparent !important;
	}
	#demo-bar-badge a {
		display: block;
		width: 100%;
		height: 38px;
		border-radius: 0;
		bottom: auto;
		margin: 0;
		background: url(/images/examples-logo.png) no-repeat;
		background-size: 100%;
		overflow: hidden;
		text-indent: -9999px;
	}
	#demo-bar-badge:before, #demo-bar-badge:after {
		display: none !important;
	}
</style>
</body>

</html>