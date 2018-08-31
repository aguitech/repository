<style>
#container > div {
  display: flex;
  font-family: "Courier New", "Lucida Console", monospace;
}

#container > div > div {
  width: 50px;
  height: 50px;
  background: linear-gradient(-45deg, #788cff, #b4c8ff);
}

#flex-start {
  justify-content: flex-start;
}

#center {
  justify-content: center;
}

#flex-end {
  justify-content: flex-end;
}

#space-between {
  justify-content: space-between;
}

#space-around {
  justify-content: space-around;
}
</style>
<div id="container">
  <p>justify-content: flex-start</p>
  <div id="flex-start">
    <div></div>
    <div></div>
    <div></div>
  </div>

  <p>justify-content: flex-end</p>
  <div id="flex-end">
    <div></div>
    <div></div>
    <div></div>
  </div>

  <p>justify-content: center</p>
  <div id="center">
    <div></div>
    <div></div>
    <div></div>
  </div>

  <p>justify-content: space-between</p>
  <div id="space-between">
    <div></div>
    <div></div>
    <div></div>
  </div>

  <p>justify-content: space-around</p>
  <div id="space-around">
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>




<style>
.flex-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 300px;
  background-color: DodgerBlue;
}

.flex-container>div {
  background-color: #f1f1f1;
  color: white;
  width: 100px;
  height: 100px;
}
</style>

<h1>Perfect Centering</h1>

<p>A container with both the justify-content and the align-items properties set to <em>center</em> will align the item(s) in the center (in both axis).</p>

<div class="flex-container">
  <div></div>
</div>