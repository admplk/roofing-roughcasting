<?php
require_once ('contact-us_CODE.php');
?>

<!--Page content START-->
<div class="row">
    <div class="span6" style="margin-top: 10px;">
        <div id="contactDetails" class="content-holder contact-details">
        	<div>
	        	<p>Please feel free to get in touch via any of the methods below, or by using the form opposite.</p>
	        	<p>I look forward to hearing from you.</p>
	        	<p>Thanks,</br>Grant</p>
        	</div>
        	
        	<div id="addressDetails">
	        	<address>
				  <strong>Grant Allan Roofing and Roughcasting</strong><br>
				  30 Moubray Grove<br>
				  South Queensferry<br>
				  EH30 9PB<br>			  
				</address>
			</div>
			<div style="margin-top: 20px; padding-left:20px;text-align: center;">
				<img src="/img/phone-icon.gif" alt="tel number" style="height: 20px" />
            	0131 319 2153
			</div>
			<div style="margin-top: 20px; padding-left:25px;text-align: center;">
				<img src="/img/mobile-icon.gif" alt="mobile number" style="height: 20px" />
            	07841 640 097
			</div>
			<div style="margin-top: 20px; padding-left:20px;padding-bottom:20px;text-align: center;">
				<img src="/img/mail-icon.gif" alt="email" style="height: 20px" />
            	<a href="mailto:mail@roofingandroughcasting.com">mail@roofingandroughcasting.com</a>
			</div>
        </div>
    </div>
    <div class="span6" style="margin-top: 10px;">
        <div id="emailForm" class="content-holder contact-details">
        	<?php if($_emailError){ ?>
        		<div class="alert alert-error">
        			<p><?php echo $_userMessage; ?></p>        			
        		</div>
        	<?php } else if($_emailSent){ ?>
        		<div class="alert alert-success">
        			<p>Thanks for your message <?php echo $_firstName; ?>.</p>
        			<p>I'll get back to you as soon as possible with a response.  Please feel free to call me if the matter is urgent.</p>
        		</div>
        	<?php }else{ ?>
	        	<div>
		        	<p>Please enter your contact details and question/query below:</p>	        	
	        	</div>
        	<?php } ?>        	
        	<div style="width:90%; margin-left:auto;margin-right:auto;">
	    		<form class="form-horizontal" id="questionForm" action="contact-us" method="post" onsubmit="return validateForm();">
					<div class="control-group">
				    	<label class="control-label" for="inputFirstName">First Name</label>
					    <div class="controls">
				      		<input type="text" id="inputFirstName" class="required" name="firstName" placeholder="First Name" value="<?php echo $_firstName; ?>" />
				      		<span id="inputFirstName_validation" style="display:none;"></span>
				      		<img src="/img/tickIcon.gif" id="inputFirstName_success" alt="success" class="tick-icon" style="display:none;" />
					    </div>
				  	</div>
				  	<div class="control-group">
				    	<label class="control-label" for="inputSurname">Surname</label>
					    <div class="controls">
				      		<input type="text" id="inputSurname" class="required" name="surname" placeholder="Surname" value="<?php echo $_surname; ?>" />
				      		<span id="inputSurname_validation" style="display:none;"></span>
				      		<img src="/img/tickIcon.gif" id="inputSurname_success" alt="success" class="tick-icon" style="display:none;" />
					    </div>
				  	</div>
			  		<div class="control-group">
				    	<label class="control-label" for="inputEmail">Email</label>
				    	<div class="controls">
				      		<input type="text" id="inputEmail" class="required" name="email" placeholder="e.g. JoeBlogs@email.com" value="<?php echo $_fromEmail; ?>" />
				      		<span id="inputEmail_validation" style="display:none;"></span>
				      		<img src="/img/tickIcon.gif" id="inputEmail_success" alt="success" class="tick-icon" style="display:none;" />
				    	</div>
				  	</div>
				  	<div class="control-group">
				    	<label class="control-label" for="inputPhone">Phone Number</label>
				    	<div class="controls">
				      		<input type="text" id="inputPhone" class="required" name="phone" placeholder="Phone/Mobile Number" value="<?php echo $_phoneNumber; ?>" />
				      		<span id="inputPhone_validation" style="display:none;"></span>
				      		<img src="/img/tickIcon.gif" id="inputPhone_success" alt="success" class="tick-icon" style="display:none;" />
				    	</div>
				  	</div>
				  	<div class="control-group">
				    	<label class="control-label" for="inputSubject">Subject/Topic</label>
				    	<div class="controls">
				      		<select id="inputSubject" class="required" name="subject">
				      			<option value="">Please select a subject...</option>
				      			<option value="Quote" <?php if($_subject == "Quote"){echo "selected=\"selected\"";} ?>>Free Quote</option>
				      			<option value="Work" <?php if($_subject == "Work"){echo "selected=\"selected\"";} ?>>Work Enquiry</option>
				      			<option value="Urgent Call Out" <?php if($_subject == "Urgent Call Out"){echo "selected=\"selected\"";} ?>>Urgent Call Out</option>
				      			<option value="General Question" <?php if($_subject == "General Question"){echo "selected=\"selected\"";} ?>>General / Other</option>
				      		</select>
				      		<span id="inputSubject_validation" style="display:none;"></span>
				      		<img src="/img/tickIcon.gif" id="inputSubject_success" alt="success" class="tick-icon" style="display:none;" />
				    	</div>
				  	</div>
				  	<div class="control-group">
				    	<label class="control-label" for="inputMessage">Message</label>
				    	<div class="controls">
				    		<textarea id="inputMessage" class="required" name="question" placeholder="Please enter your question or message here..." rows="5"><?php echo $_message; ?></textarea>
				    		<span id="inputMessage_validation" style="display:none;"></span>
				    		<img src="/img/tickIcon.gif" id="inputMessage_success" alt="success" class="tick-icon" style="display:none;" />
				    	</div>
				  	</div>
				  	<?php if(!$_emailSent){ ?>
				  	<div class="form-actions">
				    	<div class="controls">
				      		<input type="submit" name="formSubmit" class="btn btn-success" value="Send"/>
				    	</div>
				  	</div>
				  	<?php } ?>
				</form>
			</div>			
        </div>
    </div>
</div>
<!--Page content END-->

<div style="clear: both;"></div>

<script type="text/javascript" src="js/contact-us.js"></script>

<?php if($_emailSent){ ?>
<script type="text/javascript">	
    $(document).ready(function(){        
        $(".required").attr("disabled", "disabled");
    });
</script>
<?php } ?>

<?php
require_once('footer.php');
?>