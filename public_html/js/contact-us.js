function validateForm(){
	var isValid = true;

	$('.required').each(function(){
		isValid = ValidateField($(this));

		if (!isValid){
                    return false;
		}
	});

	return isValid;		
	}

function IsValidEmail(email) {
	var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}

function IsValidPhoneNumber(phoneNumber) {
	var regex = /^\D+$/;
	return !regex.test(phoneNumber);
}

function ClearFieldValidation(field){
	field.removeClass("alert-success");	
	field.removeClass("alert-danger");

	var fieldId = field.attr("Id");
	$("#" + fieldId + "_validation").hide();
	$("#" + fieldId + "_success").hide();
}

function ValidateField(field){
	var fieldId = field.attr("Id");
	var fieldValue = field.val();

	if(fieldId == "inputEmail" && !IsValidEmail(fieldValue)){        		
		field.addClass("alert-danger");
		field.focus();			
		$("#" + fieldId + "_validation").show();
		return false;   			
	}
	else if(fieldId == "inputPhone" && !IsValidPhoneNumber(fieldValue)){        		
		field.addClass("alert-danger");
		field.focus();		
		$("#" + fieldId + "_validation").show();
		return false;   			
	}
	else if(fieldValue != ""){        		
		field.addClass("alert-success");        						
		$("#" + fieldId + "_success").show();
		return true;
	}
	else{    			        		
		field.addClass("alert-danger");				
		$("#" + fieldId + "_validation").show(); 
		return false;
	}
}

$(document).ready(function(){   
    $('.required').blur(function(){        	
    	ClearFieldValidation($(this));
    	ValidateField($(this));
    })
});