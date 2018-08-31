<html>
<head>

<!-- <script type="text/javascript" src="jquery-1.4.2.min.js"></script> -->
<script src="http://aguitech.com/js/jquery-3.3.1.js"></script>

<style type="text/css">
	#mouseout-outerBox1, #mouseleave-outerBox1,
	#mouseout-outerBox2, #mouseleave-outerBox2{
		margin:8px;
		border:1px groove #999966;
		background-color : #999966;
		width:150px;
		height:150px;
		color:white;
	}
	#mouseout-innerBox2, #mouseleave-innerBox2{
		margin:8px 8px 8px 16px;
		border:1px groove #0000FF;
		background-color : #0000FF;
		width:100px;
		height:100px;
		color:white;
	}
	span{
		padding:8px;
	}
	.content{
		width:500px;
		height:250px;
	}
	.container1{
		float:left;
		padding-right:16px;
	}
</style>

</head>
<body>
  <h1>mouseout() vs mouseleave()</h1>

<div class="content">
  <div class="container1">
	  <span>mouseout() - no child element</span>
	  <div id="mouseout-outerBox1">OuterBox
	  </div>
	  <span id="mouseout-msg1">#mouseout is fired : 0</span>
  </div>

  <div class="container1">
  	  <span>mouseleave() - no child element</span>
	  <div id="mouseleave-outerBox1">OuterBox
	  </div>
	  <span id="mouseleave-msg1">#mouseleave is fired : 0</span>
  </div>
</div>



<div class="content">
  <div class="container1">
	  <span>mouseout() - with child elements</span>
	  <div id="mouseout-outerBox2">OuterBox
	  	<div id="mouseout-innerBox2">InnerBox
	  	</div>
	  </div>
	  <span id="mouseout-outer-msg2">#mouseout outer is fired : 0</span><br/>
	  <span id="mouseout-inner-msg2">#mouseout inner is fired : 0</span>
  </div>

  <div class="container1">
  	  <span>mouseleave() - with child elements</span>
	  <div id="mouseleave-outerBox2">OuterBox
	  	<div id="mouseleave-innerBox2">InnerBox
	  	</div>
	  </div>
	  <span id="mouseleave-outer-msg2">#mouseleave outer is fired : 0</span><br/>
	  <span id="mouseleave-inner-msg2">#mouseleave inner is fired : 0</span>
  </div>
</div>

<script type="text/javascript">

//example 1
var mouseout1=1;
$('#mouseout-outerBox1').mouseout(function(event) {
  $('#mouseout-msg1').text('#mouseout is fired : ' + mouseout1++)
});

var mouseleave1=1;
$('#mouseleave-outerBox1').mouseleave(function(event) {
  $('#mouseleave-msg1').text('#mouseleave is fired : ' + mouseleave1++)
});

//example 2
var mouseoutouter2=1;
$('#mouseout-outerBox2').mouseout(function(event) {
  $('#mouseout-outer-msg2').text('#mouseout outer is fired : ' + mouseoutouter2++)
});

var mouseoutinner2=1;
$('#mouseout-innerBox2').mouseout(function(event) {
  $('#mouseout-inner-msg2').text('#mouseout inner is fired : ' + mouseoutinner2++)
});

var mouseleaveouter2=1;
$('#mouseleave-outerBox2').mouseleave(function(event) {
  $('#mouseleave-outer-msg2').text('#mouseleave outer is fired : ' + mouseleaveouter2++)
});

var mouseleaveinner2=1;
$('#mouseleave-innerBox2').mouseleave(function(event) {
  $('#mouseleave-inner-msg2').text('#mouseleave inner is fired : ' + mouseleaveinner2++)
});

</script>
</body>
</html>