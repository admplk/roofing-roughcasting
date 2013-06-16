<?php
//require_once ('includes/initialisePage.php');
$title = "Contact Us";
$pageId = 3;
$cssFiles = array("/css/common.css", "/css/contact-us.css");
require_once('header.php');
?>

<!--Page content START-->
<div class="row">
    <div class="span6" style="margin-top: 10px;">
        <div class="content-holder contact-details">
        	<div>
	        	<p>Please feel free to get in touch via any of the methods below, or by using the form opposite.</p>
	        	<p>I look forward to hearing from you.</p>
	        	<p>Thanks,</br>Grant</p>
        	</div>
        	
        	<div style="margin-top: 20px; padding-left:20px;text-align: center;">
	        	<address>
				  <strong>Grant Allan Roofing and Roughcasting</strong><br>
				  30 Moubray Grove<br>
				  South QueensFerry<br>
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
        <div class="content-holder contact-details">
        	<div>
	        	<p>Please enter your contact details and question/query below:</p>	        	
        	</div>
        	<div style="width:90%; margin-left:auto;margin-right:auto;">
	    		<form class="form-horizontal">
					<div class="control-group">
				    	<label class="control-label" for="inputFirstName">First Name</label>
					    <div class="controls">
				      		<input type="text" id="inputFirstName" placeholder="First Name">
					    </div>
				  	</div>
				  	<div class="control-group">
				    	<label class="control-label" for="inputSurname">Surname</label>
					    <div class="controls">
				      		<input type="text" id="inputSurname" placeholder="Surname">
					    </div>
				  	</div>
			  		<div class="control-group">
				    	<label class="control-label" for="inputEmail">Email</label>
				    	<div class="controls">
				      		<input type="text" id="inputEmail" placeholder="e.g. JoeBlogs@email.com">
				    	</div>
				  	</div>
				  	<div class="control-group">
				    	<label class="control-label" for="inputPhone">Phone Number</label>
				    	<div class="controls">
				      		<input type="text" id="inputPhone" placeholder="Phone/Mobile Number">
				    	</div>
				  	</div>
				  	<div class="control-group">
				    	<div class="controls" style="text-align:right">			      
				      		<button type="submit" class="btn btn-success">Send</button>
				    	</div>
				  	</div>
				</form>
			</div>
        </div>
    </div>
</div>
<!--Page content END-->

<div style="clear: both;"></div>
<?php
require_once('footer.php');
?>