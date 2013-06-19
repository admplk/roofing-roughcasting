<?php
$title = "Contact Us";
$pageId = 3;
$cssFiles = array("/css/common.css", "/css/contact-us.css");


/*
 * Define the auto-load function for classes
 */
function __autoload($class){    
//    print_r("loading class " . $class . "<br />");
    if (preg_match('/\\\\/', $class)){
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    }
    
    $filename = "components". DIRECTORY_SEPARATOR . $class . ".php";
    
    if (fileExists($filename)){
        require_once $filename;
    }else if (fileExists($class.".php")){
        require_once $class.".php";
    }
}

/*
 * Checks whether a certain file exists.
 */
function fileExists($file)
{       
    $ps = explode(PATH_SEPARATOR, ini_get('include_path'));
    foreach($ps as $path)
    {    
        if(file_exists($path.DIRECTORY_SEPARATOR.$file)) return true;
    }
    
    if(file_exists($file)) return true;
    return false;
}

/*
 * Set form parameters and send email if requested
 */
$_emailSent = false;
$_emailError = false;

$_userMessage = "Sorry, the message could not be sent.";
$_firstName = Convert::ArrayValueToString($_POST, "firstName");
$_surname = Convert::ArrayValueToString($_POST, "surname");
$_fromEmail = Convert::ArrayValueToEmail($_POST, "email");
$_phoneNumber = Convert::ArrayValueToString($_POST, "phone");
$_subject = Convert::ArrayValueToString($_POST, "subject");
$_message = Convert::ArrayValueToString($_POST, "question");

if(isset($_POST['formSubmit'])){	
    if($_firstName == ""){
    	$_emailError = true;
    	$_userMessage .= "<br />Please enter your first name.";
    }
    if($_surname == ""){
    	$_emailError = true;
    	$_userMessage .= "<br />Please enter your surname.";
    }
    if($_fromEmail == ""){
    	$_emailError = true;
    	$_userMessage .= "<br />Please enter your email address.";
    }
    if($_phoneNumber == ""){
    	$_emailError = true;
    	$_userMessage .= "<br />Please enter a contact number.";
    }
    if($_subject == ""){
    	$_emailError = true;
    	$_userMessage .= "<br />Please select a subject/topic.";
    }
    if($_message == ""){
    	$_emailError = true;
    	$_userMessage .= "<br />Please enter a question or message.";
    }

    if(!$_emailError){
    	try{    		
    		$to = 'mail@roofingandroughcasting.com';
            $subject = "$_subject Enquiry from $_firstName $_surname";

            $message = 
            "<html>
                <head>
                    <title>$subject</title>
                </head>
                <body>
                    <table style=\"border-collapse: collapse; text-align: center; margin-left: auto; margin-right: auto; margin-top: 7px; margin-bottom: 7px; width:90%;\">
                        <tr>
                            <th style=\"background-color: black; color: white; padding: 10px; border: 1px solid black;\" colspan=\"2\">
                                You have received a message from $_firstName $_surname
                            </th>
                        </tr>
                        <tr><td style=\"padding:10px;text-align:right;\">Name:</td><td style=\"padding:10px;text-align:left;\">$_firstName $_surname</td></tr>
                        <tr><td style=\"padding:10px;text-align:right;\">Email</td><td style=\"padding:10px;text-align:left\">$_fromEmail</td></tr>
                        <tr><td style=\"padding:10px;text-align:right;\">Phone Number</td><td style=\"padding:10px;text-align:left\">$_phoneNumber</td></tr>
                        <tr><td style=\"padding:10px;text-align:right;\">Subject</td><td style=\"padding:10px;text-align:left\">$_subject Enquiry</td></tr>
                        <tr><td style=\"padding:10px;text-align:right;\">Message</td><td style=\"padding:10px;text-align:left\">$_message</td></tr>
                        <tr>
                            <td style=\"padding-top:30px;\" colspan=\"2\">This email has been auto-generated.  Do not reply to this email.</td>
                        </tr>
                    </table>
                </body>
            </html>";

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
            $headers .= 'From: Roofing And Roughcasting <mail@roofingandroughcasting.com>' . "\r\n";
            $headers .= "Reply-To: mail@roofingandroughcasting.com\r\n";
            $headers .= "Return-Path: mail@roofingandroughcasting.com\r\n";

            mail($to,$subject,$message,$headers);
    		$_emailSent = true;
    	}
    	catch (Exception $e){
            $_emailError = true;
            $_userMessage += "<br />Please phone or email me concerning your question/query.  Thanks.";
        }
    }    
}

require_once('header.php');
?>