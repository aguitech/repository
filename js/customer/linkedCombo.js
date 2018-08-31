$(function(){
	$("select").change(function(){
		var linked = $(this).attr("linked");
		var hijo = $(this).attr("hijo");
		var redirect = $(this).attr("redirect");
		var page = $(this).attr("page");
		var firstvalue = $(this).attr("firstvalue");
		
		if(linked == "true"){
			$.getJSON("./ajax.php",{id: $(this).val(), ajax: true, hijo: hijo}, function(j){
				var options = '';
				options += '<option value="0">' + firstvalue + '</option>';
				for (var i = 0; i < j.length; i++) {
					options += '<option value="' + j[i].optionValue + '">' + j[i].optionDisplay + '</option>';
				}
				$("#" + hijo).html(options);
				$('#' + hijo + ' option:first').attr('selected', 'selected');
				$('#' + hijo).change();
			})
		}
		if(redirect = "true" && page != undefined && $(this).val() != "0"){
			location.href = './' + page + '?' + $(this).attr("name") + '=' + $(this).val();
		}
	})
})