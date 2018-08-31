<!DOCTYPE>
<html>
<head>
	<title></title>
	<style>
    #grad1{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: linear-gradient(red, yellow); /* Standard syntax (must be last) */
    }
    #grad2{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: linear-gradient(to right, red , yellow); /* Standard syntax (must be last) */
    }
    #grad3{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: linear-gradient(to bottom right, red, yellow); /* Standard syntax (must be last) */
    }
    #grad4{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: linear-gradient(0deg, red, yellow); /* Standard syntax (must be last) */
    }
    #grad5{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: linear-gradient(90deg, red, yellow); /* Standard syntax (must be last) */
    }
    #grad6{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: linear-gradient(180deg, red, yellow); /* Standard syntax (must be last) */
    }
    #grad7{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: linear-gradient(-90deg, red, yellow); /* Standard syntax (must be last) */
    }
    #grad8{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: linear-gradient(red, yellow, green); /* Standard syntax (must be last) */
    }
    #grad9{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: linear-gradient(red, orange, yellow, green, blue, indigo, violet); /* Standard syntax (must be last) */
    }
    #grad10{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: linear-gradient(red 10%, green 85%, blue 90%); /* Standard syntax (must be last) */
    }
    #grad11{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet); /* Standard syntax (must be last) */
    }
    #grad12{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1)); /* Standard syntax (must be last) */
    }
    #grad13{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: repeating-linear-gradient(red, yellow 10%, green 20%); /* Standard syntax (must be last) */
    }
    #grad14{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: repeating-linear-gradient(45deg,red,yellow 7%,green 10%); /* Standard syntax (must be last) */
    }
    #grad15{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: repeating-linear-gradient(190deg,red,yellow 7%,green 10%); /* Standard syntax (must be last) */
    }
    #grad16{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: repeating-linear-gradient(90deg,red,yellow 7%,green 10%); /* Standard syntax (must be last) */
    }
    #grad17{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: radial-gradient(red, yellow, green); /* Standard syntax (must be last) */
    }
    #grad18{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: radial-gradient(red 5%, yellow 15%, green 60%); /* Standard syntax (must be last) */
    }
    #grad19{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: radial-gradient(red, yellow, green); /* Standard syntax (must be last) */
    }
    #grad20{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: radial-gradient(circle, red, yellow, green); /* Standard syntax (must be last) */
    }
    #grad21{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: radial-gradient(closest-side at 60% 55%, red, yellow, black); /* Standard syntax (must be last) */
    }
    #grad22{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: radial-gradient(farthest-side at 60% 55%, red, yellow, black); /* Standard syntax (must be last) */
    }
    #grad23{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: radial-gradient(closest-corner at 60% 55%, red, yellow, black); /* Standard syntax (must be last) */
    }
    #grad24{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: radial-gradient(farthest-corner at 60% 55%, red, yellow, black); /* Standard syntax (must be last) */
    }
    #grad25{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: repeating-radial-gradient(red, yellow 10%, green 15%); /* Standard syntax (must be last) */
    }
    #grad{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
         /* Standard syntax (must be last) */
    }
    #grad{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
         /* Standard syntax (must be last) */
    }
    #grad{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
         /* Standard syntax (must be last) */
    }
    #grad{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
         /* Standard syntax (must be last) */
    }
    #grad{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
         /* Standard syntax (must be last) */
    }
    #grad{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
         /* Standard syntax (must be last) */
    }
    #grad{
        height: 200px;
        background: red; /* For browsers that do not support gradients */
         /* Standard syntax (must be last) */
    }
    
    </style>
</head>
<body style="">
	<h1>Top to bottom</h1>
	<div id="grad1"></div>
	<h1>Left to right</h1>
	<div id="grad2"></div>
	<h1>Diagonal</h1>
	<div id="grad3"></div>
	<h1>Usando diferentes angulos</h1>
	<h1>0 grados</h1>
	<div id="grad4"></div>
	<h1>90 grados</h1>
	<div id="grad5"></div>
	<h1>180 grados</h1>
	<div id="grad6"></div>
	<h1>-90 grados</h1>
	<div id="grad7"></div>
	<h1>Multiple color stops</h1>
	<h1>3 colores igualmente separados</h1>
	<div id="grad8"></div>
	<h1>7 colores igualmente separados</h1>
	<div id="grad9"></div>
	<h1>7 colores no igualmente separados</h1>
	<div id="grad10"></div>
	<h1>Degradado</h1>
	<div id="grad11"></div>
	<h1>Usando transparencias</h1>
	<div id="grad12"></div>
	<h1>Repitiendo degradados lineares</h1>
	<div id="grad13"></div>
	<h1></h1>
	<div id="grad14"></div>
	<h1></h1>
	<div id="grad15"></div>
	<h1></h1>
	<div id="grad16"></div>
	<h1>Gradiantes radiales</h1>
	<h2>Separado uniformemente</h2>
	<div id="grad17"></div>
	<h1>Separados desigualmente</h1>
	<div id="grad18"></div>
	<h1>Radial Gradient Shapes</h1>
	<h1>Ellipse (default)</h1>
	<div id="grad19"></div>
	<h1>Circle</h1>
	<div id="grad20"></div>
	<h1>Radial Gradients - Different size keywords</h1>
	<h2>closest-side</h2>
	<div id="grad21"></div>
	<h2>farthest-side</h2>
	<div id="grad22"></div>
	<h2>closest-corner</h2>
	<div id="grad23"></div>
	<h2>farthest-corner (default)</h2>
	<div id="grad24"></div>
	<h1>Repeating Radial Gradient</h1>
	<div id="grad25"></div>
	<h1></h1>
	<div id="grad26"></div>
	<h1></h1>
	<div id="grad27"></div>
	<h1></h1>
	<div id="grad28"></div>
	
</body>
</html>