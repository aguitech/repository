<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery UI Draggable + Sortable</title>
	<link rel="stylesheet" href="../scripts/jquery-ui/jquery-ui.css">
	<!-- 
	<link rel="stylesheet" href="/resources/demos/style.css">
	-->
	<style>
	ul { list-style-type: none; margin: 0; padding: 0; margin-bottom: 10px; }
	li { margin: 5px; padding: 5px; width: 150px; }
	</style>
	<script src="../js/jquery-3.3.1.js"></script>
	<script src="../scripts/jquery-ui/jquery-ui.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script>
	
	$( function() {
		$( "#accordion" ).accordion();

		$("#sortable_box").sortable({
			revert: true
		});
		$(".contenedor_regla_negocio").draggable({
			connectToSortable: "#reglas_de_negocio",
			//helper: "clone",
			revert: "invalid",
			stop: function(event, ui) {
				/**
				var pos = ui.helper.position(); // just get pos.top and pos.left
				alert(pos);
				*/


				if($("#reglas_de_negocio").has("#operaciones_suma").length){
					//alert("ok");
					$("#operaciones_suma_detalle").show();

					$("#operaciones_suma").addClass("contenedor_regla_activa");
					//$("#ing_egr_couta").draggable("enable");
					
				}else{
					//alert("dont works");
				}
				//$( "ul" ).has( "li" ).length
				if($("#reglas_de_negocio").has("#operaciones_resta").length){
					//alert("ok");
					$("#operaciones_resta_detalle").show();

					$("#operaciones_resta").addClass("contenedor_regla_activa");
					//$("#ing_egr_couta").draggable("enable");
					
				}else{
					//alert("dont works");
				}

				if($("#reglas_de_negocio").has("#operaciones_multiplicacion").length){
					//alert("ok");
					$("#operaciones_multiplicacion_detalle").show();

					$("#operaciones_multiplicacion").addClass("contenedor_regla_activa");
					//$("#ing_egr_couta").draggable("enable");
					
				}else{
					//alert("dont works");
				}

				if($("#reglas_de_negocio").has("#operaciones_division").length){
					//alert("ok");
					$("#operaciones_division_detalle").show();

					$("#operaciones_division").addClass("contenedor_regla_activa");
					//$("#ing_egr_couta").draggable("enable");
					
				}else{
					//alert("dont works");
				}

				if($("#reglas_de_negocio").has("#operaciones_potencia").length){
					//alert("ok");
					$("#operaciones_potencia_detalle").show();

					$("#operaciones_potencia").addClass("contenedor_regla_activa");
					//$("#ing_egr_couta").draggable("enable");
					
				}else{
					//alert("dont works");
				}
				if($("#reglas_de_negocio").has("#operaciones_raiz_cuadrada").length){
					//alert("ok");
					$("#operaciones_raiz_cuadrada_detalle").show();

					$("#operaciones_raiz_cuadrada").addClass("contenedor_regla_activa");
					//$("#ing_egr_couta").draggable("enable");
					
				}else{
					//alert("dont works");
				}






				if($("#reglas_de_negocio").has("#perioricidad_recurrente").length){
					//alert("ok");
					$("#perioricidad_recurrente_detalle").show();

					$("#perioricidad_recurrente").addClass("contenedor_regla_activa");
					//$("#ing_egr_couta").draggable("enable");
					
				}else{
					//alert("dont works");
				}
				if($("#reglas_de_negocio").has("#perioricidad_fecha_limite").length){
					//alert("ok");
					$("#perioricidad_fecha_limite_detalle").show();

					$("#perioricidad_fecha_limite").addClass("contenedor_regla_activa");
					//$("#ing_egr_couta").draggable("enable");
					
				}else{
					//alert("dont works");
				}
				

				



				if($("#reglas_de_negocio").has("#adjuntar_recibo").length){
					//alert("ok");
					$("#adjuntar_recibo_detalle").show();

					$("#adjuntar_recibo").addClass("contenedor_regla_activa");
					//$("#ing_egr_couta").draggable("enable");
					
				}else{
					//alert("dont works");
				}




				

				/*
				if($("#reglas_de_negocio").has("#ing_egr_recargo").length){
					//alert("ok");
					$("#ing_egr_recargo_detalle").show();

					$("#ing_egr_recargo").addClass("contenedor_regla_activa");
					//$("#ing_egr_couta").draggable("enable");
					
				}else{
					//alert("dont works");
				}
				*/

				
				/*
				
				
				if($("#sortable_box").has("#sortable_step_1").length){
					//alert("ok");
					$("#sortable_step_2").draggable("enable");
				}else{
					//alert("dont works");
				}
				*/
			}
		});
		$("#sortable_step_1").draggable({
			connectToSortable: "#sortable_box",
			//helper: "clone",
			revert: "invalid",
			stop: function(event, ui) {
				/**
				var pos = ui.helper.position(); // just get pos.top and pos.left
				alert(pos);
				*/

				//$( "ul" ).has( "li" ).length
				if($("#sortable_box").has("#sortable_step_1").length){
					//alert("ok");
					$("#sortable_step_2").draggable("enable");
				}else{
					//alert("dont works");
				}
			}
		});
        $("#sortable_step_2").draggable({
        	connectToSortable: "#sortable_box",
			//helper: "clone",
			revert: "invalid",
			disabled:true,
			stop: function(event, ui) {
				/**
				var pos = ui.helper.position(); // just get pos.top and pos.left
				alert(pos);
				*/

				//$( "ul" ).has( "li" ).length
				if($("#sortable_box").has("#sortable_step_2").length){
					//alert("ok");
					$("#sortable_step_3").draggable("enable");
				}else{
					//alert("dont works");
				}
			}
			
		});
        $("#sortable_step_3").draggable({
        	connectToSortable: "#sortable_box",
			//helper: "clone",
			revert: "invalid",
			disabled:true,
			stop: function(event, ui) {
				/**
				var pos = ui.helper.position(); // just get pos.top and pos.left
				alert(pos);
				*/

				//$( "ul" ).has( "li" ).length
				if($("#sortable_box").has("#sortable_step_3").length){
					//alert("ok");
					$("#sortable_step_4").draggable("enable");
				}else{
					//alert("dont works");
				}
			}
        });
        $("#sortable_step_4").draggable({
        	connectToSortable: "#sortable_box",
			//helper: "clone",
			revert: "invalid",
			disabled:true
				
        });


        $("#reglas_de_negocio").sortable({
			revert: true
		});
		
		$( "#sortable" ).sortable({
			//revert: true
		});
		$( "#draggable" ).draggable({
			connectToSortable: "#sortable",
			helper: "clone",
			revert: "invalid"
		});
		$( "ul, li" ).disableSelection();
	} );
	
	</script>
	<style>
	.sortables>div{
		float:left;
		border:1px solid gray;
	}
	#sortable_box>div{
		float:left;
		border:1px solid red;
	}
    #sortable_box>div:nth-child(2){
		float:left;
		border:1px solid green;
	}
    #sortable_box>div:nth-child(2):before{
    	clear:both;
    	content:"asas";
		float:left;
		border:1px solid green;
	}
    #sortable_box>div:nth-child(2):after{
    	position:absolute;
    	clear:both;
    	display:block;
    	content:"";
	}
    #sortable_box>div:nth-child(3){
		clear:both;
		
		float:left;
    	border:1px solid yellow;
    	margin-left:152px;
	}
    #sortable_box>div:nth-child(4){
        poisition:absolute;
        /*position:absolute;*/
        margin-top:00px;
    	margin-left:-304px;
    	border:1px solid orange;
	}
	.contenedor_regla_negocio{
		padding:10px;
		background:white;
		border-radius:7px;
		border:2px solid gray;
		margin:3px 0;
	}
	.contenedor_regla_activa{
		padding:10px 10px 50px 10px;
		background:white;
		border-radius:7px;
		border:2px solid gray;
		margin:3px 0;
		height:300px;
	}
	</style>
	<script>
	function agregar_step_1(){
		$("#step_1_content").append("<div><input type='text' value='$500.00' /><select><option>Couta</option><option>Descuento</option><option>Anticipo</option><option>Adeudo</option><option>Recargo</option><option>Penalizacion</option><option>Gasto</option><option>Pago a proveedor</option></select><i class='material-icons' style='background:red; border-radius:100%; padding:5px;'>done</i></div>")
	}
	
	</script>
</head>
<body>
<div style="width:100%; background:#DCDCDC; height:800px;">
	<div style="float:left; width:30%; height:100%;">
	
	
    	<h2 class="demoHeaders">Creaci&oacute;n de reglas de negocio</h2>
        <div id="accordion">
        	<h3 style="background:#907eff;">Ingresos / Egresos</h3>
        	<div style="background:#907eff;">
        		<div class="contenedor_regla_negocio" id="operaciones_suma">
        			Suma
        			<div id="operaciones_suma_detalle" style="display:none;">
        				<input type="text" value="500.00" id="suma_valor_1" />
        				+
        				<input type="text" value="500.00" id="suma_valor_2" />
        				=
        				<span id="suma_resultado"></span>
        				<input type="button" value="Sumar" onclick="$('#suma_resultado').html((parseInt($('#suma_valor_1').val()) + parseInt($('#suma_valor_2').val())));" />
        				<!-- 
        				<input type="button" value="Sumar" onclick="$('#suma_resultado').val($('#suma_valor_1').val() + $('#suma_valor_2').val());" />
        				-->
        				
        			</div>
        		</div>
        		<div class="contenedor_regla_negocio" id="operaciones_resta">
        			Resta
        			<div id="operaciones_resta_detalle" style="display:none;">
        			
        				<input type="text" value="500.00" id="resta_valor_1" />
        				-
        				<input type="text" value="500.00" id="resta_valor_2" />
        				=
        				<span id="resta_resultado"></span>
        				<input type="button" value="Restar" onclick="$('#resta_resultado').html((parseInt($('#resta_valor_1').val()) - parseInt($('#resta_valor_2').val())));" />
        				
        			</div>
        		</div>
        		<div class="contenedor_regla_negocio" id="operaciones_multiplicacion">
        			Multiplicaci&oacute;n
        			<div id="operaciones_multiplicacion_detalle" style="display:none;">
        			
        				<input type="text" value="500.00" id="multiplicacion_valor_1" />
        				*
        				<input type="text" value="500.00" id="multiplicacion_valor_2" />
        				=
        				<span id="multiplicacion_resultado"></span>
        				<input type="button" value="Multiplicaci&oacute;n" onclick="$('#multiplicacion_resultado').html((parseInt($('#multiplicacion_valor_1').val()) * parseInt($('#multiplicacion_valor_2').val())));" />
        				
        			</div>
        		</div>
        		<div class="contenedor_regla_negocio" id="operaciones_division">
        			Divisi&oacute;n
        			<div id="operaciones_division_detalle" style="display:none;">
        			
        				<input type="text" value="500.00" id="division_valor_1" />
        				/
        				<input type="text" value="500.00" id="division_valor_2" />
        				=
        				<span id="division_resultado"></span>
        				<input type="button" value="Divisi&oacute;n" onclick="$('#division_resultado').html((parseInt($('#division_valor_1').val()) / parseInt($('#division_valor_2').val())));" />
        				
        			</div>
        		</div>
        		<div class="contenedor_regla_negocio" id="operaciones_potencia">
        			Potencias
        			<div id="operaciones_potencia_detalle" style="display:none;">
        			
        				<input type="text" value="500.00" id="potencia_valor_1" />
        				a la 
        				<input type="text" value="500.00" id="potencia_valor_2" /> potencia
        				=
        				<span id="potencia_resultado"></span>
        				<input type="button" value="Potenciar" onclick="$('#potencia_resultado').html(Math.pow(parseInt($('#potencia_valor_1').val()) , parseInt($('#potencia_valor_2').val())));" />
        				
        			</div>
        		</div>
        		<div class="contenedor_regla_negocio" id="operaciones_raiz_cuadrada">
        			Ra&iacute;z cuadrada
        			<div id="operaciones_raiz_cuadrada_detalle" style="display:none;">
        			
        				<input type="text" value="500.00" id="raiz_cuadrada_valor_1" />
        				=
        				<span id="raiz_cuadrada_resultado"></span>  
        				
        				<input type="button" value="Potenciar" onclick="$('#raiz_cuadrada_resultado').html(Math.sqrt(parseInt($('#raiz_cuadrada_valor_1').val())));" />
        				
        			</div>
        		</div>
        		<div class="contenedor_regla_negocio">Gasto com&uacute;n</div>
        		<div class="contenedor_regla_negocio">Pago a proveedor</div>
        		<div class="contenedor_regla_negocio">Cobro recurrente</div>
        		<div class="contenedor_regla_negocio">Fecha l&iacute;mite</div>
        	</div>
        	<h3 style="background:#1ecbc8;">Perioricidad</h3>
        	<div style="background:#1ecbc8;">
        		<div class="contenedor_regla_negocio" id="perioricidad_recurrente">
        			Cobro recurrente
        			<div id="perioricidad_recurrente_detalle" style="display:none;">
        			
        				<select>
        					<option>Mensual</option>
        					<option>Bimestras</option>
        					<option>Trimestral</option>
        					<option>Semestral</option>
        				</select>
        				<input type="submit" value="Guardar" />
        				
        			</div>
        		</div>
        		<div class="contenedor_regla_negocio" id="perioricidad_fecha_limite">
        			Fecha l&iacute;mite
        			<div id="perioricidad_fecha_limite_detalle" style="display:none;">
        			
        				<input type="text" value="<?php echo date("Y-m-d"); ?>" />
        				<input type="submit" value="Guardar" />
        				
        			</div>
        		</div>
        	</div>
        	<h3 style="background:#59ebbf;">Envio de archivos</h3>
        	<div style="background:#59ebbf;">
        		<div class="contenedor_regla_negocio" id="adjuntar_recibo">
        			Adjuntar recibo
        			<div id="adjuntar_recibo_detalle" style="display:none;">
        			
        				<input type="file" />
        				<input type="submit" value="Guardar" />
        				
        			</div>
        		</div>
        		<div class="contenedor_regla_negocio">Reporte trimestral</div>
        		<div class="contenedor_regla_negocio">Estado de cuenta</div>
        		<div class="contenedor_regla_negocio">Finanzas mensuales</div>
        		<div class="contenedor_regla_negocio">Informe</div>
        		<div class="contenedor_regla_negocio">Finanzas mensuales</div>
        		<div class="contenedor_regla_negocio">Informe</div>
        		<div class="contenedor_regla_negocio">Encuesta</div>
        	</div>
        	<h3 style="background:#fe7f2d;">Notificaciones</h3>
        	<div style="background:#fe7f2d;">
        		<div class="contenedor_regla_negocio">Con que frecuencia notificar</div>
        		<div class="contenedor_regla_negocio">Notificar por:</div>
        		<div class="contenedor_regla_negocio">Cuando notificar</div>
        		<div class="contenedor_regla_negocio">Notificar a:</div>
        		<div class="contenedor_regla_negocio">Crear mensaje</div>
        	</div>
        </div>
    </div>
    <div style="float:left; width:30%; height:100%;" id="reglas_de_negocio">
    	
    </div>
    <div style="clear:both;"></div>
</div>
<div style="width:100%; background:#DCDCDC; height:400px;">
	<div style="height:400px;" class="sortables">
		<div style="width:250px;" id="sortable_step_1">
			<div style="background:#79C6BB; width:250px; height:100px; display:flex; justify-content:center; align-items:center;">
				Ingreso / Egreso
			</div>
			
			<div style="display:flex; justify-content:center; margin-top:-20px; cursor:pointer;" onclick="agregar_step_1();">
				<i class="material-icons" style="background:red; border-radius:100%; padding:6px;">
                	add
                </i>
			</div>
			
			<div id="step_1_content">
				...
			</div>
		</div>
		<div style="width:250px;" id="sortable_step_2">
    		<div style="background:#61B9B7; width:250px; height:100px; display:flex; justify-content:center; align-items:center;" id="sortable_step_2">
    			Perioricidad
    		</div>
    		<div style="display:flex; justify-content:center; margin-top:-20px; cursor:pointer;" onclick="agregar_step_2();">
				<i class="material-icons" style="background:red; border-radius:100%; padding:6px;">
                	add
                </i>
			</div>
			
			<div id="step_2_content">
				...
			</div>
    	</div>
    	<div style="width:250px;" id="sortable_step_3">
    		<div style="background:#3FA7B2; width:250px; height:100px; display:flex; justify-content:center; align-items:center;" id="sortable_step_3">
    			Envio de archivos
    		</div>
    		<div style="display:flex; justify-content:center; margin-top:-20px; cursor:pointer;" onclick="agregar_step_3();">
				<i class="material-icons" style="background:red; border-radius:100%; padding:6px;">
                	add
                </i>
			</div>
			
			<div id="step_3_content">
				...
			</div>
    	</div>
    	<div style="width:250px;" id="sortable_step_4">
    		<div style="background:#2B9CAF; width:250px; height:100px; display:flex; justify-content:center; align-items:center;" id="sortable_step_4">
    			Notificaciones
    		</div>
    		<div style="display:flex; justify-content:center; margin-top:-20px; cursor:pointer;" onclick="agregar_step_4();">
				<i class="material-icons" style="background:red; border-radius:100%; padding:6px;">
                	add
                </i>
			</div>
			
			<div id="step_4_content">
				...
			</div>
    	</div>
	</div>
	<!-- 
	<div style="float:left; width:70%; background:white; height:400px;" id="sortable_box">
		
	</div>
	-->
</div>


<ul>
	<li id="draggable" class="ui-state-highlight">Drag me down</li>
</ul>

<ul id="sortable">
	<li class="ui-state-default">Item 1</li>
	<li class="ui-state-default">Item 2</li>
	<li class="ui-state-default">Item 3</li>
	<li class="ui-state-default">Item 4</li>
	<li class="ui-state-default">Item 5</li>
</ul>

<script src='http://vozme.com/get_text.js' type='text/javascript'/><a expr:onclick='"get_blogger(\"" + data:post.id + "\",\"es\",\"ml\");"' href='javascript:void(0);' style='margin-left:1.5em;'>((&#8226;)) Escucha este post</a>
                        


</body>
</html>