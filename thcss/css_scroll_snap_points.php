<style>

.page {
  float: left;
  width: 100vw;
  height: 100vh;
}

.docScroller {
  overflow-x: hidden;
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  scroll-snap-points-y: repeat(100%);
  scroll-snap-type: mandatory;
  scroll-snap-destination: 100% 0%;
}

.inside {
  background: yellow;
  opacity: 0.3;
  width: 80vw;
  margin: 10vh 0 0 10vw;
  height: 80vh;
}

.one {
  background: blue;
}
.two {
  background: purple;
}
.three {
  background: red;
}
.four {
  background: orange;
}


</style>


<div class="docScroller">
    <div class="page one">
      <div class="inside">
      </div>
    </div>
    <div class="page two">
      <div class="inside">
      </div>
    </div>
    <div class="page three">
      <div class="inside">
      </div>
    </div>
    <div class="page four">
      <div class="inside">
      </div>
    </div>
</div>

