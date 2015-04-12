<?php
require_once ('contact-us_CODE.php');
?>

<body>	
    <?php require_once('navigation.php'); ?>

    <header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
                            <header class="page-header">
                                    <h1 class="page-title">Contact us</h1>
                            </header>
                            
                    <?php if($_emailError){ ?>
                            <div class="alert alert-danger">
                                <p><?php echo $_userMessage; ?></p>        			
                            </div>
                    <?php } else if($_emailSent){ ?>
                            <div class="alert alert-success">
                                <p>Thanks for your message <?php echo $_firstName; ?>.</p>
                                <p>I'll get back to you as soon as possible with a response.  Please feel free to call me if the matter is urgent.</p>
                            </div>
                    <?php }else{ ?>
                            <p>
                                Free roof check? Looking for a quote or estimate? Get in touch! Give us a call, email or use the below form.  We'd love to hear from you.
                            </p>
                    <?php } ?> 
                            <br />
                            <form id="questionForm" action="contact-us" method="post" onsubmit="return validateForm();">
                                <div id="inputFirstName_validation" style="display:none;" class="alert alert-danger">Please enter your name</div>
                                <div id="inputEmail_validation" style="display:none;" class="alert alert-danger">Please enter a valid email address</div>
                                <div id="inputPhone_validation" style="display:none;" class="alert alert-danger">Please enter a valid phone number</div>
                                <div id="inputSubject_validation" style="display:none;" class="alert alert-danger">Please select a topic or subject</div>
                                <div id="inputMessage_validation" style="display:none;" class="alert alert-danger">Please enter a message</div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input class="form-control required" id="inputFirstName" name="firstName" type="text" placeholder="Name" value="<?php echo $_firstName; ?>">
                                    </div>
                                    <br class="visible-xs" />
                                    <div class="col-sm-4">
                                        <input class="form-control required" id="inputEmail" name="email" type="text" placeholder="Email" value="<?php echo $_fromEmail; ?>" >
                                    </div>
                                    <br class="visible-xs" />
                                    <div class="col-sm-4">
                                        <input class="form-control required" type="text" id="inputPhone" name="phone" placeholder="Phone" value="<?php echo $_phoneNumber; ?>" >
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-sm-12">
                                        <select id="inputSubject" class="form-control required" name="subject">
                                            <option value="">Please select a topic or subject...</option>
                                            <option value="Quote" <?php if($_subject == "Quote"){echo "selected=\"selected\"";} ?>>Free Quote or Roof Check</option>
                                            <option value="Work" <?php if($_subject == "Work"){echo "selected=\"selected\"";} ?>>Work Enquiry</option>
                                            <option value="Urgent Call Out" <?php if($_subject == "Urgent Call Out"){echo "selected=\"selected\"";} ?>>Urgent Call Out</option>
                                            <option value="General Question" <?php if($_subject == "General Question"){echo "selected=\"selected\"";} ?>>General / Other</option>
                                        </select>
                                    </div>
                                </div> 
                                <br />
                                <div class="row">
                                    <div class="col-sm-12">
                                        <textarea placeholder="Type your message here..." id="inputMessage" name="question" class="form-control required" rows="9"><?php echo $_message; ?></textarea>
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-sm-offset-6 col-sm-6 text-right">
                                        <input class="btn btn-primary" id="formSubmit" name="formSubmit" type="submit" value="Send message">
                                    </div>
                                </div>
                            </form>
			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
                                        <img src="/img/logo-1-resized.png" alt="Grant Allan Roofing and Roughcasting" height="100">
                                    
					<h4>Address</h4>
					<address>
                                            <strong>Grant Allan Roofing and Roughcasting</strong><br>
                                            30 Moubray Grove<br />
                                            South Queensferry<br />
                                            EH30 9PB			  
                                        </address>                                        
                                        
					<h4>Phone:</h4>
					<address>
                                            <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> 0131 319 2153<br />
                                            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span> 07841 640 097<br />
					</address>
                                        
                                        <h4>Email:</h4>
                                        <address>
                                            <a href="mailto:#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> mail@roofingandroughcasting.com</a><br />
                                        </address>                                        
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
        
<?php
require_once('footer.php');
?>

<script type="text/javascript" src="js/contact-us.js"></script>

<?php if($_emailSent){ ?>
<script type="text/javascript">	
    $(document).ready(function(){        
        $(".required").attr("disabled", "disabled");
        $("#formSubmit").hide();
    });
</script>
<?php } ?>
</body>
</html>