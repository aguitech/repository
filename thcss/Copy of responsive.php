<!DOCTYPE>
<html>
	<head>
		<style>
            @media screen and (max-width:440px) {
            	.contenedor_responsive{
                    background:red;
            		width:100%;
            		height:100%;	
                }
            }
            @media screen and (min-width:441px) and (max-width:770px) {
                .contenedor_responsive{
                    background:green;
            		width:100%;
            		height:100%;	
                }
            }
            @media screen and (min-width:771px) and (max-width:999px) {
                .contenedor_responsive{
                    background:blue;
            		width:100%;
            		height:100%;	
                }
            }
            @media screen and (min-width:1000px) and (max-width:5000px) {
                .contenedor_responsive{
                    background:pink;
            		width:100%;
            		height:100%;	
                }
            }
        </style>
	</head>
	<body>
		<div style="position:absolute; top:0; left:0; right:0;">
			<div style="width:100%; height:100%;">
				<div class="contenedor_responsive">
					&nbsp;1
				</div>
				<div class="1val">1</div>
				<div class="2val">2</div>
				<div class="3val">3</div>
				<div class="4val">4</div>
			</div>
		</div>
	</body>
</html>
