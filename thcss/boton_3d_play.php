<div id="container_button">
	<div id="hole">
		<div id="button">
			<div id="triangle"></div>
			<div id="lighter_triangle"></div>
			<div id="darker_triangle"></div>
		</div>
	</div>
</div>
<style>
#container_button {
    background-color: #252525;
    width: 400px;
    height: 400px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0px;
    margin-top: 0px;
    -webkit-border-radius: 200px;
    -moz-border-radius: 200px;
    border-radius: 200px;
    -webkit-box-shadow: inset 0px 2px 0px #585858, 1px 1px 0px #000, 2px 2px 5px #000;
    -moz-box-shadow: inset 0px 2px 0px #585858, 1px 1px 0px #000, 2px 2px 5px #000;
    box-shadow: inset 0px 2px 0px #585858, 1px 1px 0px #000, 2px 2px 5px #000;
}
#hole {
    background-color: #151515;
    width: 310px;
    height: 310px;
    margin-left: auto;
    margin-right: auto;
    top: 50px;
    position: relative;
    -webkit-border-radius: 155px;
    -moz-border-radius: 155px;
    border-radius: 155px;
    -webkit-box-shadow: 1px 1px 0px #5d5d5d;
    -moz-box-shadow: 1px 1px 0px #5d5d5d;
    box-shadow: 1px 1px 0px #5d5d5d;
}
#button {
    width: 300px;
    height: 300px;
    margin-left: auto;
    margin-right: auto;
    overflow: auto;
    cursor: pointer;
    top: -5px;
    position: relative;
    background-image: linear-gradient(bottom, rgb(82,79,82) 0%, rgb(134,134,134) 57%);
    background-image: -o-linear-gradient(bottom, rgb(82,79,82) 0%, rgb(134,134,134) 57%);
    background-image: -moz-linear-gradient(bottom, rgb(82,79,82) 0%, rgb(134,134,134) 57%);
    background-image: -webkit-linear-gradient(bottom, rgb(82,79,82) 0%, rgb(134,134,134) 57%);
    background-image: -ms-linear-gradient(bottom, rgb(82,79,82) 0%, rgb(134,134,134) 57%);
    -webkit-border-radius: 150px;
    -moz-border-radius: 150px;
    border-radius: 150px;
    -webkit-box-shadow: inset 0px 2px 0px #a8a8a8, 0px 2px 0px #2a2a2a, 0px 3px 0px #2a2a2a, 0px 4px 0px #2a2a2a, 0px 5px 0px #2a2a2a, 0px 6px 0px #2a2a2a, 0px 7px 0px #2a2a2a, 0px 8px 0px #2a2a2a, 0px 9px 0px #2a2a2a, 0px 10px 0px #2a2a2a, 10px 20px 10px #000;
    -moz-box-shadow: inset 0px 2px 0px #a8a8a8, 0px 2px 0px #2a2a2a, 0px 3px 0px #2a2a2a, 0px 4px 0px #2a2a2a, 0px 5px 0px #2a2a2a, 0px 6px 0px #2a2a2a, 0px 7px 0px #2a2a2a, 0px 8px 0px #2a2a2a, 0px 9px 0px #2a2a2a, 0px 10px 0px #2a2a2a, 10px 20px 10px #000;
    box-shadow: inset 0px 2px 0px #a8a8a8, 0px 2px 0px #2a2a2a, 0px 3px 0px #2a2a2a, 0px 4px 0px #2a2a2a, 0px 5px 0px #2a2a2a, 0px 6px 0px #2a2a2a, 0px 7px 0px #2a2a2a, 0px 8px 0px #2a2a2a, 0px 9px 0px #2a2a2a, 0px 10px 0px #2a2a2a, 10px 20px 10px #000;
    -webkit-transition: all .2s;
    -moz-transition: all .2s;
    transition: all .2s;
}
#button:active {
    top: 5px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: inset 0px 2px 0px #a8a8a8;
}
#triangle {
    width: 0px;
    height: 0px;
    margin-left: 50%;
    margin-top: 50%;
    left: -27px;
    top: -50px;
    position: relative;
    border-top: 50px solid transparent;
    border-bottom: 50px solid transparent;
    border-left: 80px solid #22a9db;
    z-index: 2;
    -webkit-transition: all .3s;
    -moz-transition: all .3s;
    transition: all .3s;
}
#button:hover #triangle { border-left: 80px solid #45bde9 }
#button:active #triangle { border-left: 80px solid #e94545 }
#lighter_triangle {
    width: 0px;
    height: 0px;
    margin-left: 50%;
    margin-top: 50%;
    left: -27px;
    top: -48px;
    position: absolute;
    border-top: 50px solid transparent;
    border-bottom: 50px solid transparent;
    border-left: 80px solid #43c0ee;
    z-index: 1;
    -webkit-transition: all .3s;
    -moz-transition: all .3s;
    transition: all .3s;
}
#button:hover #lighter_triangle { border-left: 80px solid #8bdaf7 }
#button:active #lighter_triangle { border-left: 80px solid #f78b8b }
#darker_triangle {
    width: 0px;
    height: 0px;
    margin-left: 50%;
    margin-top: 50%;
    left: -28px;
    top: -53px;
    position: absolute;
    border-top: 50px solid transparent;
    border-bottom: 50px solid transparent;
    border-left: 80px solid #0a7da7;
    z-index: 1;
    -webkit-transition: all .3s;
    -moz-transition: all .3s;
    transition: all .3s;
}
#button:hover #darker_triangle { border-left: 80px solid #1d98c5 }
#button:active #darker_triangle { border-left: 80px solid #c51d1d }
</style>

