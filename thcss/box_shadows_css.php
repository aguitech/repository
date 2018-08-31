<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/core.css">
		<link rel="stylesheet" href="css/box-shadow.css">
		<link href='//fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
		<style>
body
{
    background: #eee;
}
/*Container*/
.container{
	width:900px;
	margin:30px auto;
	padding:25px;
	min-height:400px;
	height:auto;	
}
.container h2 { margin-top:30px;}
.bsap_adhere
{
    height: 300px;
    width: 250px;
    position: absolute;
    top: 280px;
}




.box h3{
    text-align:center;
    position:relative;
    top:80px;
}
.box {
    width:70%;
    height:200px;
    background:#FFF;
    margin:40px auto;
}

/*==================================================
 * Effect 1
 * ===============================================*/
.effect1
{
    box-shadow: 0 10px 6px -6px #777;
}

/*==================================================
 * Effect 2
 * ===============================================*/
.effect2
{
    position: relative;
}
.effect2:before, .effect2:after
{
    z-index: -1;
    position: absolute;
    content: "";
    bottom: 15px;
    left: 10px;
    width: 50%;
    top: 80%;
    max-width:300px;
    background: #777;
    box-shadow: 0 15px 10px #777;
    transform: rotate(-3deg);
}
.effect2:after
{
    transform: rotate(3deg);
    right: 10px;
    left: auto;
}

/*==================================================
 * Effect 3
 * ===============================================*/
.effect3
{
    position: relative;
}
.effect3:before
{
    z-index: -1;
    position: absolute;
    content: "";
    bottom: 15px;
    left: 10px;
    width: 50%;
    top: 80%;
    max-width:300px;
    background: #777;
    box-shadow: 0 15px 10px #777;
    transform: rotate(-3deg);
}

/*==================================================
 * Effect 4
 * ===============================================*/
.effect4
{
    position: relative;
}
.effect4:after
{
    z-index: -1;
    position: absolute;
    content: "";
    bottom: 15px;
    right: 10px;
    left: auto;
    width: 50%;
    top: 80%;
    max-width:300px;
    background: #777;
    box-shadow: 0 15px 10px #777;
    transform: rotate(3deg);
}

/*==================================================
 * Effect 5
 * ===============================================*/
.effect5
{
    position: relative;
}
.effect5:before, .effect5:after
{
    z-index: -1;
    position: absolute;
    content: "";
    bottom: 25px;
    left: 10px;
    width: 50%;
    top: 80%;
    max-width:300px;
    background: #777;
    -webkit-box-shadow: 0 35px 20px #777;
    -moz-box-shadow: 0 35px 20px #777;
    box-shadow: 0 35px 20px #777;
    -webkit-transform: rotate(-8deg);
    -moz-transform: rotate(-8deg);
    -o-transform: rotate(-8deg);
    -ms-transform: rotate(-8deg);
    transform: rotate(-8deg);
}
.effect5:after
{
    -webkit-transform: rotate(8deg);
    -moz-transform: rotate(8deg);
    -o-transform: rotate(8deg);
    -ms-transform: rotate(8deg);
    transform: rotate(8deg);
    right: 10px;
    left: auto;
}

/*==================================================
 * Effect 6
 * ===============================================*/
.effect6
{
    position:relative;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
    -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
    box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
}
.effect6:before, .effect6:after
{
    content:"";
    position:absolute;
    z-index:-1;
    -webkit-box-shadow:0 0 20px rgba(0,0,0,0.8);
    -moz-box-shadow:0 0 20px rgba(0,0,0,0.8);
    box-shadow:0 0 20px rgba(0,0,0,0.8);
    top:50%;
    bottom:0;
    left:10px;
    right:10px;
    -moz-border-radius:100px / 10px;
    border-radius:100px / 10px;
}
.effect6:after
{
    right:10px;
    left:auto;
    transform:skew(8deg) rotate(3deg);
}

/*==================================================
 * Effect 7
 * ===============================================*/
.effect7
{
    position:relative;
    box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
}
.effect7:before, .effect7:after
{
    content:"";
    position:absolute;
    z-index:-1;
    box-shadow:0 0 20px rgba(0,0,0,0.8);
    top:0;
    bottom:0;
    left:10px;
    right:10px;
    border-radius:100px / 10px;
}
.effect7:after
{
    right:10px;
    left:auto;
    transform:skew(8deg) rotate(3deg);
}

/*==================================================
 * Effect 8
 * ===============================================*/
.effect8
{
    position:relative;
    box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
}
.effect8:before, .effect8:after
{
    content:"";
    position:absolute;
    z-index:-1;
    box-shadow:0 0 20px rgba(0,0,0,0.8);
    top:10px;
    bottom:10px;
    left:0;
    right:0;
    border-radius:100px / 10px;
}
.effect8:after
{
    right:10px;
    left:auto;
    transform:skew(8deg) rotate(3deg);
}
		</style>
		<title>CSS Box Shadow Effects - Demo</title>
	</head>

    <style>
        .display-container
        {
            position: absolute;
            top: 3rem;
            right: 1rem;
            width: 300px;
            font-size: 1rem;
        }
    </style>
<body>

<section class="container">
    <h2>CSS Box Shadow Effects - Demo</h2>

    <p><a href="sass-box-shadow.php">View Sass version</a></p>
    <div class="box effect1">
        <h3>Effect 1</h3>
    </div>
    <div class="box effect2">
        <h3>Effect 2</h3>
    </div>
    <div class="box effect3">
        <h3>Effect 3</h3>
    </div>
    <div class="box effect4">
        <h3>Effect 4</h3>
    </div>
    <div class="box effect5">
        <h3>Effect 5</h3>
    </div>
    <div class="box effect6">
        <h3>Effect 6</h3>
    </div>
    <div class="box effect7">
        <h3>Effect 7</h3>
    </div>
    <div class="box effect8">
        <h3>Effect 8</h3>
    </div>
</section>
</body>
</html>