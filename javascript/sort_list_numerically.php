<!DOCTYPE html>
<html>
<title>Sort a HTML List Numerically</title>
<body>

<p>Click the button to sort the list numerically:</p>
<button onclick="sortList()">Sort</button>

<ul id="id01">
  <li>4</li>
  <li>3</li>
  <li>1</li>
  <li>7</li>
  <li>1000</li>
  <li>5234234</li>
  <li>2</li>
  <li>100</li>
</ul>

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
    b = list.getElementsByTagName("LI");
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