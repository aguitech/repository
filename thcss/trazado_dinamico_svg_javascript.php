<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Ejemplo trazado SVG</title>
	<script>
	var longitud = document.querySelector('#trazo1').getTotalLength();
	alert(longitud);   // El primer path del SVG retorna 652.52
	</script>
    <style type="text/css">
      svg {
        width: 50%;
        display: block;
        margin: 0 auto;
      }

      svg path {
        fill: none;
        stroke: #000;
        stroke-width: .5;
        animation: trazar 3s ease-out infinite forwards;  
      }

      #trazo1 {
        stroke-dasharray: 652.52;
        stroke-dashoffset: 652.52;
      }

      #trazo2 {
        stroke-dasharray: 318.48;
        stroke-dashoffset: 318.48;
      }

      #trazo3 {
        stroke-dasharray: 174;
        stroke-dashoffset: 174;
      }


      @keyframes trazar {
        80% {
          stroke-dashoffset: 0;
          stroke-width: .5;
        }

        90% {
          stroke-width: 2;
          opacity: 1;
        }

        100% {
          opacity: 0;
          stroke-dashoffset: 0;
        }
      }
    </style>
  </head>

  <body>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 201 146"><title>Icono de analíticas</title>
    <path id="trazo1" d="M191.723,2.939H10.359C8.505,2.939,7,4.442,7,6.297v134.344C7,142.498,8.505,144,10.359,144h181.363
    c1.855,0,3.359-1.502,3.359-3.358V6.297C195.082,4.442,193.578,2.939,191.723,2.939z"/>
    <path id="trazo2" d="M97.668,120.49c-26.265,0-47.634-21.369-47.634-47.635c0-26.265,21.369-47.634,47.634-47.634
    c0.797,0,1.443,0.647,1.443,1.444v44.747h44.748c0.796,0,1.443,0.646,1.443,1.443C145.303,99.121,123.934,120.49,97.668,120.49z"/>
    <path id="trazo3" d="M155.407,62.751h-46.191c-0.797,0-1.442-0.646-1.442-1.443V15.117c0-0.796,0.646-1.443,1.442-1.443
    c26.266,0,47.635,21.369,47.635,47.635C156.851,62.104,156.204,62.751,155.407,62.751z"/></svg>
    s
  </body>
</html>