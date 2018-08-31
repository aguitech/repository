<!DOCTYPE html>
<html>
<head>
<style> 
#myDIV {
    border: 1px solid black;
    -webkit-animation: mymove 5s infinite; /* Chrome, Safari, Opera */
    animation: mymove 5s infinite;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    50% {-webkit-columns: 100px 5;}
}

/* Standard syntax */
@keyframes mymove {
    50% {
        -moz-columns: 100px 5; /* Firefox */
        columns: 100px 5;
    }
}
</style>
</head>
<body>

<h1>Animation of columns</h1>

<p>Gradually change the columns property:<p>
<div id="myDIV">
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
</div>

<p>The columns property is a shorthand property for setting the column-count and column-width properties.</p>

<p><b>Note:</b> Edge does not support animation on the columns property.</p>

</body>
</html>
