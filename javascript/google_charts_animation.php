<?php
$porcentaje = $_GET["porcentaje"];
$porcentaje = 78;
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- 
		<meta name="viewport" content="width=320; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
		 -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="Author" content="Hector Aguilar [ www.aguitech.com ]" lang="es">
		<meta name="description" content="Aguitech Intranet. Contacto: hector@aguitech.com">
		<meta name="keywords" content="Aguitech Intranet">
		<link rel="Shortcut Icon" href="http://hector-aguilar.com/favicon.ico" type="image/x-icon" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
		<!--
		<link rel="Shortcut Icon" href="http://www.aguitech.com/icono.ico" type="image/x-icon" />
		
		<title>ADMINISTRADOR</title>
		 -->
		<title>Aguitech Intranet</title>
		<link rel="stylesheet" href="css/styles.css" />
		<script src="js/jquery-1.7.2.js"></script>
		<script src='http://code.jquery.com/jquery-1.8.3.min.js' type='text/javascript'></script>
		<script src="js/scripts.js"></script>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);
    
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Fecha', 'Couta de mantenimiento', 'Amenidades'],
              ['Apr 04',  1000,      400],
              ['Apr 10',  1170,      460],
              ['Apr 16',  660,       1120],
              ['Apr 22',  1030,      540],
              ['Apr 28',  1000,      400],
              ['May 04',  1170,      460],
              ['May 10',  660,       1120],
              ['May 16',  1030,      540],
              ['May 22',  1000,      400],
              ['May 28',  1170,      460],
              ['Jun 03',  660,       1120],
              ['Jun 09',  1030,      540],
              ['Jun 15',  1000,      400],
              ['Jun 21',  1170,      460],
              ['Jun 27',  660,       1120]
              
            ]);
    
            var options = {
              //title: 'Company Performance',
              //hAxis: {title: 'Cantidad',  titleTextStyle: {color: '#333'}},
              vAxis: {minValue: 0},
              //width: 250,
              height: 200,
              animation:{duration:1000,easing:'out'},
              //title: 'Toppings I Like On My Pizza',
              colors: ['#0092F1', '#1ECBC8']
            };
    
            var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
            chart.draw(data, options);

            setTimeout(function(){
                data.setValue(0,1,300);
                data.setValue(1,1,400);
                data.setValue(2,1,500);
                
				chart.draw(data, options);
			}, 1000);

            setTimeout(function(){
                data.setValue(0,2,500);
                data.setValue(1,2,400);
                data.setValue(2,2,300);
                
				chart.draw(data, options);
			}, 2000);
          }
        </script>
    		
		<script>
		$(document).ready(function() {
			$("#usuario").focus();
			$("body").bind('keypress', function(event){
				if(event.keyCode == '13'){
					validar_usuario();
					//alert("Precionaste Enter");
				}else if(event.keyCode == '27'){
					$("#contenedor_carga").fadeOut("500");
					$("#fondo_carga").fadeOut("500");
					
					
				}else{
					//alert("Presionaste otra tecla");
					//alert(event.keyCode);
				}
			});
		});
		</script>
		<script>
		function validar_registro(){
			if($("#registro_contrasenia").val() == ""){
				$("#drcontrasenia").show();
				$("#registro_contrasenia").focus();
			}else{
				$("#drcontrasenia").hide();
			}
			if($("#registro_celular").val() == ""){
				$("#drcelular").show();
				$("#registro_celular").focus();
			}else{
				$("#drcelular").hide();
			}
			if($("#registro_email").val() == ""){
				$("#dremail").show();
				$("#registro_email").focus();
			}else{
				$("#dremail").hide();
			}
			if($("#registro_nombre").val() == ""){
				$("#drnombre").show();
				$("#registro_nombre").focus();
			}else{
				$("#drnombre").hide();
			}
			
			//if($("#usuario").val() != "" && $("#usuario").val() != "Usuario" && $("#contrasenia").val() != ""){
			if($("#registro_nombre").val() != "" && $("#registro_email").val() != "" && $("#registro_celular").val() != "" && $("#registro_contrasenia").val() != ""){
				$("#form_registro").submit();
			}
			
		}
		function validar_usuario_field(){
			if($("#usuario").val() == ""){
				$("#dusuario").show();
				$("#usuario").focus();
				$("#usuario").css({"border":"2px solid red"});
			}else{
				$("#dusuario").hide();
				$("#usuario").css({"border":"2px solid #DCDCDC"});
			}
		}
		function validar_contrasenia(){
			if($("#contrasenia").val() == ""){
				$("#dcontrasenia").show();
				$("#contrasenia").focus();
				$("#contrasenia").css({"border":"2px solid red"});
			}else{
				$("#dcontrasenia").hide();
				$("#contrasenia").css({"border":"2px solid #DCDCDC"});
			}
		}
		function validar_usuario(){
			if($("#contrasenia").val() == "" || $("#contrasenia").val() == "Usuario"){
				$("#dcontrasenia").show();
				$("#contrasenia").focus();
				$("#contrasenia").css({"border":"2px solid red"});
			}else{
				$("#dcontrasenia").hide();
				$("#contrasenia").css({"border":"2px solid #DCDCDC"});
			}
			if($("#usuario").val() == "" || $("#usuario").val() == "Contraseña"){
				$("#dusuario").show();
				$("#usuario").focus();
				$("#usuario").css({"border":"2px solid #DCDCDC"});
			}else{
				$("#dusuario").hide();
				$("#usuario").css({"border":"2px solid #DCDCDC"});
			}
			
			if($("#usuario").val() != "" && $("#usuario").val() != "Usuario" && $("#contrasenia").val() != ""){
				$("#form_acceso").submit();
			}
			
		}
		</script>
		<script>
		$(document).on('click', 'a.smooth', function(e) {
			//alert("hola");
			
		    var $link = $(this);
		    //alert(this);
		    var anchor  = $link.attr('href');
		    $('html, body').stop().animate({
		        scrollTop: $(anchor).offset().top
		    }, 1000);

		    $("#menu_mobile").hide();
		    
		});
		</script>
		
		<script>
		function cargar_form(tipo){
			if(tipo == "1"){
				$.ajax({
	    			url: "condominio_form1.php",
	    			cache: false
	    		})
	    		.done(function( html ) {
	    			$( "#fondo_carga" ).show();
	    			$( "#contenedor_carga" ).show();
	    			$( "#contenedor_carga_informacion" ).html("");

	    			
	    			$( "#contenedor_carga_informacion" ).append( html );
	    		});
			}
			if(tipo == "2"){

				$( "#contenedor_carga_informacion" ).html("");
				$('html, body').stop().animate({
    		        scrollTop: $("#contenedor_carga").offset().top
    		    }, 1000);
    		    
				$.ajax({
	    			url: "condominio_form2.php",
	    			cache: false
	    		})
	    		.done(function( html ) {
	    			$( "#fondo_carga" ).show();
	    			$( "#contenedor_carga" ).show();
	    			$( "#contenedor_carga_informacion" ).html("");

	    			
	    			
	    			
	    			$( "#contenedor_carga_informacion" ).append( html );
	    		});
			}
			if(tipo == "3"){
				
				$( "#contenedor_carga_informacion" ).html("");
				$.ajax({
	    			url: "condominio_form3.php",
	    			cache: false
	    		})
	    		.done(function( html ) {
	    			$( "#fondo_carga" ).show();
	    			$( "#contenedor_carga" ).show();
	    			$( "#contenedor_carga_informacion" ).html("");
	    			$( "#contenedor_carga_informacion" ).append( html );
	    		});


				$('html, body').stop().animate({
    		        scrollTop: $("#contenedor_carga").offset().top
    		    }, 0);
			}
			
			
		}
		</script>
	</head>
	<body onload="obtener_top();">
		<div style="position:absolute; top:0; left:0; right:0; bottom:0; z-index:4; display:none;" id="contenedor_carga">
			<div style="width:100%; height:100%;">
    			<div class="contenedor_principal" style=" background:white;">
    				<div id="contenedor_carga_informacion">
    					
    				</div>
    			</div>
    		</div>
			
		</div>
		<div style="position:fixed; top:0; left:0; right:0; bottom:0; z-index:3; display:none;" id="fondo_carga">
			<div style="width:100%; height:100%; background:white;">
    			<div class="contenedor_principal" style="">
    				
    			</div>
    		</div>
			
		</div>
		<!-- <div style="position:fixed; top:0; left:0; right:0; bottom:0; z-index:2; display:none;" id="menu_mobile"> -->
		<div style="position:fixed; z-index:2; display:none;" id="menu_mobile">
			<?php include("common_files/menu_mobile.php"); ?>
		</div>
		<div style="position:absolute; z-index:2; display:none;" id="menu_cuentas_detalle_mobile" class="menu_cuentas_detalle_mobile bg_menu_cuentas_detalle">
			<?php include("common_files/menu_cuentas_detalle_mobile.php"); ?>
		</div>
		
		<div style="position:absolute; top:0; left:0; right:0; bottom:0;">
			<div style="width:100%; height:100%;">
				<div style="" class="contenedor_principal">
					<div class="header">
						<?php include("common_files/header.php"); ?>
					</div>
					<div style="" class="header_admin_cuenta_detalle">
						<?php include("common_files/header_admin_cuenta_detalle.php"); ?>
					</div>
					<div style="" class="menu_lateral_cuentas">
						<?php include("common_files/menu_lateral_cuentas.php"); ?>
					</div>
					<div class="navegacion_cuenta" style="display:none;" onmouseover="navegacion_abrir()" onmouseout="navegacion_cerrar()">
						<?php include("common_files/menu_navegacion.php"); ?>
					</div>
					<div class="contenidos_admin_cuenta_detalle" id="login" style="">
						<div class="margen_contenidos_admin_cuenta">
    						<div class="titulo_formulario_principal" style="">Tablero</div>
    						<a onclick="cargar_form(1)" class="btn_form_right">VER PERFIL</a>
    						<a onclick="cargar_form(1)" class="btn_form_right_mobile">
        							<img src="images/btn_crear_movil.png" />
        						</a>
    						<div style="clear:both;"></div>
    						<script>
    						function display_target(id){
    							var target = "#tarjeta" + id;
    
    							var target_visible = "#tarjeta" + id + ":visible";
    							var target_invisible = "#tarjeta" + id + ":visible";
    
    
    							var arrow_normal = "#arrow_nav_space_" + id;
    							var arrow_select = "#arrow_nav_select_" + id;
    
    							if($(target_visible).length == 0){
    								//$(target).toggle("slow");
    
    
    								$(arrow_normal).hide();
    								$(arrow_select).show();
    								$(target).show("slow");	
    								
    							}else{
    								$(arrow_select).hide();
    								$(arrow_normal).show();
    								$(target).hide("slow");
    							}
    							
    						}
    						</script>
    						<?php //for($i=0; $i<1; $i++){ ?>
    						
    						<?php $i=0; ?>
    						<div class="contenedor_cuentas_unidades" style="">
    							<div class="cont_cuentas_derecho">
    								<div class="titulo_cuentas">
    									Unidades
    								</div>
    							</div>
    							<div class="cont_cuentas_flecha" id="flecha_nav_<?php echo $i; ?>" onclick="display_target(<?php echo $i; ?>)">
    								<div class="arrow_interlineado">
    									<i class="large material-icons arrow_nav_space" id="arrow_nav_space_<?php echo $i; ?>">arrow_drop_down</i>
    									<i class="large material-icons arrow_nav_select" id="arrow_nav_select_<?php echo $i; ?>">arrow_drop_up</i>
    								</div>
    								
    							</div>
    							<div style="clear:both;"></div>
    							<div style="" class="tarjetas_cuentas" id="tarjeta<?php echo $i; ?>">
    								<style>
                                    .animacion{
                                    
                                    }
                                    @keyframes mymove2 {
                                        0%   {top: 0px; background: #ce0000; width: 0%;}
                                    	20%   {top: 0px; background: #c6b500; width: 20%;}
                                    	40%   {top: 0px; background: #24c600; width: 40%;}
                                    	60%   {top: 0px; background: #00c6b2; width: 60%;}
                                    	80%   {top: 0px; background: #0039bf; width: 80%;}
                                        100% {top: 0px; background: #8500bf; width: 100%;}
                                    }
                                    .animacion_circulo{
                                    	/*stroke-dasharray: 20;*/
                                    	/*stroke-dasharray: 20;*/
                                    	/*animation: dash 5s linear;*/
                                    	animation-name: dash;
                                        animation-duration: 4s;
                                    	/*
                                        animation-iteration-count: infinite;
                                        */
                                    }
                                    @keyframes dash {
                                        /*0%   {top: 0px; stroke-dashoffset: 1000; }*/
                                        from{
                                            stroke-dasharray:00, 100;
                                        }
                                    	to{
                                            stroke-dasharray:<?php echo $porcentaje - $i; ?>, 100;
                                        }
                                    	/*
                                        0%   {top: 0px; stroke-dasharray:00, 100;}
                                    	20%   {top: 0px; stroke-dasharray:15, 100;}
                                    	40%   {top: 0px; stroke-dasharray:30, 100;}
                                    	60%   {top: 0px; stroke-dasharray:45, 100;}
                                    	80%   {top: 0px; stroke-dasharray:60, 100;}
                                        100% {top: 0px; stroke-dasharray:75, 100;}
                                    	*/
                                    }
                                    .percentage {
                                      fill: #666;
                                      font-size: 0.5em;
                                      text-anchor: middle;
                                    }
                                    .percentage_desc {
                                      fill: #666;
                                      font-size: 0.16em;
                                      text-anchor: middle;
                                    }
                                    </style>
                                    <div class="contenedor_graficas">
        								<div style="text-align:center;" class="">
        									<svg viewbox="0 0 36 36" style="z-index:0;" class="grafica_tablero animacion" >
        										<defs>
        											<linearGradient id="linear<?php echo $i; ?>" x1="0%" y1="0%" x2="100%" y2="0%">
        												<stop offset="0%" style="stop-color:#0092F1;stop-opacity:1" />
        												<stop offset="100%" style="stop-color:#1ECBC8;stop-opacity:1" />
        											</linearGradient>
        										</defs>
        										<path
        											d="M18 2.0845
        												a 15.9155 15.9155 0 0 1 0 31.831
        												a 15.9155 15.9155 0 0 1 0 -31.831"
        											fill="none"
        											stroke="#ccc";
        											stroke-width="2";
        											stroke-dasharray="100, 100"
        										></path>
        										<path
        											d="M18 2.0845
        												a 15.9155 15.9155 0 0 1 0 31.831
        												a 15.9155 15.9155 0 0 1 0 -31.831"
        											fill="none"
        											stroke="url(#linear<?php echo $i; ?>)";
        											stroke-width="2";
        											class="animacion_circulo"
        											stroke-dasharray="<?php echo $porcentaje - $i; ?>, 100"
        											stroke-linecap="round"
        										></path>
        										<text x="18" y="20.35" class="percentage"><?php echo $porcentaje - $i; ?>%</text>
          										<text x="18" y="23.35" class="percentage_desc">Ocupaci&oacute;n total</text>
        									</svg>
        								</div>
        							</div>
    								<div class="interlineado_cuentas_general">
    									<div class="contenidos_cuentas_general">
    										<div class="texto_contenidos_cuentas">Unidades totales</div>
    										<div class="numero_contenidos_cuentas">469</div>
    									</div>
    									<div class="contenidos_cuentas_general">
    										<div class="texto_contenidos_cuentas">Unidades libres</div>
    										<div class="numero_contenidos_cuentas">462</div>
    										
    									</div>
    									<div style="clear:both;"></div>
    								</div>
    							</div>
    						</div>
    						
    						
    						<?php $i=1; ?>
    						<div class="contenedor_cuentas_finanzas">
    							<div class="cont_cuentas_derecho">
    								<div class="titulo_cuentas">
    									Finanzas
    								</div>
    							</div>
    							<div class="cont_cuentas_flecha" id="flecha_nav_<?php echo $i; ?>" onclick="display_target(<?php echo $i; ?>)">
    								<div class="arrow_interlineado">
    									<i class="large material-icons arrow_nav_space" id="arrow_nav_space_<?php echo $i; ?>">arrow_drop_down</i>
    									<i class="large material-icons arrow_nav_select" id="arrow_nav_select_<?php echo $i; ?>">arrow_drop_up</i>
    								</div>
    								
    							</div>
    							<div style="clear:both;"></div>
    							<div style="" class="tarjetas_cuentas" id="tarjeta<?php echo $i; ?>">
    								<style>
                                    .animacion{
                                    
                                    }
                                    @keyframes mymove2 {
                                        0%   {top: 0px; background: #ce0000; width: 0%;}
                                    	20%   {top: 0px; background: #c6b500; width: 20%;}
                                    	40%   {top: 0px; background: #24c600; width: 40%;}
                                    	60%   {top: 0px; background: #00c6b2; width: 60%;}
                                    	80%   {top: 0px; background: #0039bf; width: 80%;}
                                        100% {top: 0px; background: #8500bf; width: 100%;}
                                    }
                                    .animacion_circulo{
                                    	/*stroke-dasharray: 20;*/
                                    	/*stroke-dasharray: 20;*/
                                    	/*animation: dash 5s linear;*/
                                    	animation-name: dash;
                                        animation-duration: 4s;
                                    	/*
                                        animation-iteration-count: infinite;
                                        */
                                    }
                                    @keyframes dash {
                                        /*0%   {top: 0px; stroke-dashoffset: 1000; }*/
                                        from{
                                            stroke-dasharray:00, 100;
                                        }
                                    	to{
                                            stroke-dasharray:<?php echo $porcentaje - $i; ?>, 100;
                                        }
                                    	/*
                                        0%   {top: 0px; stroke-dasharray:00, 100;}
                                    	20%   {top: 0px; stroke-dasharray:15, 100;}
                                    	40%   {top: 0px; stroke-dasharray:30, 100;}
                                    	60%   {top: 0px; stroke-dasharray:45, 100;}
                                    	80%   {top: 0px; stroke-dasharray:60, 100;}
                                        100% {top: 0px; stroke-dasharray:75, 100;}
                                    	*/
                                    }
                                    .percentage {
                                      fill: #666;
                                      font-size: 0.5em;
                                      text-anchor: middle;
                                    }
                                    .percentage_desc {
                                      fill: #666;
                                      font-size: 0.16em;
                                      text-anchor: middle;
                                    }
                                    </style>
                                    <div style="float:left;">
        								<div style="text-align:left; margin-left:40px; width:180px; margin-right:0px; border-right:1px solid rgba(0,0,0,.1);" class="">
        									<div style="font-size:24px; font-weight:0; font-weight:900; color:rgba(0,0,0,.8); padding-top:15px;">
        										$4,808.00
        									</div>
        									<div style="font-size:12px; margin-bottom:15px; color:rgba(0,0,0,.5);">
        										Couta Total
        									</div>
        									<div style="font-size:16px; font-weight:900; color:rgba(0,0,0,.75); margin-top:30px;">
        										$4,808.00
        									</div>
        									<div style="font-size:12px; color:rgba(0,0,0,.5);">
        										Couta mantenimiento
        									</div>
        									<div style="width:120px; background:#F1F2F4; height:5px; border-radius:7px; margin-top:5px; margin-bottom:15px;">
        										<div style="width:<?php echo 67*1.2; ?>px; background:#0092F1; height:5px; border-radius:7px; margin-top:5px; margin-bottom:15px;">&nbsp;</div>
        									</div>
        									<!-- 
        									<div style="width:200px; background:#0092F1; height:5px; border-radius:7px; margin-top:5px; margin-bottom:15px;">&nbsp;</div>
        									-->
        									<div style="font-size:16px; font-weight:900; color:rgba(0,0,0,.75); margin-top:25px;">
        										$8.00
        									</div>
        									<div style="font-size:12px; color:rgba(0,0,0,.5);">
        										Amenidades
        									</div>
        									<div style="width:120px; background:#F1F2F4; height:5px; border-radius:7px; margin-top:5px;">
        										<div style="width:<?php echo 67*1.2; ?>px; background:#0092F1; height:5px; border-radius:7px; margin-top:5px; margin-bottom:15px;">&nbsp;</div>
        									</div>
        								</div>
        							</div>
    								<div class="contenedor_grafica_puntos" style="">
    									<div id="chart_div" style="width: 100%;"></div>
    								</div>
    							</div>
    						</div>
    						<?php //} ?>
    						<div style="clear:both;"></div>
    						
    						<div class="contenedor_cuentas_detalle_informativos">
    							<div class="contenedor_cuentas_detalle_informativos_seccion">
    								<div>
    									<img src="images/menu_lateral_residentes.png" class="imagen_tablero_detalle_informativos" />
    								</div>
    								<div>
    									<div class="imagen_tablero_detalle_numeros">16</div>
    									<div class="imagen_tablero_detalle_textos">Total de residentes</div>
    								</div>
    							</div>
    							<div class="contenedor_cuentas_detalle_informativos_seccion">
    								<div>
    									<img src="images/menu_lateral_admin_condo.png" class="imagen_tablero_detalle_informativos" />
    								</div>
    								<div>
    									<div class="imagen_tablero_detalle_numeros">2</div>
    									<div class="imagen_tablero_detalle_textos">Total de administradores</div>
    								</div>
    							</div>
    							<div class="contenedor_cuentas_detalle_informativos_seccion">
    								<div>
    									<img src="images/menu_lateral_instrucciones_entrada.png" class="imagen_tablero_detalle_informativos" />
    								</div>
    								<div>
    									<div class="imagen_tablero_detalle_numeros">47</div>
    									<div class="imagen_tablero_detalle_textos">Instrucciones de entrada de hoy</div>
    								</div>
    							</div>
    							<div class="contenedor_cuentas_detalle_informativos_seccion">
    								<div>
    									<img src="images/menu_lateral_gestion_cuenta.png" class="imagen_tablero_detalle_informativos" />
    								</div>
    								<div style="">
    									<div class="imagen_tablero_detalle_numeros">0</div>
    									<div class="imagen_tablero_detalle_textos">Total de unidades con deuda en la couta de mantenimiento</div>
    								</div>
    							</div>
    						</div>
    						
    						
    						<div class="contenedor_informacion_tablero" style="">
    							<div>
    								
    							</div>
    							<div class="cont_titulo_informativo">
    								<div class="titulo_cuentas">
    									Solicitud de Servicios
    								</div>
    							</div>
    							<div class="cont_cuentas_flecha" id="flecha_nav_info" onclick="display_target('info')">
    								<div class="arrow_interlineado">
    									<i class="large material-icons arrow_nav_space" id="arrow_nav_space_info">arrow_drop_down</i>
    									<i class="large material-icons arrow_nav_select" id="arrow_nav_select_info">arrow_drop_up</i>
    								</div>
    								
    							</div>
    							<div style="clear:both;"></div>
    							<div style="" class="tarjetas_informacion" id="tarjetainfo">
    								<div class="contenedor_informativo_detalle" style="">
                                    	<div style="width:100%;">
            								<div style="text-align:center;" class="">
            									<div class="content_info">
            										<div class="content_info_desc">Ubicación:</div>
            										<div class="content_info_text">Mexico, Miguel Hidalgo</div>
            									</div>
            									<div class="content_info">
            										<div class="content_info_desc">Dirección:</div>
            										<div class="content_info_text">Avenida Mariano Escobedo, Esquina con Lago Alberto, ,</div>
            									</div>
            									<div class="content_info">
            										<div class="content_info_desc">Administrador principal de la cuenta:</div>
            										<div class="content_info_text">Adrian Covarrubias Zermeño</div>
            									</div>
        
        
        
            									
            								</div>
            							</div>
        							</div>
    								<div class="interlineado_cuentas_principal">
    									<div class="contenidos_cuentas_general">
    										<div class="texto_contenidos_cuentas">Total de condominios</div>
    										<div class="numero_contenidos_cuentas">1</div>
    									</div>
    									<div class="contenidos_cuentas_general">
    										<div class="texto_contenidos_cuentas">Total de residentes</div>
    										<div class="numero_contenidos_cuentas">11</div>
    										
    									</div>
    									<div class="contenidos_cuentas_general">
    										<div class="texto_contenidos_cuentas">Ingresos mensuales</div>
    										<div class="numero_contenidos_cuentas"><?php echo number_format(0, 2); ?> $</div>
    										
    									</div>
    									<div class="contenidos_cuentas_general">
    										<div class="texto_contenidos_cuentas">Unidades totales</div>
    										<div class="numero_contenidos_cuentas">469</div>
    										
    									</div>
    									<div class="contenidos_cuentas_general">
    										<div class="texto_contenidos_cuentas">Total de personal</div>
    										<div class="numero_contenidos_cuentas">0</div>
    										
    									</div>
    									<div class="contenidos_cuentas_general">
    										<div class="texto_contenidos_cuentas">Pagos pendientes</div>
    										<div class="numero_contenidos_cuentas"><?php echo number_format(0, 2); ?> $</div>
    										
    									</div>
    									<div style="clear:both;"></div>
    								</div>
    							</div>
    						</div>
    						
    						<div class="contenedor_informacion_tablero" style="">
    							<div>
    								
    							</div>
    							<div class="cont_titulo_informativo">
    								<div class="titulo_cuentas">
    									Anuncios
    								</div>
    							</div>
    							<div class="cont_cuentas_flecha" id="flecha_nav_info" onclick="display_target('info2')">
    								<div class="arrow_interlineado">
    									<i class="large material-icons arrow_nav_space" id="arrow_nav_space_info">arrow_drop_down</i>
    									<i class="large material-icons arrow_nav_select" id="arrow_nav_select_info">arrow_drop_up</i>
    								</div>
    								
    							</div>
    							<div style="clear:both;"></div>
    							<div style="" class="tarjetas_informacion" id="tarjetainfo2">
    								<div class="contenedor_informativo_detalle" style="">
                                    	<div style="width:100%;">
            								<div style="text-align:center;" class="">
            									<div class="content_info">
            										<div class="content_info_desc">Ubicación:</div>
            										<div class="content_info_text">Mexico, Miguel Hidalgo</div>
            									</div>
            									<div class="content_info">
            										<div class="content_info_desc">Dirección:</div>
            										<div class="content_info_text">Avenida Mariano Escobedo, Esquina con Lago Alberto, ,</div>
            									</div>
            									<div class="content_info">
            										<div class="content_info_desc">Administrador principal de la cuenta:</div>
            										<div class="content_info_text">Adrian Covarrubias Zermeño</div>
            									</div>
        
        
        
            									
            								</div>
            							</div>
        							</div>
    								<div class="interlineado_cuentas_principal">
    									<div class="contenidos_cuentas_general">
    										<div class="texto_contenidos_cuentas">Total de condominios</div>
    										<div class="numero_contenidos_cuentas">1</div>
    									</div>
    									<div class="contenidos_cuentas_general">
    										<div class="texto_contenidos_cuentas">Total de residentes</div>
    										<div class="numero_contenidos_cuentas">11</div>
    										
    									</div>
    									<div class="contenidos_cuentas_general">
    										<div class="texto_contenidos_cuentas">Ingresos mensuales</div>
    										<div class="numero_contenidos_cuentas"><?php echo number_format(0, 2); ?> $</div>
    										
    									</div>
    									<div class="contenidos_cuentas_general">
    										<div class="texto_contenidos_cuentas">Unidades totales</div>
    										<div class="numero_contenidos_cuentas">469</div>
    										
    									</div>
    									<div class="contenidos_cuentas_general">
    										<div class="texto_contenidos_cuentas">Total de personal</div>
    										<div class="numero_contenidos_cuentas">0</div>
    										
    									</div>
    									<div class="contenidos_cuentas_general">
    										<div class="texto_contenidos_cuentas">Pagos pendientes</div>
    										<div class="numero_contenidos_cuentas"><?php echo number_format(0, 2); ?> $</div>
    										
    									</div>
    									<div style="clear:both;"></div>
    								</div>
    							</div>
    						</div>
    						<div style="clear:both;"></div>
    						
    						
						</div>
					</div>
				</div>
			</div>
		</div>
		<style>
        
        
		
		</style>
		<script>
		$(document).ready(function (){
			$('#btn_menu_inferior_1').hover(function(){
				$(this).attr('src', '/yoin/images/ic_tablero_on.png');
			}, function() {
				$(this).attr('src', '/yoin/images/ic_admin_off.png');
			});
		});
			
		
		/*
		var that = this;
		if (that.src == ''){
		    that.src = 'default.gif';
		}

		$('#btn_menu_inferior_1').attr('src','default.gif');
		*/
		 
		
		</script>
		<div style="" id="menu_inferior">
			<?php include("common_files/menu_inferior_cuentas.php"); ?>
		</div>
	</body>
</html>