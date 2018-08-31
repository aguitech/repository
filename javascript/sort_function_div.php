<!DOCTYPE html>
<html>
<title>Sort a HTML List Alphabetically</title>
<body>

<p>Click the button to sort the list alphabetically:</p>
<button onclick="sortList()">Sort</button>

<div id="id01">
  <div>Oslo<div>
  <div>Stockholm<div>
  <div>Helsinki<div>
  <div>Berlin<div>
  <div>Rome<div>
  <div>Madrid<div>
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
      if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
        /*if next item is alphabetically
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
