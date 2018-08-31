<!-- Learn about this code on MDN: https://developer.mozilla.org/en-US/docs/Web/SVG/Attribute/stroke-dashoffset -->
<svg width="200" height="230" viewBox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
    <line  stroke-dasharray="20, 5"                        x1="10" y1="10" x2="190" y2="10" />
    <!-- 
      Because the dashes are size 20 with size 5 breaks adding a stroke dash-offset of 20 causes the line to start with the break 
    -->
    <line stroke-dashoffset="20" stroke-dasharray="20, 5"  x1="10" y1="30" x2="190" y2="30" />
    <!-- 
      Adding a stroke dash-offset of 10% causes the line to start 
      with the break as well here because the svg element has a viewbox width of 200.
      If the size of the svg changed so would the pixel value of stroke-dashoffset.
    -->
    <line stroke-dashoffset="10%" stroke-dasharray="20, 5" x1="10" y1="50" x2="190" y2="50" />
    <line stroke-dashoffset="10" stroke-dasharray="20, 5"  x1="10" y1="70" x2="190" y2="70" />
    
    <line stroke-dashoffset="100" stroke-dasharray="200"   x1="10" y1="90" x2="190" y2="90" />
    <!-- 
    <line stroke-dashoffset="100" stroke-dasharray="100"   x1="10" y1="110" x2="190" y2="110" />
    -->
    <line stroke-dashoffset="0" stroke-dasharray="80%"   x1="10" y1="110" x2="190" y2="110" />
    <!-- 
      With no stroke-dasharray there stroke-dashoffset will have no effect.
    -->
    <line stroke-dashoffset="50"                           x1="10" y1="130" x2="190" y2="130" />
    <!-- 
      stroke-dashoffset values can be negative and as expected offest 
      in the opposite direction as a positive value.
    -->
    <line stroke-dashoffset="-40" stroke-dasharray="80"    x1="10" y1="150" x2="190" y2="150" />
    <line stroke-dasharray="80"                            x1="10" y1="170" x2="190" y2="170" />
    <line stroke-dashoffset="-10%" stroke-dasharray="65, 5, 1, 5"  x1="10" y1="190" x2="190" y2="190" />
    <line  stroke-dasharray="65, 5, 1, 5"                  x1="10" y1="210" x2="190" y2="210" />
    <line  stroke-dasharray="65, 5, 1, 5"                  x1="10" y1="240" x2="190" y2="240" />
    
    <style><![CDATA[
      line{
        stroke: black;
        stroke-width: 2;
        }
        ]]>
    </style>
</svg>
