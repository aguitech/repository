<script src="../js/jquery-3.3.1.js"></script>
<style>
body {
   font-family: Arial, Helvetica, sans-serif;
   margin: 0;
   background: #267BC6;
   background: -moz-radial-gradient(center, ellipse cover,  #2989d8 0%, #1e5799 100%, #1e5799 100%);
   background: -webkit-radial-gradient(center, ellipse cover,  #2989d8 0%,#1e5799 100%,#1e5799 100%);
   background: radial-gradient(ellipse at center,  #2989d8 0%,#1e5799 100%,#1e5799 100%);
   filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2989d8', endColorstr='#1e5799',GradientType=1 );
}
.wrapper {
   align-items: center;
   display: flex;
   height: 100vh;
   justify-content: center;
}
.player-controls {
   color: #FFF;
   cursor: pointer;
   display: block;
   font-size: 40px;
   height: 1em;
   position: relative;
   text-decoration: none;
   width: 1em;
   -webkit-transition: transform 0.25s ease-in-out;
   transition: transform 0.25s ease-in-out;
   
   .audio-label {
      line-height: 1;
      position: absolute;
      right: 1.35em;
      text-align: right;
      text-transform: uppercase;
      top: -0.4em;
      
      span {
         font-size: 18px;
         
         small {
            display: block;
            font-size: 0.83em;
         }
      }
   }
   .play, .pause {
      display: block;
      background: url('http://thiagovieira.com/images/play.svg') no-repeat 0 0;
      background-size: 100% 100%;
      height: 1em;
      position: absolute;
      width: 1em;
      -webkit-transition: all 0.25s linear;
      transition: all 0.25s linear;
      z-index: 5;
      
      &::before, &::after {
         -webkit-border-radius: 1000px;
         -moz-border-radius: 1000px;
         border-radius: 1000px;
         content: "";
         display: block;
         position: absolute;
         height: 1em;
         right: 0;
         top: 0;
         width: 1em;
         z-index: 0;
      }
   }
   .play::before {
      box-shadow: 0 0 0 rgba(255, 255, 255, 0);
      -webkit-transition: all 0.25s linear;
      transition: all 0.25s linear;
   }
   .pause {
      background-image: url('http://thiagovieira.com/images/pause.svg');
      opacity: 0;
      right: 0;
      top: 0;
   }
   &.playing {
      .play {
         opacity: 0;
      }
      .pause {
         opacity: 1;
         &::before {
            -moz-animation: audio1 1.5s infinite ease-in-out;
            -o-animation: audio1 1.5s infinite ease-in-out;
            -webkit-animation: audio1 1.5s infinite ease-in-out;
            animation: audio1 1.5s infinite ease-in-out;
         }
         &::after {
            -moz-animation: audio2 2.2s infinite ease-in-out;
            -o-animation: audio2 2.2s infinite ease-in-out;
            -webkit-animation: audio2 2.2s infinite ease-in-out;
            animation: audio2 2.2s infinite ease-in-out;
         }
      }
   }
   &:hover {
      transform: scale(1.1);
      
      .play::before {
         box-shadow: 0 0 12px rgba(255, 238, 125, 0.8);
      }
   }
}

.animate-audio1 {
   -moz-animation: audio1 1.5s infinite ease-in-out;
   -o-animation: audio1 1.5s infinite ease-in-out;
   -webkit-animation: audio1 1.5s infinite ease-in-out;
   animation: audio1 1.5s infinite ease-in-out;
}
@keyframes audio1 {
   0%,
   100% {
      box-shadow: 0 0 0 0.4em rgba(255, 255, 255, 0.4);
   }
   25% {
      box-shadow: 0 0 0 0.15em rgba(255, 255, 255, 0.15);
   }
   50% {
      box-shadow: 0 0 0 0.55em rgba(255, 255, 255, 0.55);
   }
   75% {
      box-shadow: 0 0 0 0.25em rgba(255, 255, 255, 0.25);
   }
}
.animate-audio2 {
   -moz-animation: audio2 2.2s infinite ease-in-out;
   -o-animation: audio2 2.2s infinite ease-in-out;
   -webkit-animation: audio2 2.2s infinite ease-in-out;
   animation: audio2 2.2s infinite ease-in-out;
}
@keyframes audio2 {
   0%,
   100% {
      box-shadow: 0 0 0 0.25em rgba(255, 255, 255, 0.15);
   }
   25% {
      box-shadow: 0 0 0 0.4em rgba(255, 255, 255, 0.3);
   }
   50% {
      box-shadow: 0 0 0 0.15em rgba(255, 255, 255, 0.05);
   }
   75% {
      box-shadow: 0 0 0 0.55em rgba(255, 255, 255, 0.45);
   }
}
</style>
<div class="wrapper">
   <a href="#" title="Listen to the song" class="player-controls">
      <span class="audio-label">
         <span>
            Audio
            <small>Player</small>
         </span>
      </span>
      <span class="play"></span>
      <span class="pause"></span>
   </a>
   <audio id="player">
      <source src="http://thiagovieira.com/images/OneDance-Drake.mp3" type="audio/mp3">
   </audio>
</div>
<script>
/***
JS by https://codepen.io/GRSimon/
***/
var getaudio = $('#player')[0],
     mouseovertimer,
     audiostatus = 'off',
     playerControls = ".player-controls";

$(document).on('mouseenter', playerControls, function() {
   
   if (!mouseovertimer) {
      
      mouseovertimer = window.setTimeout(function() {
         
         mouseovertimer = null;
         
         if (!$(playerControls).hasClass("playing")) {
            
            getaudio.load();
            getaudio.play();            
            $(playerControls).addClass('playing');
            return false;
            
         }
         
      }, 2500);
      
   }
   
});

$(document).on('mouseleave', playerControls, function() {
   
   if (mouseovertimer) {
      
      window.clearTimeout(mouseovertimer);
      mouseovertimer = null;
      
   }
   
});

$(document).on('click touch', playerControls, function(e) {
   
   e.preventDefault();
   
   if (!$(playerControls).hasClass("playing")) {

      if (audiostatus == 'off') {
         
         $(playerControls).addClass('playing');
         getaudio.load();
         getaudio.play();
         window.clearTimeout(mouseovertimer);
         audiostatus = 'on';
         return false;
         
      } else if (audiostatus == 'on') {
         
         $(playerControls).addClass('playing');
         getaudio.play();
         
      }
      
   } else if ($(playerControls).hasClass("playing")) {
      
      getaudio.pause();
      $(playerControls).removeClass('playing');
      window.clearTimeout(mouseovertimer);
      audiostatus = 'on';
      
   }
   
   return false;
   
});

$('#player').on('ended', function() {
   
   $(playerControls).removeClass('playing');
   audiostatus = 'off';
   
});
</script>