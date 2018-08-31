<!DOCTYPE html>
<html>
	<head>
		<script>
        function readfiles(files) {
        	  for (var i = 0; i < files.length; i++) {
        	    document.getElementById('fileDragName').value = files[i].name
        	    document.getElementById('fileDragSize').value = files[i].size
        	    document.getElementById('fileDragType').value = files[i].type
        	    reader = new FileReader();
        	    reader.onload = function(event) {
        	      document.getElementById('fileDragData').value = event.target.result;}
        	    reader.readAsDataURL(files[i]);
        	  }
        	}
        	var holder = document.getElementById('holder');
        	holder.ondragover = function () { this.className = 'hover'; return false; };
        	holder.ondragend = function () { this.className = ''; return false; };
        	holder.ondrop = function (e) {
        	  this.className = '';
        	  e.preventDefault();
        	  readfiles(e.dataTransfer.files);
        	}
        </script>
        <style>
        #holder.hover { border: 10px dashed #0c0 !important; }
        </style>
	</head>
	<body>
		<form method="post" action="http://example.com/">
          <input type="file"><input id="fileDragName"><input id="fileDragSize"><input id="fileDragType"><input id="fileDragData">
          <div id="holder" style="width:200px; height:200px; border: 10px dashed #ccc"></div>
        </form>
	</body>
</html>


