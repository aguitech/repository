<script src="../js/jquery-3.3.1.js"></script>
<style>
.sexo_residentes{
	float:left;
	width:200px;
	text-align:center;
	padding:10px;
	background:#F9FAFD;
	cursor:pointer;
	/*border:1px solid gray;*/
	font-weight:700;
	color:#999DA3;
}
.sexo_residentes:nth-child(1){
	border-right:1px solid gray;
	border-radius:5px 0 0 5px;
}
.sexo_residentes:nth-child(2){
	border-left:1px solid gray;
	border-radius:0 5px 5px 0;
}
.rol_usuario_activo{
	/*background:1ecbc8;*/
	background:#1ecbc8;
	color:white;
}
</style>
<div style="width:442px; border:2px solid gray; border-radius:7px;height:39px;">
    <div style="" class="sexo_residentes rol_usuario_activo" onclick="$('.sexo_residentes').removeClass('rol_usuario_activo'); $(this).addClass('rol_usuario_activo');">Usuario principal</div>
    <div style="" class="sexo_residentes" onclick="$('.sexo_residentes').removeClass('rol_usuario_activo'); $(this).addClass('rol_usuario_activo');">Usuario secundario</div>
</div>