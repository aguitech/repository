<!DOCTYPE html>
<html>
<head>
<style> 
#myDIV {
    letter-spacing: 2px;
    -webkit-animation: mymove 5s infinite; /* Safari 4.0 - 8.0 */
    animation: mymove 5s infinite;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes mymove {
    50% {letter-spacing: 50px;}
}

@keyframes mymove {
    50% {letter-spacing: 50px;}
}
</style>
</head>
<body>

<h1>Animation of letter-spacing</h1>

<p>Gradually change the letter-spacing property of the DIV element from 2px up to 50px, and back to 2px:<p>

<div id="myDIV">
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
</div>

<p><b>Note:</b> CSS Animations do not work in Internet Explorer 9 and earlier versions.</p>

</body>
</html>
