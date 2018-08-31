<style>
/* a container with flex-direction column */
.main-container {
  height: 75vh; /* or position:absolute; height:100%; */
  display: flex;
  flex-direction: column;
}

/* an arbitrary container of fixed height */
.fixed-container {
  height: 100px;
  padding: 20px;
  background-color: #0B5AB0;
  color: white;
}

/* this is the flex container that will take the rest of the height */
.content-wrapper {
  display: flex;
  flex: 1;
  min-height: 0px; /* IMPORTANT: you need this for non-chrome browsers */
}

/* the container for our overflowed content */
.overflow-container {
  flex: 1;
  overflow: auto;
}

/* the overflow content itself */
.overflow-content {
  height: 2000px;
  color: black;
  background-color: #ddd;
  padding: 20px;
}

code {
  font-weight: bold;
  color: darkred;
  margin: 0 5px;
}
</style>
<div class="main-container">
  <div class="fixed-container">Fixed Container</div>
  <div class="content-wrapper">
    <!-- ...more content here -->
    <div class="overflow-container">
      <!-- ...and more content here -->
      <div class="overflow-content">
        Overflow Content
        <br/><br/>
        For Non-Chrome browsers (Firefox, Safari, etc):<br/>
        Without <code>min-height:0px;</code> on the content-wrapper,
        this content will not scroll but instead will expand to its 
        full height.
        <br/><br/>
        Note that the setup of the main-container here is important too.
        If its not
        <code>position:absolute; height:100%; flex-direction:column;</code>
        or 
        <code>height:100vh; flex-direction:column;</code>
        then you may not run into this issue;
      </div>
    </div>
  </div>
</div>