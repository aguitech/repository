<script>

var $flame1 = $('#flame-one'),
    $flame2 = $('#flame-two'),
    $flame3 = $('#flame-three'),
    $flame4 = $('#flame-four'),
    $flame5 = $('#flame-five'),  
    $flame6 = $('#flame-six'),
    $flame7 = $('#flame-seven'),
    $flame8 = $('#flame-eight'),      
    tinyFlamesLight = new TimelineMax({repeat: -1, yoyo: false}),
    tinyFlamesDark = new TimelineMax({repeat: -1, yoyo: false, delay: .75});



function startFire() {
      tinyFlamesLight
        .set($flame5, {autoAlpha: 1})
        .to($flame5, .45, {morphSVG:$flame3})
        .set($flame3, {autoAlpha: 1})
        .to($flame3, 0.2, {morphSVG:$flame4})
      
      tinyFlamesDark
        .set($flame7, {autoAlpha: 1})
        .to($flame7, .55, {morphSVG:$flame6})
        .set($flame6, {autoAlpha: 1})
        .to($flame6, 0.3, {morphSVG:$flame8})      
}

startFire();
</script>
<style>
body,
html {
  margin: 0;
  padding: 0;
}


h1 {
  position: absolute;
  top: 50%;
  translateY(-50%);
  margin: auto;
  line-height: 0;
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  width: 100%;
  z-index: 1;
  font-family: 'Fjalla One', sans-serif; 
  letter-spacing: 2px;
  font-size: 50px;
}

.box {
  width: 500px;
  height: 500px;
  background: rgba(15, 13, 13, 0.93);
  position: relative;
  overflow: hidden;
}

.svg-container {
  position: absolute;
  bottom: -40px;
  transform:  scale(2.5);   
  left: 0;
  transform-origin: bottom left;  
}

.container-1 {
/*   transform-origin: bottom left; */
/*   transform:  scale(2.5);  */
/*   animation: shake 1s infinite;   */
}

.container-2 {
/*   animation: shake2 1s infinite;    */
}

#flame-one {
  fill: #BE4919;
}

#flame-two {
fill: #F5842E;
}

#flame-three,
#flame-four,
#flame-five {
  visibility: hidden;
 fill: #F5842E;
}

#flame-six,
#flame-seven,
#flame-eight {
  visibility: hidden;  
  fill: #F5842E;
}

@keyframes shake {
  0% {
    transform: scale(2.5) translateX(5px);
  }
  
  50% {
    transform: translateX(-5px);
  }
  
  100% {
    transform: scale(2.5) translateX(5px);
  }
}

@keyframes shake2 {
  0% {
    transform: scale(2.5) translateX(-5px);
  }
  
  50% {
    transform: translateX(5px);
  }
  
  100% {
    transform: scale(2.5) translateX(-5px);
  }
}
</style>
<link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>


<div class='box'>
<!--   <h1>Firestone Tire</h1> -->
	<section class='svg-container container-1'> 
	  <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 width="71px" height="222.644px" viewBox="0 0 71 222.644" enable-background="new 0 0 71 222.644" xml:space="preserve">
		<path id='flame-one' stroke-miterlimit="10" d="M24.064,213.644c1.456,8.231,10.822,8.365,18.004,7.996
			c10.077-0.517,13.874-0.471,19.243-8.745c8.096-12.473,6.494-34.002,0.53-47.273c-5.873-13.072-15.247-20.272-15.777-34.978
			c-0.517-14.317,7.994-24.188,7.853-37.92c-7.833,6.385-13.124,10.192-11.853,21.618c-1.356-10.016-7.926-40.277-24.924-35.472
			c17.101,11.003,11.847,26.685,8.924,44.774c-2.67,16.525-8.811,32.738-12.199,48.907c-0.923-0.111-0.746-0.849-1.801-0.855
			c-7.7,13.062,0.572,49.332,16,50.948"/>

		<path id='flame-three' stroke-miterlimit="10" d="M44.303,94.631c0-8.433,1.089-11.368,6.235-18.098
			c6.229-8.146,4.878-16.811,4.74-26.751c4.076,7.23,7.364,14.995,7.524,23.325c0.142,7.372-3.453,13.566-9,17.997
			c-3.211,2.564-9.061,6.438-9-0.473"/>
		<path id='flame-four' stroke-miterlimit="10" d="M39.6,37.559c-7.542-4.482-3.427-14.076-5.419-20.099
			c-1.057,4.589,12.929,17.165,5.524,20.026c-0.708-2.157-1.323-4.01-1.958-6.258"/>
		<path id='flame-five' stroke-miterlimit="10" d="M36,113.5c1.448,10.905-7.93,23.116-7.5,35
		c0.334,9.248,12.079,15.702,20.426,9.915c1.205-4.28,2.428-8.066,0.424-12.33c-1.532-3.259-4.929-5.914-6.988-9.085
		c-3.336-5.136-6.502-19.856-2.286-25.349c-1.3,2.287-2.286,4.866-5.075,5.349"/>
	</svg>
  </section> 
  
  
  <section class='svg-container container-2'>


	<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 width="71px" height="222.644px" viewBox="0 0 71 222.644" enable-background="new 0 0 71 222.644" xml:space="preserve">
	<path id='flame-eight' stroke-miterlimit="10" d="M50.883,26.273c5.21-5.032,0.286-12.535,0.825-17.984
		c1.632,3.737-7.294,16.697-0.922,17.939c0.189-1.951,0.357-3.627,0.472-5.643"/>	
	<path id='flame-two' stroke-miterlimit="10" d="M34,220c-15.883-9.108-21.804-31.893-14.764-47.564
		c2.373-5.282,5.625-14.045,3.188-20.009c-1.871-4.578-5.999-7.403-7.522-12.643c-2.147-7.384-1.52-12.642,1.219-19.659
		c1.855-4.753,2.64-8.835,2.292-14.039c-0.714-0.613-1.027-1.288-1.738-2.021c10.03,2.479,1.926,35.627,14.336,31.834
		c8.023-2.452,3.44-17.328,2.111-21.875c-1.659-5.672-3.088-18.679,6.302-18.474c0.253,4.833-1.52,10.87,3.466,13.585
		c4.529,2.467,10.79,0.085,12.121-4.986c-0.074,9.649,2.192,21.438-6.61,27.863c-3.854,2.813-7.239,2.838-8.399,7.988
		c-1.21,5.37,0.3,12.118,3.123,16.75c3.055,5.01,7.478,9.345,10.26,14.634c2.9,5.514,2.14,10.369,2.117,16.845
		c-0.026,7.619,1.886,13.071,3.646,20.185c1.005,4.057,1.699,8.757-0.512,12.222C56.86,223.423,49.78,228.824,47,227.5"/>
	<path id='flame-six' stroke-miterlimit="10" d="M24.051,65c6.107-3.894,2.775-12.228,4.389-17.46
		c0.855,3.987-10.472,14.911-4.475,17.396c0.574-1.874,1.072-3.483,1.586-5.436"/>
	<path id='flame-seven' stroke-miterlimit="10" d="M36,113.5c1.448,10.905-7.93,23.116-7.5,35
		c0.334,9.248,12.079,15.702,20.426,9.915c1.205-4.28,2.428-8.066,0.424-12.33c-1.532-3.259-4.929-5.914-6.988-9.085
		c-3.336-5.136-6.502-19.856-2.286-25.349c-1.3,2.287-2.286,4.866-5.075,5.349"/>
	</svg>

  </section>
</div>