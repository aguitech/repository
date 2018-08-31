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
    -webkit-column-rule: 1px outset red;
    -webkit-column-count: 3;
    -webkit-animation: mymove 5s infinite;
    /* Standard syntax */
    column-count: 3;
    column-rule: 1px outset red;
    animation: mymove 5s infinite;

}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    50% {-webkit-column-rule: 50px outset blue; }
}

/* Standard syntax */
@keyframes mymove {
    50% {
        -moz-column-rule: 50px outset blue; /* Firefox */
        column-rule: 50px outset blue;
    }
}
</style>
</head>
<body>

<h1>Animation of column-rule</h1>

<p>Gradually change the rule between the columns:<p>
<div id="myDIV">
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
</div>

<p>The column-rule property is a shorthand property for all column-rule properties.</p>
<p>The column-rule-color and column-rule-width properties are <em>animatable</em> in CSS.</p>
<p><b>Note:</b> Edge does not support animation on the column-rule property.</p>

</body>
</html>
