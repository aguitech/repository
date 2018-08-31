<style>
@-webkit-keyframes swing { 
    10% { transform: translate(0, 0px) rotate(15deg); transform-origin: top center;} 
    15% { transform: translate(0, 0px) rotate(-10deg); } 
    20% { transform: translate(0, 0px) rotate(5deg); } 
    25% { transform: translate(0, 0px) rotate(-5deg); } 
    30% { transform: translate(0, 0px) rotate(2deg); } 
    35% { transform: translate(0, 0px) rotate(-1deg); } 
    40% { transform: translate(0, 0px) rotate(0deg); transform-origin: top center;} 
    40% { transform: translate(0, 0px) rotate(0deg); transform-origin: center center;} 
    75% { transform: translate(0, 150px) rotate(375deg);  }
    100% { transform: translate(0, 150px) rotate(375deg);  transform-origin: top center;}
} 
@keyframes swing { 
    10% { transform: translate(0, 0px) rotate(15deg); transform-origin: top center;} 
    15% { transform: translate(0, 0px) rotate(-10deg); } 
    20% { transform: translate(0, 0px) rotate(5deg); } 
    25% { transform: translate(0, 0px) rotate(-5deg); } 
    30% { transform: translate(0, 0px) rotate(2deg); } 
    35% { transform: translate(0, 0px) rotate(-1deg); } 
    40% { transform: translate(0, 0px) rotate(0deg); transform-origin: top center;} 
    40% { transform: translate(0, 0px) rotate(0deg); transform-origin: center center;} 
    75% { transform: translate(0, 150px) rotate(375deg);  }
    100% { transform: translate(0, 150px) rotate(375deg);  transform-origin: top center;}
}
.animateone {
    display: inline-block;
    -webkit-animation: swing 3s infinite linear; 
    animation: swing 3s infinite linear; 
    transform-origin: top center; 
}
</style>
<span class="animateone">A</a>