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
button{
padding: 10px 35px;
overflow:hidden;
}
button:before {
font-family: FontAwesome;
content:'\f07a';
position: absolute;
top: 11px;
left: -30px;
transition: all 200ms ease;
}
button:hover:before {
left: 7px;
}
</style>