<style>
@media screen and (max-width:440px) {
	.rojo{
		background:red;
		-webkit-order:1;
    	order:1;
    }
    .verde{
		background:green;
    	-webkit-order:3;
    	order:3;
    }
    .azul{
		background:blue;
    	-webkit-order:2;
    	order:2;
    }
}
@media screen and (min-width:441px) and (max-width:999px) {
    .rojo{
		background:red;
    	-webkit-order:1;
    	order:1;
    }
    .verde{
		background:green;
    	-webkit-order:0;
    	order:0;
    }
    .azul{
		background:blue;
    	-webkit-order:2;
    	order:2;
    }
}
@media screen and (min-width:1000px) and (max-width:5000px) {
    .rojo{
		background:red;
    	-webkit-order:0;
    	order:0;
    }
    .verde{
		background:green;
    	-webkit-order:1;
    	order:1;
    }
    .azul{
		background:blue;
    	-webkit-order:2;
    	order:2;
    }
}
</style>
<div style="display:flex;">
    <div class="rojo">
    	Rojo
    </div>
    <div class="verde">
    	Verde
    </div>
    <div class="azul">
    	Azul
    </div>
</div>