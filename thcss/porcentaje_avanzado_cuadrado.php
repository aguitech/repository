<?php
$porcentaje = $_GET["porcentaje"];
?>
<script src="//d3js.org/d3.v4.min.js"></script>
<script>

var color = d3.interpolateRainbow;

var path = d3.select("path").remove();

d3.select("svg").selectAll("path")
    .data(quads(samples(path.node(), 8)))
  .enter().append("path")
    .style("fill", function(d) { return color(d.t); })
    .style("stroke", function(d) { return color(d.t); })
    .attr("d", function(d) { return lineJoin(d[0], d[1], d[2], d[3], 32); });

// Sample the SVG path uniformly with the specified precision.
function samples(path, precision) {
  var n = path.getTotalLength(), t = [0], i = 0, dt = precision;
  while ((i += dt) < n) t.push(i);
  t.push(n);
  return t.map(function(t) {
    var p = path.getPointAtLength(t), a = [p.x, p.y];
    a.t = t / n;
    return a;
  });
}

// Compute quads of adjacent points [p0, p1, p2, p3].
function quads(points) {
  return d3.range(points.length - 1).map(function(i) {
    var a = [points[i - 1], points[i], points[i + 1], points[i + 2]];
    a.t = (points[i].t + points[i + 1].t) / 2;
    return a;
  });
}

// Compute stroke outline for segment p12.
function lineJoin(p0, p1, p2, p3, width) {
  var u12 = perp(p1, p2),
      r = width / 2,
      a = [p1[0] + u12[0] * r, p1[1] + u12[1] * r],
      b = [p2[0] + u12[0] * r, p2[1] + u12[1] * r],
      c = [p2[0] - u12[0] * r, p2[1] - u12[1] * r],
      d = [p1[0] - u12[0] * r, p1[1] - u12[1] * r];

  if (p0) { // clip ad and dc using average of u01 and u12
    var u01 = perp(p0, p1), e = [p1[0] + u01[0] + u12[0], p1[1] + u01[1] + u12[1]];
    a = lineIntersect(p1, e, a, b);
    d = lineIntersect(p1, e, d, c);
  }

  if (p3) { // clip ab and dc using average of u12 and u23
    var u23 = perp(p2, p3), e = [p2[0] + u23[0] + u12[0], p2[1] + u23[1] + u12[1]];
    b = lineIntersect(p2, e, a, b);
    c = lineIntersect(p2, e, d, c);
  }

  return "M" + a + "L" + b + " " + c + " " + d + "Z";
}

// Compute intersection of two infinite lines ab and cd.
function lineIntersect(a, b, c, d) {
  var x1 = c[0], x3 = a[0], x21 = d[0] - x1, x43 = b[0] - x3,
      y1 = c[1], y3 = a[1], y21 = d[1] - y1, y43 = b[1] - y3,
      ua = (x43 * (y1 - y3) - y43 * (x1 - x3)) / (y43 * x21 - x43 * y21);
  return [x1 + ua * x21, y1 + ua * y21];
}

// Compute unit vector perpendicular to p01.
function perp(p0, p1) {
  var u01x = p0[1] - p1[1], u01y = p1[0] - p0[0],
      u01d = Math.sqrt(u01x * u01x + u01y * u01y);
  return [u01x / u01d, u01y / u01d];
}

</script>
<style>
.animacion{

}
@keyframes mymove2 {
    0%   {top: 0px; background: #ce0000; width: 0%;}
	20%   {top: 0px; background: #c6b500; width: 20%;}
	40%   {top: 0px; background: #24c600; width: 40%;}
	60%   {top: 0px; background: #00c6b2; width: 60%;}
	80%   {top: 0px; background: #0039bf; width: 80%;}
    100% {top: 0px; background: #8500bf; width: 100%;}
}
.animacion_circulo{
	/*stroke-dasharray: 20;*/
	/*stroke-dasharray: 20;*/
	/*animation: dash 5s linear;*/
	animation-name: dash;
    animation-duration: 4s;
	/*
    animation-iteration-count: infinite;
    */
}
@keyframes dash {
    /*0%   {top: 0px; stroke-dashoffset: 1000; }*/
    from{
        stroke-dasharray:00, 100;
    }
	to{
        stroke-dasharray:<?php echo $porcentaje; ?>, 100;
    }
	/*
    0%   {top: 0px; stroke-dasharray:00, 100;}
	20%   {top: 0px; stroke-dasharray:15, 100;}
	40%   {top: 0px; stroke-dasharray:30, 100;}
	60%   {top: 0px; stroke-dasharray:45, 100;}
	80%   {top: 0px; stroke-dasharray:60, 100;}
    100% {top: 0px; stroke-dasharray:75, 100;}
	*/
}

    
/*
@keyframes dash {
  to {
    
  }
}
*/
</style>
<!-- <svg viewbox="0 0 36 36" style="position:absolute; top:0px; z-index:0;" class="animation_circle">-->

<svg viewbox="0 0 36 36" style="position:absolute; top:0px; z-index:1;" class="animacion" >
	<defs>
        <linearGradient id="linear" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" style="stop-color:rgb(255,255,0);stop-opacity:1" />
          <stop offset="100%" style="stop-color:rgb(255,0,0);stop-opacity:1" />
        </linearGradient>
      </defs>
  <path
    d="M18 2.0845
      a 15.9155 15.9155 0 0 1 0 31.831
      a 15.9155 15.9155 0 0 1 0 -31.831"
    fill="none"
    stroke="url(#linear)";
    stroke-width="1";
    class="animacion_circulo"
    stroke-dasharray="<?php echo $porcentaje; ?>, 100"
    stroke-linecap="square"
    
  />
</svg>

<svg viewbox="0 0 36 36" style="position:absolute; top:0; z-index:0; z-index:0;">
  <path
    d="M18 2.0845
      a 15.9155 15.9155 0 0 1 0 31.831
      a 15.9155 15.9155 0 0 1 0 -31.831"
    fill="none"
    stroke="#ccc";
    stroke-width="1";
    stroke-dasharray="100, 100"
  />
</svg>
<!-- 
Degradados
https://vanseodesign.com/web-design/svg-linear-gradients/
 -->
