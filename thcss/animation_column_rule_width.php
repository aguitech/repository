<!DOCTYPE html>
<html>
<head>
<style> 
#myDIV {
    border: 1px solid black;
    /* Firefox */
    -moz-column-count: 3;
    -moz-column-rule: 1px outset red;
    /* Chrome, Safari, Opera */
    -webkit-column-count: 3;
    -webkit-column-rule: 1px outset red;
    -webkit-animation: mymove 5s infinite;
    /* Standard syntax */
    column-count: 3;
    column-rule: 1pxpx outset red;
    animation: mymove 5s infinite;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    50% {-webkit-column-rule-width: 50px;}
}

/* Standard syntax */
@keyframes mymove {
    50% {
        -moz-column-rule-width: 50px; /* Firefox */
        column-rule-width: 50px;
    }
}
</style>
</head>
<body>

<h1>Animation of column-rule-width</h1>

<p>Gradually change the width of the rule between the columns from 1px to 50px, and back to 1px:<p>

<div id="myDIV">
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
</div>

<p><b>Note:</b> Edge does not support animation on the column-rule-width property.</p>

</body>
</html>
