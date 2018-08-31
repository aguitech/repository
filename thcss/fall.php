<style>
@keyframes translate { 
    10% { transform: translate(0, 0); } 
    15% { transform: translate(0, 0); } 
    20% { transform: translate(0, 0); } 
    25% { transform: translate(0, 0); } 
    30% { transform: translate(0, 0); } 
    35% { transform: translate(0, 0); } 
    40% { transform: translate(0, 0); } 
    75% { transform: translate(0, 1500px); }
    100% { transform: translate(0, 1500px); }
}

@keyframes rotate { 
    10% { transform: rotate(15deg); } 
    15% { transform: rotate(-10deg); } 
    20% { transform: rotate(5deg); } 
    25% { transform: rotate(-5deg); } 
    30% { transform: rotate(2deg); } 
    35% { transform: rotate(-1deg); } 
    40% { transform: rotate(0deg); } 
    75% { transform: rotate(700deg); }
    100% { transform: rotate(700deg); }
}

.rotate {
    display: inline-block;
    animation-name: rotate; 
    transform-origin: top center; 
    animation-duration: 5s; 
    animation-fill-mode: both; 
}

.translate {
    display: inline-block;
    animation-name: translate; 
    transform-origin: top center; 
    animation-duration: 5s; 
    animation-fill-mode: both; 
}
</style>
<header>
    <h1>W.I.P.</h1>
    <h2>
        A Text
        <span class="translate">
            <span class="rotate">A</span>
        </span>
        dventure
    </h2>
</header>