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
button:before {
content:'';
position: absolute;
top: 0px;
left: 0px;
width: 0px;
height: 42px;
background: rgba(255,255,255,0.3);
border-radius: 5px;
transition: all 2s ease;
}
button:hover:before {
width: 100%;
}
</style>