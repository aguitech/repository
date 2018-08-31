<style>
span[data-descr] {
  position: relative;
  text-decoration: underline;
  color: #00F;
  cursor: help;
}

span[data-descr]:hover::after {
  content: attr(data-descr);
  position: absolute;
  left: 0;
  top: 24px;
  min-width: 200px;
  border: 1px #aaaaaa solid;
  border-radius: 10px;
  background-color: #ffffcc;
  padding: 12px;
  color: #000000;
  font-size: 14px;
  z-index: 1;
}
</style>
<p>Here is the live example of the above code.<br />
  We have some <span data-descr="collection of words and punctuation">text</span> here with a few
  <span data-descr="small popups which also hide again">tooltips</span>.<br />
  Don't be shy, hover over to take a <span data-descr="not to be taken literally">look</span>.
</p>
