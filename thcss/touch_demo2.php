<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Touch Example 2</title>

    <!-- IE Specific to remove tap highlight -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <style>
      body {
        width: 100%;
        height: 100%;

        background-color: #d3e2fc;

        font-family: 'Roboto', sans-serif;
        color: #ecf0f1;

        padding: 16px;
      }

      .container {
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;

        width: 100%;

        -ms-flex-direction: row;
        -webkit-flex-direction: row;
        flex-direction: row;

        -ms-flex-pack: justify;
        -webkit-justify-content: space-around;
        justify-content: space-around;

        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .v-slider {
        position: relative;

        width: 46px;
        height: 200px;

        margin: 23px 0;

        /* Pass all touches to javascript */
        -ms-touch-action: none;
        touch-action: none;
      }

      .v-slider > .track {
        position: absolute;

        width: 6px;
        height: 200px;

        left: 50%;

        margin-left: -3px;

        border-radius: 6px;

        background-color: rgba(0,0,0,0.2);
      }

      .v-slider > .hold {
        position: absolute;

        width: 46px;
        height: 46px;

        border-radius: 100%;

        top: 0;
        left: 50%;

        margin-top: -23px;
        margin-left: -23px;

        background-color: #4285f4;
      }

      .promote-layer {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
      }
    </style>
  </head>

  <body>

    <div class="container">
      <div class="v-slider">
        <div class="track"></div>
        <div class="hold promote-layer"></div>
      </div>

      <div class="v-slider">
        <div class="track"></div>
        <div class="hold promote-layer"></div>
      </div>
    </div>

    <script>
      // Shim for requestAnimationFrame from Paul Irishpaul ir
      // http://www.paulirish.com/2011/requestanimationframe-for-smart-animating/
      window.requestAnimFrame = (function(){
        return  window.requestAnimationFrame       ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame    ||
                function( callback ){
                  window.setTimeout(callback, 1000 / 60);
                };
      })();

      var pointerDownName = 'pointerdown';
      var pointerUpName = 'pointerup';
      var pointerMoveName = 'pointermove';

      if(window.navigator.msPointerEnabled) {
        pointerDownName = 'MSPointerDown';
        pointerUpName = 'MSPointerUp';
        pointerMoveName = 'MSPointerMove';

      }

      // Simple way to check if some form of pointerevents is enabled or not
      window.PointerEventsSupport = false;
      if(window.PointerEvent || window.navigator.msPointerEnabled) {
        window.PointerEventsSupport = true;
      }

      function Slider(element) {
        var isAnimating = false;
        var lastYPos = 0;
        var initialYPos = 0;
        var lastHolderPos = 0;
        var elementHold = element.querySelector('.hold');

      /* // [START handle-gestures] */
      // Handle the start of gestures
      this.handleGestureStart = function(evt) {
        evt.preventDefault();

        /* // [START stash-start] */
        var point = getGesturePointFromEvent(evt);
        initialYPos = point.y;
        /* // [END stash-start] */

        // Add the move and end listeners
        if (window.PointerEvent) {
          evt.target.setPointerCapture(evt.pointerId);
        } else {
          // Add Mouse Listeners
          document.addEventListener('mousemove', this.handleGestureMove, true);
          document.addEventListener('mouseup', this.handleGestureEnd, true);
        }
      }.bind(this);

      this.handleGestureEnd = function(evt) {
        evt.preventDefault();

        if(evt.targetTouches && evt.targetTouches.length > 0) {
          return;
        }

        // Remove Event Listeners
        if (window.PointerEvent) {
          evt.target.releasePointerCapture(evt.pointerId);
        } else {
          // Remove Mouse Listeners
          document.removeEventListener('mousemove', this.handleGestureMove, true);
          document.removeEventListener('mouseup', this.handleGestureEnd, true);
        }

        isAnimating = false;
        lastHolderPos = lastHolderPos + -(initialYPos - lastYPos);
        initialYPos = null;
      }.bind(this);
      /* // [END handle-gestures] */

      this.handleGestureMove = function(evt) {
        evt.preventDefault();

        if(evt.targetTouches && evt.targetTouches.length > 1) {
          return;
        }

        if (!initialYPos) {
          return;
        }

        /* // [START handle-move] */
        var point = getGesturePointFromEvent(evt);
        lastYPos = point.y;

          if(isAnimating) {
            return;
          }

          isAnimating = true;
          window.requestAnimFrame(onAnimFrame);
          /* // [END handle-move] */
      }.bind(this);

      /* // [START extract-xy] */
      function getGesturePointFromEvent(evt) {
          var point = {};

          if(evt.targetTouches) {
            // Prefer Touch Events
            point.x = evt.targetTouches[0].clientX;
            point.y = evt.targetTouches[0].clientY;
          } else {
            // Either Mouse event or Pointer Event
            point.x = evt.clientX;
            point.y = evt.clientY;
          }

          return point;
        }
      /* // [END extract-xy] */

      /* // [START on-anim-frame] */
      function onAnimFrame() {
          if(!isAnimating) {
            return;
          }

          var newYTransform = lastHolderPos + -(initialYPos - lastYPos);

          newYTransform = limitValueToSlider(newYTransform);

          var transformStyle = 'translateY('+newYTransform+'px)';
          elementHold.style.msTransform = transformStyle;
          elementHold.style.MozTransform = transformStyle;
          elementHold.style.webkitTransform = transformStyle;
          elementHold.style.transform = transformStyle;

          isAnimating = false;
        }
        /* // [END on-anim-frame] */

        function limitValueToSlider(value) {
          if(Math.abs(value) > element.clientHeight) {
            value = element.clientHeight;
          } else if(value < 0) {
            value = 0;
          }
          return value;
        }

        /* // [START addlisteners] */
        // Check if pointer events are supported.
        if (window.PointerEvent) {
          // Add Pointer Event Listener
          elementHold.addEventListener('pointerdown', this.handleGestureStart, true);
          elementHold.addEventListener('pointermove', this.handleGestureMove, true);
          elementHold.addEventListener('pointerup', this.handleGestureEnd, true);
          elementHold.addEventListener('pointercancel', this.handleGestureEnd, true);
        } else {
          // Add Touch Listeners
          elementHold.addEventListener('touchstart', this.handleGestureStart, true);
          elementHold.addEventListener('touchmove', this.handleGestureMove, true);
          elementHold.addEventListener('touchend', this.handleGestureEnd, true);
          elementHold.addEventListener('touchcancel', this.handleGestureEnd, true);

          // Add Mouse Listeners
          elementHold.addEventListener('mousedown', this.handleGestureStart, true);
        }
        /* // [END addlisteners] */
      }

      window.onload = function () {
        var sliderElements = document.querySelectorAll('.v-slider');
        for(var i = 0; i < sliderElements.length; i++) {
          new Slider(sliderElements[i]);
        }

        // We do this so :active pseudo classes are applied.
        window.onload = function() {
          if(/iP(hone|ad)/.test(window.navigator.userAgent)) {
            document.body.addEventListener('touchstart', function() {}, false);
          }
        };
      };
    </script>

    <script>
      var holds = document.querySelectorAll('.hold');
      for(var i = 0; i < holds.length; i++) {
        holds[i].addEventListener('touchstart', function(){
          sampleCompleted('touch-demo-2.html-HoldTouch');
        });
      }
    </script>
  </body>
</html>
