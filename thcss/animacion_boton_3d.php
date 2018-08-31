<button>Hover Me</button>
<style>
button {
border: none;
background: #3a7999;
color: #f2f2f2;
padding: 10px;
font-size: 18px;
border-radius: 5px;
position: relative;
box-sizing: border-box;
transition: all 500ms ease;
}
button {
transform-style: preserve-3d;
}
button:after {
top: -100%;
left: 0px;
width: 100%;
position: absolute;
background: #3a9999;
border-radius: 5px;
content: 'Flipped';
transform-origin: left bottom;
transform: rotateX(90deg);
}
button:hover {
transform-origin: center bottom;
transform: rotateX(-90deg) translateY(100%);
}
</style>