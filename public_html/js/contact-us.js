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
	field.parent().parent().removeClass("success");
	field.parent().parent().removeClass("warning");
	field.parent().parent().removeClass("error");

	var fieldId = field.attr("Id");
	$("#" + fieldId + "_validation").hide();
	$("#" + fieldId + "_success").hide();
}

function ValidateField(field){
	var fieldId = field.attr("Id");
	var fieldValue = field.val();

	if(fieldId == "inputEmail" && !IsValidEmail(fieldValue)){        		
		field.parent().parent().addClass("error");
		field.focus();
		$("#" + fieldId + "_validation").addClass("error");
		$("#" + fieldId + "_validation").html("invalid email");
		$("#" + fieldId + "_validation").show();
		return false;   			
	}
	else if(fieldId == "inputPhone" && !IsValidPhoneNumber(fieldValue)){        		
		field.parent().parent().addClass("error");
		field.focus();
		$("#" + fieldId + "_validation").addClass("error");
		$("#" + fieldId + "_validation").html("invalid");
		$("#" + fieldId + "_validation").show();
		return false;   			
	}
	else if(fieldValue != ""){        		
		field.parent().parent().addClass("success");        						
		$("#" + fieldId + "_success").show();
		return true;
	}
	else{    			        		
		field.parent().parent().addClass("error");
		$("#" + fieldId + "_validation").addClass("error");
		$("#" + fieldId + "_validation").html("*required");
		$("#" + fieldId + "_validation").show(); 
		return false;
	}
}

$(document).ready(function(){
    FixContentBoxLengths();

    $('.required').blur(function(){        	
    	ClearFieldValidation($(this));
    	ValidateField($(this));
    })
});

function FixContentBoxLengths(){
    var content1 = $('#contactDetails');
    var content2 = $('#emailForm');
    if(content1.height() > content2.height()){
        content2.height(content1.height());
    }else{
        content1.height(content2.height());
    }
}