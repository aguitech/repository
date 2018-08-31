<style>
body {
  background: #f39c12;
}
.center-on-page {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}
h1 {
  text-align: center;
}
/* Reset Select */
select {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
  border: 0 !important;
  background: #2c3e50;
  background-image: none;
}
/* Custom Select */
.select {
  position: relative;
  display: block;
  width: 20em;
  height: 3em;
  line-height: 3;
  background: #2c3e50;
  overflow: hidden;
  border-radius: .25em;
}
select {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0 0 0 .5em;
  color: #fff;
  cursor: pointer;
}
select::-ms-expand {
  display: none;
}
/* Arrow */
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  padding: 0 1em;
  background: #34495e;
  pointer-events: none;
}
/* Transition */
.select:hover::after {
  color: #f39c12;
}
.select::after {
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}
</style>
<div class="center-on-page">
  
  <h1>Pure CSS Select</h1>
  <div class="select">
    <select name="slct" id="slct">
      <option>Choose an option</option>
      <option value="1">Pure CSS</option>
      <option value="2">No JS</option>
      <option value="3">Nice!</option>
    </select>
  </div>
  
</div>