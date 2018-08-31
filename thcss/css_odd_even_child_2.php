<!DOCTYPE html>
<html>
<head>
<style> 
p:nth-child(3n+1) {
    color:red;
}

/*
3n = significa que cada 3 se debe de repetir
+5 significa que el primero se va a presentar a partir del 5to. elemento
* */
p:nth-child(3n+5) {
    background: #DCDCDC;
}
/* Con esto va a emprezar en el segundo, y se repetira en el cuarto, sexto, octavo lugar*/
p:nth-child(2n) {
    font-size:20px;
}
/* Con esto va a emprezar en el primero, y se repetira en el tercero, quinto lugar*/
p:nth-child(2n + 1) {
    text-decoration:underline;
}
</style>
</head>
<body>

<p>The first paragraph.</p>
<p>The second paragraph.</p>
<p>The third paragraph.</p>

<p><b>Note:</b> Internet Explorer 8 and earlier versions do not support the :nth-child() selector.</p>
<p>The first paragraph.</p>
<p>The second paragraph.</p>
<p>The third paragraph.</p>
<p>The first paragraph.</p>
<p>The second paragraph.</p>
<p>The third paragraph.</p>
<p>The first paragraph.</p>
<p>The second paragraph.</p>
<p>The third paragraph.</p>

</body>
</html>
