<!DOCTYPE html>
<html>
<title>Sort a HTML List Numerically</title>
<body>

<p>Click the button to sort the list numerically:</p>
<button onclick="sortList()">Sort</button>

<div id="id01">
  <div>4</div>
  <div>3</div>
  <div>1</div>
  <div>7</div>
  <div>1000</div>
  <div>5234234</div>
  <div>2</div>
  <div>100</div>
</div>

<script>
function sortList() {
  var list, i, switching, b, shouldSwitch;
  list = document.getElementById("id01");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    b = list.getElementsByTagName("div");
    //Loop through all list-items:
    for (i = 0; i < (b.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*check if the next item should
      switch place with the current item:*/
      
      if (Number(b[i].innerHTML) > Number(b[i + 1].innerHTML)) {
        /*if next item is numerically
        lower than current item, mark as a switch
        and break the loop:*/
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark the switch as done:*/
      b[i].parentNode.insertBefore(b[i + 1], b[i]);
      switching = true;
    }
  }
}
</script>

</body>
</html>