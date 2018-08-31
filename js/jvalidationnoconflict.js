/**
 * josiris form validation - Form validation made easy
 * 
 * Copyright (c) 2007 Daniel Rosiles (http://www.daniel.rosiles.com.mx)
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php) 
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * $LastChangedDate: 2007-10-28 10:00:00 +0100 (sun, 28 oct 2007) $
 *
 * Version: 1.0.0
 * Requires: jQuery v1.2.1+
 */
var $j = jQuery.noConflict();

$j(function(){
    $j("form").submit(function(){
    	valid = true;
		fmsg = $j(this).attr("msg");
		color = $j(this).attr("color");
		fconfirm = $j(this).attr("fconfirm");

		if(color == undefined)
			color = "red";

		$j(this)
		.find("input[@required='true'], textarea[@required='true']")
		.each(function() {
			msg = $j(this).attr("msg");
			dtype = $j(this).attr("dtype");

			if($j(this).val().length == 0){
				valid = false;
				elem = $j(this);
				return false;
			}
			
			if(dtype != undefined && !(validate(dtype,$j(this).val()))){
				if(msg == undefined)
					msg = getmsg(dtype);
				valid = false;
				elem = $j(this);
				return false;
			}
		});

		if(!valid)
			return endValid(msg, fmsg, elem, fconfirm, valid);
		
		$j(this)
		.find("select[@required='true']")
		.each(function() {
			if($j(this).val().length == 0 || $j(this).val() == "0"){
				msg = $j(this).attr("msg");
				valid = false;
				elem = $j(this);
				return false;
			}
		});
		
		if(!valid)
			return endValid(msg, fmsg, elem, fconfirm, valid);		
		
		var checked = 0;
		var reviewcheckbox = false;		
		
		$j(this)
		.find("input[@type=checkbox][@required='true']")
		.each(function() {
			reviewcheckbox = true;
			
			if($j(this).is(':checked'))
				checked++;
			else {
				msg = $j(this).attr("msg");
				elem = $j(this);
			}
		});

		if(reviewcheckbox && checked == 0){
			valid = false;
		}
		
		if(!valid)
			return endValid(msg, fmsg, elem, fconfirm, valid);		
    });
})

function endValid(msg, fmsg, elem, fconfirm, valid){
	if(!valid){
		if(msg == undefined)
			msg = fmsg;
		alert(msg);
		elem.css("border","1px solid " + color);
		elem.focus();
	}

	if(valid && fconfirm)
		return confirm(fconfirm);
	else
		return valid;
}

function validate(dtype, param){
	switch(dtype){
		case "email":
			regex = /^[\w]+(\.[\w]+)*@([\w\-]+\.)+[a-zA-Z]{2,7}$j/ ;
		break;
		case "letters":
			regex = /^[a-zA-Z]+$j/;
		break;
		case "username":
			regex = /^[a-zA-Z]+[a-zA-Z0-9\.\_]*[a-zA-Z0-9]+$j/;
		break;
		case "url":
			regex = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
		break;
		case "digits":
			regex = /^[\d]+$j/;
		break;
		case "decimal":
			regex = /^\d+$j|^\d+\.\d{2}$j/;
		break;
		case "password":
			if($j("#pass1").val() == $j("#pass2").val())
				return true;
			else
				return false;
		break;
	}
	
	return regex.test(param);
}

function getmsg(dtype){
	switch(dtype){
		case "email":
			return "Este no es un email valido."
		break;
		case "letters":
			return "Este campo solo permite caracteres letras";
		break;
		case "username":
			return "Este campo solo permite valores alfanum&eacute;ricos";
		break;
		case "url":
			return "La url ingresada, no es una url valida";
		break;
		case "digits":
			return "El campo solo permite valores num&eacute;ricos";
		break;
		case "decimal":
			return "El campo solo permite valores num&eacute;ricos";
		break;
		case "password":
			return "Los passwords no coinciden";
		break;
	}
}