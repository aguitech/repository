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
		<div style="width:100px; height:3000px; background:#DCDCDC;" id="cont_principal">
			<div class="header" style="height:200px; background:red;">dsdsads</div>
		</div>
	</body>
</html>