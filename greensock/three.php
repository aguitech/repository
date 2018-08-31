<style>
body{
  background-color:#fff;
}
#logo{
  position:absolute;
  left:0;
  top:0;
}

.circle{
  position:relative;
  width:500px;
  height:500px;
  border:1px solid #000;
  border-radius:50%;
  margin:0 auto;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<div class="circle">
  <img id="logo" src="http://gravatar.com/avatar/5a224f121f96bd037bf6c1c1e2b686fb?s=80">
</div>

<script>
TweenMax.to(['#logo'], 10, {bezier:[
	  {x:"250px",y:"-40px"},
	  {x:"500px",y:"250px"},
	  {x:"250px",y:"500px"},
	  {x:"0px",y:"250px"},
	  {x:"0px",y:"0px"},
	],repet:2,ease:Linear.easeNone});
</script>