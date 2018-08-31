</code></pre><p>Si en lugar de un color de fondo definimos un borde (esto se puede aplicar al resto de formas):</p><div style="width: 100px; height: 100px; border: 3px solid #555;"></div><pre class=" language-css"><code><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.cuadrado-2 {
     width: 100px; 
     height: 100px; 
     border: 3px solid #555;
}</code></code></pre><p>Y se puede combinar border y background:</p><div style="width: 100px; height: 100px; background: #428bca; border: 3px solid #555;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.cuadrado-3 {
     width: 100px; 
     height: 100px; 
     border: 3px solid #555;
     background: #428bca;
}</code></pre><p>Y tan fácil como cambiar las propiedades CSS <code>width</code> y <code>height</code> para obtener un rectángulo:</p><div style="width: 250px; height: 100px; background: #428bca; border: 3px solid #555;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.rectangulo {
     width: 250px; 
     height: 100px; 
     border: 3px solid #555;
     background: #428bca;
}</code></pre><h3>El rombo</h3><p>Si giramos el cuadrado obtendremos una forma de rombo. El giro se consigue gracias a la propiedad <a title="css referencia - transform" href="http://www.w3schools.com/cssref/css3_pr_transform.asp">transform</a> y la función <code>rotate</code>:</p><div style="width: 100px; height: 100px; background: #428bca; border: 3px solid #555; margin: 20px; -webkit-transform: rotate(45deg); -moz-transform: rotate(45deg); -ms-transform: rotate(45deg); -o-transform: rotate(45deg); transform: rotate(45deg); display: inline-block;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.rombo {
     width: 100px; 
     height: 100px; 
     border: 3px solid #555; 
     background: #428bca;
     -webkit-transform: rotate(45deg);
     -moz-transform: rotate(45deg);
     -ms-transform: rotate(45deg);
     -o-transform: rotate(45deg);
     transform: rotate(45deg);
}</code></pre><p>La forma anterior no es realmente un rombo, es tan sólo un cuadrado girado. El verdadero rombo se consigue combinando la función <code>rotate</code> y <code>skew</code> en la propiedad <code>transform</code>:</p><div style="width: 100px; height: 100px; background: #428bca; border: 3px solid #555; -webkit-transform: rotate(45deg) skew(15deg, 15deg); -moz-transform: rotate(45deg) skew(15deg, 15deg); -ms-transform: rotate(45deg) skew(15deg, 15deg); -o-transform: rotate(45deg) skew(15deg, 15deg); transform: rotate(45deg) skew(15deg, 15deg); display: inline-block; margin: 20px 0;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.rombo-2 {
     width: 100px; 
     height: 100px; 
     border: 3px solid #555; 
     background: #428bca;
     -webkit-transform: rotate(45deg) skew(15deg, 15deg);
     -moz-transform: rotate(45deg) skew(15deg, 15deg);
     -ms-transform: rotate(45deg) skew(15deg, 15deg);
     -o-transform: rotate(45deg) skew(15deg, 15deg);
     transform: rotate(45deg) skew(15deg, 15deg);
}</code></pre><h3>Paralelogramos</h3><p>Con la propiedad <code>transform</code> podemos conseguir otros paralelogramos. Por ejemplo:</p><div style="width: 150px; height: 100px; background: #428bca; border: 3px solid #555; margin: 0 0 0 10px; -webkit-transform: skew(20deg); -moz-transform: skew(20deg); -ms-transform: skew(20deg); -o-transform: skew(20deg); transform: skew(20deg);"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.paralelogramo {
     width: 150px; 
     height: 100px; 
     border: 3px solid #555; 
     background: #428bca;
     -webkit-transform: skew(20deg);
     -moz-transform: skew(20deg);
     -ms-transform: skew(20deg);
     -o-transform: skew(20deg);
     transform: skew(20deg);
}</code></pre><h2>Trapecios</h2><div style="width: 250px; height: 0px; border-right: 60px solid transparent; border-left: 60px solid transparent; border-bottom: 100px solid #428bca;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.trapecio {
    width: 250px;
    height: 0px;
    border-right: 60px solid transparent;
    border-left: 60px solid transparent;
    border-bottom: 100px solid #428bca;
}</code></pre><div style="width: 250px; height: 0px; border-right: 60px solid transparent; border-left: 60px solid transparent; border-top: 100px solid #428bca;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.trapecio-top {
    width: 250px;
    height: 0px;
    border-right: 60px solid transparent;
    border-left: 60px solid transparent;
    border-top: 100px solid #428bca;
}</code></pre><h2>Triángulos</h2><p>En CSS podemos definir cada uno de los cuatro bordes de un bloque de forma diferente. Se puede aprovechar esta característica para dibujar formas derivadas del cuadrado, como el triángulo: Por ejemplo, si definimos un borde de una determinada anchura y a los bordes adyacentes le damos la mitad de anchura y un color diferente, obtenemos una forma triangular si al propio contenedor le damos una anchura y altura de cero. Por ejemplo:</p><div style="width: 0; height: 0; border-left: 100px solid #f0ad4e; border-top: 50px solid transparent; border-bottom: 50px solid transparent;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.triangulo {
     width: 0; 
     height: 0; 
     border-left: 100px solid #f0ad4e;
     border-top: 50px solid transparent;
     border-bottom: 50px solid transparent; 
}</code></pre><p>Jugando con cada uno de los bordes podemos &#8220;girar&#8221; el triángulo (este mismo concepto se puede utilizar en el resto de formas basadas en bordes que veremos a continuación):</p><div style="width: 0; height: 0; border-top: 100px solid #f0ad4e; border-left: 50px solid transparent; border-right: 50px solid transparent;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.triangulo-2 {
     width: 0; 
     height: 0; 
     border-left: 100px solid #f0ad4e;
     border-top: 50px solid transparent;
     border-bottom: 50px solid transparent; 
}</code></pre><p>Y también podemos combinar colores:</p><div style="width: 0; height: 0; border-left: 100px solid #428bca; border-top: 50px solid #f0ad4e; border-bottom: 50px solid #d9534f;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.triangulo-tricolor {
     width: 0; 
     height: 0; 
     border-left: 100px solid #428bca;
     border-top: 50px solid #f0ad4e;
     border-bottom: 50px solid #d9534f; 
}</code></pre><h3>Triángulo equilátero</h3><div style="width: 0; height: 0; border-right: 50px solid transparent; border-top: 50px solid transparent; border-left: 50px solid #f0ad4e; border-bottom: 50px solid #f0ad4e;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.triangulo-equilatero-bottom-left {
     width: 0;
     height: 0;
     border-right: 50px solid transparent;
     border-top: 50px solid transparent;
     border-left: 50px solid #f0ad4e;
     border-bottom: 50px solid #f0ad4e;
}</code></pre><div style="width: 0; height: 0; border-right: 100px solid transparent; border-top: 100px solid transparent; border-left: 100px solid transparent; border-bottom: 100px solid #f0ad4e; margin-top: -100px;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.triangulo-equilatero-bottom {
     width: 0;
     height: 0;
     border-right: 100px solid transparent;
     border-top: 100px solid transparent;
     border-left: 100px solid transparent;
     border-bottom: 100px solid #f0ad4e;
}</code></pre><h2>Círculos y formas redondeadas</h2><p>Del cuadrado también podemos obtener el círculo y formas redondeadas si aplicamos la propiedad<a title="border-radius - referencia" href="http://www.w3schools.com/cssref/css3_pr_border-radius.asp"> border-radius</a>. Un <code>border-radius</code> igual del 50% en los cuatro bordes del cuadrado dará el círculo:</p><div style="width: 100px; height: 100px; -moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%; background: #5cb85c;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.circulo {
     width: 100px;
     height: 100px;
     -moz-border-radius: 50%;
     -webkit-border-radius: 50%;
     border-radius: 50%;
     background: #5cb85c;
}</code></pre><h3>Oval</h3><p>Y si podemos tener un círculo, también podemos tener una forma ovalada:</p><div style="width: 250px; height: 100px; -moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%; background: #5cb85c;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.oval {
     width: 250px;
     height: 100px;
     -moz-border-radius: 50%;
     -webkit-border-radius: 50%;
     border-radius: 50%;
     background: #5cb85c;
}</code></pre><p>Combinando distintos valores de border-radius para cada borde obtendremos formas redondeadas diferentes:</p><div style="width: 200px; height: 100px; -moz-border-radius: 0 50% / 0 100%; -webkit-border-radius: 0 50% / 0 100%; border-radius: 0 50% / 0 100%; background: #5cb85c; border: 3px solid #555;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.oval-half-red {
     width: 250px;
     height: 100px;
     -moz-border-radius: 0 50% / 0 100%;
     -webkit-border-radius: 0 50% / 0 100%;
     border-radius: 0 50% / 0 100%;
     background: #5cb85c;
     border: 3px solid #555;
}</code></pre><h3>Huevo</h3><div style="width: 126px; height: 180px; background-color: #5cb85c; -moz-border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%; -webkit-border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%; border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.huevo {
    width: 126px;
    height: 180px;
    background-color: #5cb85c;
    -moz-border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
    -webkit-border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
    border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
}</code></pre><h3>1/4 de círculo</h3><div style="width: 100px; height: 100px; border: 2px solid #555; background: #5cb85c; -moz-border-radius: 0 100% 0 0; -webkit-border-radius: 0 100% 0 0; border-radius: 0 100% 0 0;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.cuarto-circulo {
     width: 100px; 
     height: 100px; 
     border: 2px solid #555; 
     background: #5cb85c;
     -moz-border-radius: 0 100% 0 0;
     -webkit-border-radius: 0 100% 0 0;
     border-radius: 0 100% 0 0;
}</code></pre><h3>Semicírculo</h3><div style="width: 100px; height: 50px; border: 2px solid #555; background: #5cb85c; -moz-border-radius: 100px 100px 0 0; -webkit-border-radius: 100px 100px 0 0; border-radius: 100px 100px 0 0;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.semi-circulo {
     width: 100px; 
     height: 50px; 
     border: 2px solid #555; 
     background: #5cb85c;
     -moz-border-radius: 100px 100px 0 0;
     -webkit-border-radius: 100px 100px 0 0;
     border-radius: 100px 100px 0 0;
}</code></pre><div style="width: 50px; height: 100px; border: 2px solid #555; background: #5cb85c; -moz-border-radius: 0 100px 100px 0; -webkit-border-radius: 0 100px 100px 0; border-radius: 0 100px 100px 0;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.semi-circulo-2 {
     width: 50px; 
     height: 100px; 
     border: 2px solid #555; 
     background: #5cb85c;
     -moz-border-radius: 0 100px 100px 0;
     -webkit-border-radius: 0 100px 100px 0;
     border-radius: 0 100px 100px 0;
}</code></pre><h3>Pac-Man (ComeCocos)</h3><div style="width: 0px; height: 0px; border-right: 50px solid transparent; border-top: 50px solid #5cb85c; border-left: 50px solid #5cb85c; border-bottom: 50px solid #5cb85c; -moz-border-radius: 100%; -webkit-border-radius: 100%; border-radius: 100%;"></div><p>&lt;pre&#8221;&gt;.pac-man { width:0; height:0; border-right: 50px solid transparent; border-top: 50px solid #5cb85c; border-left: 50px solid #5cb85c; border-bottom: 50px solid #5cb85c; -moz-border-radius: 100%; -webkit-border-radius: 100%; border-radius: 100%; }</p><p>Démosle color:</p><div style="width: 0px; height: 0px; border-right: 50px solid #d9534f; border-top: 50px solid #428bca; border-left: 50px solid #f0ad4e; border-bottom: 50px solid #5cb85c; -moz-border-radius: 100%; -webkit-border-radius: 100%; border-radius: 100%;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.color-chart {
     width:0;
     height:0;
     border-right: 50px solid #d9534f;
     border-top: 50px solid #428bca;
     border-left: 50px solid #f0ad4e;
     border-bottom: 50px solid #5cb85c;
     -moz-border-radius: 100%;
     -webkit-border-radius: 100%;
     border-radius: 100%;
}</code></pre><p>Y con el negativo de pac-man y unos ligeros ajustes en el grosor de los bordes tendremos un cono:</p><div style="width: 0px; height: 0px; border-right: 70px solid transparent; border-left: 70px solid transparent; border-top: 100px solid #5cb85c; -moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.cono {
    width: 0px;
    height: 0px;
    border-right: 70px solid transparent;
    border-left: 70px solid transparent;
    border-top: 100px solid #5cb85c;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}</code></pre><h2>Más formas</h2><h3>Ribbon</h3><div style="width: 0px; height: 120px; border-left: 50px solid #d9534f; border-right: 50px solid #d9534f; border-bottom: 35px solid transparent;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.ribbon {
    width: 0px;
    height: 120px;
    border-left: 50px solid #d9534f;
    border-right: 50px solid #d9534f;
    border-bottom: 35px solid transparent;
}</code></pre><h3>Luna</h3><div style="width: 100px; height: 100px; -moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%; -moz-box-shadow: 30px 10px 0 #d9534f; -webkit-box-shadow: 30px 10px 0 #d9534f; box-shadow: 30px 10px 0 #d9534f;"></div><pre><code class=" language-css" itemscope itemtype="https://schema.org/SoftwareSourceCode"><meta itemprop="programmingLanguage" content="css"><meta itemprop="sampleType" content="code snippet">.luna {
    width: 100px;
    height: 100px;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    -moz-box-shadow: 30px 10px 0 #d9534f;
    -webkit-box-shadow: 30px 10px 0 #d9534f;
    box-shadow: 30px 10px 0 #d9534f;
}</code></pre>