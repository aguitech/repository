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
$(function(){
    $("form").submit(function(){
    	valid = true;
		fmsg = $(this).attr("msg");
		color = $(this).attr("color");
		fconfirm = $(this).attr("fconfirm");

		if(color == undefined)
			color = "red";

		$(this)
		.find("input[@required='true'], textarea[@required='true']")
		.each(function() {
			msg = $(this).attr("msg");
			dtype = $(this).attr("dtype");

			if($(this).val().length == 0){
				valid = false;
				elem = $(this);
				return false;
			}
			
			if(dtype != undefined && !(validate(dtype,$(this).val()))){
				if(msg == undefined)
					msg = getmsg(dtype);
				valid = false;
				elem = $(this);
				return false;
			}
		});

		if(!valid)
			return endValid(msg, fmsg, elem, fconfirm, valid);
		
		$(this)
		.find("select[@required='true']")
		.each(function() {
			if($(this).val().length == 0 || $(this).val() == "0"){
				msg = $(this).attr("msg");
				valid = false;
				elem = $(this);
				return false;
			}
		});
		
		if(!valid)
			return endValid(msg, fmsg, elem, fconfirm, valid);		
		
		var checked = 0;
		var reviewcheckbox = false;		
		
		$(this)
		.find("input[@type=checkbox][@required='true']")
		.each(function() {
			reviewcheckbox = true;
			
			if($(this).is(':checked'))
				checked++;
			else {
				msg = $(this).attr("msg");
				elem = $(this);
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
			regex = /^[\w]+(\.[\w]+)*@([\w\-]+\.)+[a-zA-Z]{2,7}$/ ;
		break;
		case "letters":
			regex = /^[a-zA-Z]+$/;
		break;
		case "username":
			regex = /^[a-zA-Z]+[a-zA-Z0-9\.\_]*[a-zA-Z0-9]+$/;
		break;
		case "url":
			regex = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
		break;
		case "digits":
			regex = /^[\d]+$/;
		break;
		case "decimal":
			regex = /^\d+$|^\d+\.\d{2}$/;
		break;
		case "password":
			if($("#pass1").val() == $("#pass2").val())
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
			return "Este campo solo permite valores alfanumericos";
		break;
		case "url":
			return "La url ingresada, no es una url valida";
		break;
		case "digits":
			return "Este campo solo permite valores numericos";
		break;
		case "decimal":
			return "Este campo solo permite valores numéricos";
		break;
		case "password":
			return "Los passwords no coinciden";
		break;
	}
}