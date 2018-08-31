<!DOCTYPE html>
<html>
	<head>
		<script src="/js/jquery-3.3.1.js" ></script>
		<script>
		var $header = $('.header'),
    	    scrollClass = 'on-scroll',
    	    activateAtY = 20;
    
    	function deactivateHeader() {
    	    if (!$header.hasClass(scrollClass)) {
    	        $header.addClass(scrollClass);
    	    }
    	}
    
    	function activateHeader() {
    	    if ($header.hasClass(scrollClass)) {
    	        $header.removeClass(scrollClass);
    	    }
    	}
    
        $(window).scroll(function() {
        	//alert("");
        	//alert($(window).scrollTop());

        	//alert($(document).height());
        	
			var altura_del_navegador = $(window).height();
			//var porcentaje_altura_pagina = (100 / $(document).height()) * ($(window).scrollTop() + altura_del_navegador);
			var porcentaje_altura_pagina = (100 / ($(document).height() - + altura_del_navegador)) * $(window).scrollTop();
			//alert(porcentaje_altura_pagina);
			//Math.floor(1.6)
			//Redondeando para abajo
			var res_altura_pantalla = Math.floor(porcentaje_altura_pagina) + "%";
			//alert(res_altura_pantalla);

			//$("#altura_pagina").stop().animate({"width":"20%"}, "100");
			$("#altura_pagina").stop().animate({"width":res_altura_pantalla}, "100");
        	
        	
        	if($(window).scrollTop() == 0){
        		$("#cont_principal").css({"background":"blue"});
        		$("#cont_principal").stop().animate({"width":"20px"}, "100");
        	}else if($(window).scrollTop() > 1 && $(window).scrollTop() < 200) {
            	$("#cont_principal").css({"background":"orange"});
        	    $("#cont_principal").stop().animate({"width":"150px"}, "200");
                //deactivateHeader();
            } else if($(window).scrollTop() > 21 && $(window).scrollTop() < 1000){
                //activateHeader();
            	$("#cont_principal").css({"background":"pink"});
            	$("#cont_principal").stop().animate({"width":"500px"}, "150");
            }else{
            	$("#cont_principal").css({"background":"green"});
            	$("#cont_principal").stop().animate({"width":"1000px"}, "150");
            }
        });
		/*
        // Returns height of browser viewport
        $( window ).height();
         
        // Returns height of HTML document
        $( document ).height();
		
		var body = $("html, body");
		body.stop().animate({scrollTop:0}, 500, 'swing', function() { 
		   alert("Finished animating");
		});

		body.stop().animate({scrollTop:500}, 500, 'swing', function() { 
		   alert("Finished animating");
		});
		*/
		</script>
		<style>
		.scrollClass{
			background:orange;
		}
		</style>
	</head>
	<body>
		<div style="position:fixed; top:0; left:0; right:0;">
			<div style="widith:100%; background:gray;" id="">
				<div style="background:orange; width:0%;" id="altura_pagina">
					fds
				</div>
			</div>
		</div>
		<div style="width:100px; height:3000px; background:#DCDCDC;" id="cont_principal">
			<div class="header" style="height:200px; background:red;">dsdsads</div>
		</div>
	</body>
</html>