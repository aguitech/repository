<!DOCTYPE html>
<html>
	<head>
		<style>
body {
    background: #1D2329;
    background-image: -webkit-linear-gradient(left, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.1) 50%, rgba(0,0,0,0) 50%, rgba(0,0,0,0) 100%);
    background-image:  -khtml-linear-gradient(left, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.1) 50%, rgba(0,0,0,0) 50%, rgba(0,0,0,0) 100%);
    background-image:    -moz-linear-gradient(left, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.1) 50%, rgba(0,0,0,0) 50%, rgba(0,0,0,0) 100%);
    background-image:     -ms-linear-gradient(left, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.1) 50%, rgba(0,0,0,0) 50%, rgba(0,0,0,0) 100%);
    background-image:      -o-linear-gradient(left, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.1) 50%, rgba(0,0,0,0) 50%, rgba(0,0,0,0) 100%);
    background-image:         linear-gradient(left, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.1) 50%, rgba(0,0,0,0) 50%, rgba(0,0,0,0) 100%);
    background-position: 40% 50%;
    background-size: 2px 2px;
    -webkit-user-select: none;
       -moz-user-select: none;
            user-select: none;
}
.button, .button:before, .button:after {
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
    border-radius: 35px;
}

.button {
    font-family: 'pictos';
    font-size: 45px;
    line-height: 40px;
    text-align: center;
    color: rgba(0,0,0,0.5);
    text-shadow: rgba(0,0,0,0.1) 0px -2px 1px, rgb(255,255,255) 0px 1px 2px;
    
    width: 60px;
    height: 60px;
    padding: 10px;
    margin: 50px auto;
    position: static;
    z-index: 50;
    cursor: pointer;
    margin-top: 50px;
    
    background-color: transparent;
    border: rgba(0,0,0,0.3) 1px solid;
    border-top-color: rgba(0,0,0,0.1);
    border-left-color: rgba(0,0,0,0.2);
    border-right-color: rgba(0,0,0,0.2);
    border-bottom-color: rgba(0,0,0,0.3);
    box-shadow: inset rgba(255,255,255,0.3) -5px -30px 10px,
                inset rgba(255,255,255,0.3) 0px 30px 10px,
                inset rgba(255,255,255,1) 0px 2px 1px,
                rgba(0,0,0,0.4) 0px 10px 15px;
    -webkit-transition: -webkit-box-shadow 0s ease-in-out;
     -khtml-transition:  -khtml-box-shadow 0s ease-in-out;
       -moz-transition:    -moz-box-shadow 0s ease-in-out;
         -o-transition:      -o-box-shadow 0s ease-in-out;
            transition:         box-shadow 0s ease-in-out;
    
    background-image:   -webkit-radial-gradient(  50%   0%,  8% 50%, hsla(0,0%,100%,.2) 0%, hsla(0,0%,100%,0) 100%),
                        -webkit-radial-gradient(  50% 100%, 12% 50%, hsla(0,0%,100%,0) 0%, hsla(0,0%,100%,0) 100%),
                        -webkit-radial-gradient(   0%  50%, 50%  7%, hsla(0,0%,100%,0) 0%, hsla(0,0%,100%,0) 100%),
                        -webkit-radial-gradient( 100%  50%, 50%  5%, hsla(0,0%,100%,0) 0%, hsla(0,0%,100%,0) 100%),
                        
                        -webkit-repeating-radial-gradient(  50% 50%, 100% 100%, hsla(0,0%,  0%,0) 0%, hsla(0,0%,  0%,0)   3%, hsla(0,0%,  0%,.1) 3.5%),
                        -webkit-repeating-radial-gradient(  50% 50%, 100% 100%, hsla(0,0%,100%,0) 0%, hsla(0,0%,100%,0)   6%, hsla(0,0%,100%,.1) 7.5%),
                        -webkit-repeating-radial-gradient(  50% 50%, 100% 100%, hsla(0,0%,100%,0) 0%, hsla(0,0%,100%,0) 1.2%, hsla(0,0%,100%,0) 2.2%);
                        
}

.button:before, .button:after {
    content: "";
    display: block;
    position: absolute;
}

.button:before {
    z-index: -50;
    width: 60px;
    height: 64px;
    
    margin-top: -15px;
    margin-left: -11px;
    
    background: #666666;
    background: -moz-linear-gradient(left, #666666 0%, #bbbbbb 50%, #666666 100%);
    background: -webkit-gradient(linear, left top, right top, color-stop(0%,#666666), color-stop(50%,#bbbbbb), color-stop(100%,#666666));
    background: -webkit-linear-gradient(left, #666666 0%,#bbbbbb 50%,#666666 100%);
    background: -o-linear-gradient(left, #666666 0%,#bbbbbb 50%,#666666 100%);
    background: -ms-linear-gradient(left, #666666 0%,#bbbbbb 50%,#666666 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#666666', endColorstr='#666666',GradientType=1 );
    background: linear-gradient(left, #666666 0%,#bbbbbb 50%,#666666 100%);
    
    box-shadow: #000 0px 0px 2px;
}
.button:after {
    z-index: -100;
    width: 70px;
    height: 70px;
    margin-top: -60px;
    margin-left: -16px;
    background: rgba(0,0,0,0.1);
    
    box-shadow: inset rgba(255,255,255,0.1) 0px -5px 5px,
                rgba(0,0,0,0.1) 0px 3px 3px,
                rgba(255,255,255,0.05) 0px -3px 3px;
}
.button:hover {
    color: rgba(0,0,0,0.6);
    text-shadow: rgb(255,255,255) 0px 0px 3px;
    box-shadow: inset rgba(255,255,255,0.4) 0px -30px 15px,
                inset rgba(255,255,255,0.2) -25px 25px 10px,
                inset rgba(255,255,255,1) 0px 2px 1px,
                rgba(0,0,0,0.4) 0px 10px 15px;
}
.button:active {
    margin-top: 46px;
    color: #fff;
    box-shadow: inset rgba(255,255,255,0.4) 0px -30px 15px,
                inset rgba(255,255,255,0.2) -25px 25px 10px,
                inset rgba(255,255,255,1) 0px 2px 1px,
                rgba(0,0,0,0.4) 0px 2px 3px;
}
.button:active:before {
    height: 60px;
    margin-top: -11px;
}
.button:active:after {
    margin-top: -56px;
}
        </style>
		<meta charset="utf-8">
		<title>Test</title>

			<link href="http://jamesrossini.com/fonts/pictos/import.css" media="screen" rel="stylesheet" type="Text/css" />
	</head>
	<body>
		
	<div class="button">e</div>
	
	</body>
</html>
