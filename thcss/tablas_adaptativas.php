<style>
table {
  width: 100%;
  background: white;
  margin-bottom: 1.25em;
  border: solid 1px #dddddd;
  border-collapse: collapse;
  border-spacing: 0;
}

table tr th,
table tr td {
  padding: 0.5625em 0.625em;
  font-size: 0.875em;
  color: #222222;
  border: 1px solid #dddddd;
}

table tr.even,
table tr.alt,
table tr:nth-of-type(even) {
  background: #f9f9f9;
}





@media only screen and (max-width: 768px) {
	table.resp,
	.resp thead,
	.resp tbody,
	.resp tr,
	.resp th,
	.resp td,
	.resp caption {
	  display: block;
	}
	
	table.resp {
	  border: none
	}
	
	.resp thead tr {
	  display: none;
	}
	
	.resp tbody tr {
	  margin: 1em 0;
	  border: 1px solid #2ba6cb;
	}
	
	.resp td {
	  border: none;
	  border-bottom: 1px solid #dddddd;
	  position: relative;
	  padding-left: 45%;
	  text-align: left;
	}
	
	.resp tr td:last-child {
	  border-bottom: 1px double #dddddd;
	}
	
	.resp tr:last-child td:last-child {
	  border: none;
	}
	
	.resp td:before {
	  position: absolute;
	  top: 6px;
	  left: 6px;
	  width: 45%;
	  padding-right: 10px;
	  white-space: nowrap;
	  text-align: left;
	  font-weight: bold;
	}

    td:nth-of-type(1):before {
	  content: "Titulo";
	}
	
	td:nth-of-type(2):before {
	  content: "A\00f1o";
	}
	
	td:nth-of-type(3):before {
	  content: "Formato";
	}
	
	td:nth-of-type(4):before {
	  content: "Autor";
	}
	
	td:nth-of-type(5):before {
	  content: "Tama\00f1o";
	}
	
	td:nth-of-type(6):before {
	  content: "Precio";
	}
}
</style>
<table class="resp">
<thead>
  <tr>
    <th scope="col">Titulo</th>
    <th scope="col">Año</th>
    <th scope="col">Formato</th>
    <th scope="col">Autor</th>
    <th scope="col">Tamaño</th>
    <th scope="col">Precio</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Intocable</td>
    <td>2012</td>
    <td>DVD</td>
    <td>Françoise Cluzet</td>
    <td>120 minutos</td>
    <td>12,86€</td>
  </tr>
   <tr>
    <td>El gen egoista</td>
    <td>2010</td>
    <td>Kindle</td>
    <td>Richard Dawkins</td>
    <td>424 páginas</td>
    <td>11,50€</td>
  </tr>
  <tr>
    <td>Mis Tardes Con Margueritte </td>
    <td>2011</td>
    <td>DVD</td>
    <td>Gerard Depardieu</td>
    <td>82 minutos</td>
    <td>6,24€</td>
  </tr>
  <tr>
    <td>Nicostratos</td>
    <td>2011</td>
    <td>Kindle</td>
    <td>Eric Boisset</td>
    <td>208 páginas</td>
    <td>4,94€</td>
  </tr>
  <tr>
    <td>Juegos en que participamos </td>
    <td>2007</td>
    <td>Libro</td>
    <td>Eric Berne</td>
    <td>232 páginas</td>
    <td>1.076,28€</td>
  </tr>
</tbody>
</table>