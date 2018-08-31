<style>
html, body {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;  
  font-family: 'Satisfy', cursive;
  color: black;
}

.docScroller {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/28963/fir-sm.jpg");
  background-size: 400px 400px;
  width: 100vw;
  height: 100vh;
  margin: 0;
  padding: 0;
  white-space: nowrap;
  overflow-y: hidden;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
  scroll-snap-type: mandatory;
  /* older spec implementation */
  scroll-snap-destination: 0% 100%;
  scroll-snap-points-x: repeat(100%);
}

.page {
  scroll-snap-align: start;
  
  width: 100%;
  height: 100%;
  display: inline-block;
  vertical-align: top;
  font-size: initial;
}

.inside {
  border: 5px solid #f4ccbf;
  opacity: 0.95;
  width: 90vw;
  margin: 8vh 0 0 5vw;
  height: 80vh;
  position: relative;
  overflow: hidden;
  transition: all 0.3s ease-out;
  h1 {
    opacity: 0.9;
    text-align: center;
    margin-top: 30vh;
    font-size: 3vw;
    background: #478e85;
    padding: 8px 0 10px;
  }
}

.one {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/28963/fir4.png") no-repeat;
  background-size: 800px 350px;
}

.two {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/28963/fir3.png") no-repeat;
  background-size: 500px 400px;
  background-position: bottom right;
}

.three {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/28963/fir2.png") no-repeat;
  background-size: 500px 400px;
  background-position: right center;
}

.four {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/28963/fir5.png") no-repeat;
  background-size: 800px 600px;
  background-position: center center;
}

svg {
  position: absolute;
  height: 100vh;
  width: 100vw;
  opacity: 0.5;
  pointer-events: none;
  path {
    stroke: #e8c2b5;
  }
}
</style>


<div class="docScroller">
   <svg class="ribbon1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 884.7 656.4"  preserveAspectRatio="xMinYMid slice">
      <title>ribbon</title>
      <path d="M51.2,0.2s97,202.6,31.6,202.6S1,272,38.8,272s158.3-87.4,159.1,24.4-152,267.7,57.5,158.3,373.2-188.2,315.8-74.8S808.5,600,808.5,600l94,20.8V503s-278.9-4.3-286.7-86.9S719,274.3,617.5,282.2,215.2,486.5,204.2,442.4c0,0,100-220-3.9-216.9s-186,47.6-171.6,22.8c16.1-27.7,26-14.2,60.6-34.6,44.9-26.5,22.1-85,22.1-85S106.6,77.6,58.5,0,51.2,0.2,51.2.2Z" transform="translate(-18.3 35)"/>
    </svg>
    <div class="page one">
      <div class="inside">
        <h1>Measuring programming progress &#8658;</h1>
      </div>
    </div>
    <div class="page two">
      <div class="inside">
        <h1>By lines of code</h1>
      </div>
    </div>
    <div class="page three">
      <div class="inside">
        <h1>Is like measuring aircraft building progress</h1>
      </div>
    </div>
    <div class="page four">
      <div class="inside">
        <h1>By weight.</h1>
      </div>
    </div>
</div>

