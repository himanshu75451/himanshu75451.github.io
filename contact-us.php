<?php
if(isset($_SERVER['REQUEST_METHOD']) && strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
	
	// Hidden fields for spam prevention
    $hidden_email = $_POST['email_address'] ?? '';
    $hidden_website = $_POST['website'] ?? '';

    // Check if the hidden fields are not empty, indicating a potential spam submission
    if (!empty($hidden_email) || !empty($hidden_website)) {
        // Reject the submission as spam
        echo "Spam submission detected!";
        exit;
    }
	
	$message = '';
	$subject = 'Himanshu Kalal : Website Inquiry';
	
	$email 		= $_POST['email'];
	$name 		= $_POST['name'];
	$message 	= $_POST['message'];
	$number 	= $_POST['number'];

	// Validate required fields
    if (empty($email) || empty($name) || empty($message) || empty($number)) {
        // Redirect to the contact form with an error parameter
        header("location:contact.html?validation_error");
        exit(); // Stop further execution
    }

    // Sanitize and validate input data
    $email      = filter_var($email, FILTER_SANITIZE_EMAIL);
    $name       = filter_var($name, FILTER_SANITIZE_STRING);
    $message    = filter_var($message, FILTER_SANITIZE_STRING);
   
    
    // Validate and sanitize phone number
    $number     = filter_var($number, FILTER_SANITIZE_STRING);
    if (!preg_match("/^[0-9]{10}$/", $number)) {
        // Redirect to the contact form with an error parameter for invalid phone number
        
        exit();
    }

	$message = '<!DOCTYPE html>
	<html>
	<head>
	<title>Email Templates</title>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<style type="text/css">
	    /* CLIENT-SPECIFIC STYLES */
	    body, table, td, a{-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
	    table, td{mso-table-lspace: 0pt; mso-table-rspace: 0pt;} /* Remove spacing between tables in Outlook 2007 and up */
	    img{-ms-interpolation-mode: bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */

	    /* RESET STYLES */
	    img{border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none;}
	    table{border-collapse: collapse !important;}
	    body{height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important;}

	    /* iOS BLUE LINKS */
	    a[x-apple-data-detectors] {
	        color: inherit !important;
	        text-decoration: none !important;
	        font-size: inherit !important;
	        font-family: inherit !important;
	        font-weight: inherit !important;
	        line-height: inherit !important;
	    }

	    /* MOBILE STYLES */
	    @media screen and (max-width: 525px) {

	        /* ALLOWS FOR FLUID TABLES */
	        .wrapper {
	          width: 100% !important;
	            max-width: 100% !important;
	        }

	        /* ADJUSTS LAYOUT OF LOGO IMAGE */
	        .logo img {
	          margin: 0 auto !important;
	        }

	        /* USE THESE CLASSES TO HIDE CONTENT ON MOBILE */
	        .mobile-hide {
	          display: none !important;
	        }

	        .img-max {
	          max-width: 100% !important;
	          width: 100% !important;
	          height: auto !important;
	        }

	        /* FULL-WIDTH TABLES */
	        .responsive-table {
	          width: 100% !important;
	        }

	        /* UTILITY CLASSES FOR ADJUSTING PADDING ON MOBILE */
	        .padding {
	          padding: 10px 5% 15px 5% !important;
	        }

	        .padding-meta {
	          padding: 30px 5% 0px 5% !important;
	          text-align: center;
	        }

	        .padding-copy {
	             padding: 10px 5% 10px 5% !important;
	          text-align: center;
	        }

	        .no-padding {
	          padding: 0 !important;
	        }

	        .section-padding {
	          padding: 50px 15px 50px 15px !important;
	        }

	        /* ADJUST BUTTONS ON MOBILE */
	        .mobile-button-container {
	            margin: 0 auto;
	            width: 100% !important;
	        }

	        .mobile-button {
	            padding: 15px !important;
	            border: 0 !important;
	            font-size: 16px !important;
	            display: block !important;
	        }

	    }

	    /* ANDROID CENTER FIX */
	    div[style*="margin: 16px 0;"] { margin: 0 !important; }
	</style>
	</head>
	<body style="margin: 0 !important; padding: 0 !important;">

	<!-- HIDDEN PREHEADER TEXT -->
	<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
	    Thank you from V2Infotech, we have now received your email and will respond to your enquiry shortly. 
	</div>

	<!-- HEADER -->
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
	    <tr>
	        <td bgcolor="#ffffff" align="center">
	            <!--[if (gte mso 9)|(IE)]>
	            <table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
	            <tr>
	            <td align="center" valign="top" width="500">
	            <![endif]-->
	            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="wrapper">
	                <tr>
	                    <td align="center" valign="top" style="padding: 15px 0;" class="logo">
	                        <a href="https://himanshu75451.github.io/" target="_blank">
	                            <img alt="Logo" src="https://himanshu75451.github.io/img/Screenshot%20(860).png" width="242" height="57" style="display: block; font-family: Helvetica, Arial, sans-serif; color: #ffffff; font-size: 16px;" border="0">
	                        </a>
	                    </td>
	                </tr>
	            </table>
	            <!--[if (gte mso 9)|(IE)]>
	            </td>
	            </tr>
	            </table>
	            <![endif]-->
	        </td>
	    </tr>
	    <tr>
	        <td bgcolor="#ffffff" align="center" style="padding: 15px;">
	            <!--[if (gte mso 9)|(IE)]>
	            <table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
	            <tr>
	            <td align="center" valign="top" width="500">
	            <![endif]-->
	            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="responsive-table">
	                <tr>
	                    <td>
	                        <!-- COPY -->
	                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
	                            <tr>
	                                <td align="center" style="font-size: 32px; font-family: Helvetica, Arial, sans-serif; color: #333333; padding-top: 30px;" class="padding-copy">Thank you for contacting us!</td>
	                            </tr>
	                            <tr>
	                                <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">Name: '.$name.'</td>
	                            </tr>
	                            <tr>
	                                <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">Email: '.$email.'</td>
	                            </tr>
								<tr>
	                                <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">Phone Number: '.$number.'</td>
	                            </tr>
								
	                            
	                        </table>
	                    </td>
	                </tr>
	            </table>
	            <!--[if (gte mso 9)|(IE)]>
	            </td>
	            </tr>
	            </table>
	            <![endif]-->
	        </td>
	    </tr>
	    <tr>
	        <td bgcolor="#ffffff" align="center" style="padding: 15px;">
	            <!--[if (gte mso 9)|(IE)]>
	            <table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
	            <tr>
	            <td align="center" valign="top" width="500">
	            <![endif]-->
	            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="responsive-table">
	                <tr>
	                    <td>
	                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
	                            <tr>
	                                <td>
	                                    <!-- COPY -->
	                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
	                                        <tr>
	                                            <td align="left" style="padding: 0 0 0 0; font-size: 16px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">Message : '.$message.'</td>
	                                        </tr>
	                                    </table>
	                                </td>
	                            </tr>
	                        </table>
	                    </td>
	                </tr>
	            </table>
	            <!--[if (gte mso 9)|(IE)]>
	            </td>
	            </tr>
	            </table>
	            <![endif]-->
	        </td>
	    </tr>
	    <tr>
	        <td bgcolor="#ffffff" align="center" style="padding: 15px;">
	            <table border="0" cellpadding="0" cellspacing="0" width="500" class="responsive-table">
	                <tr>
	                    <td>
	                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
	                            
	                            <tr>
	                                <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">Thank you for sending us your enquiry. Our team will respond to you within 24 hours using the details you have provided us with.</td>
	                            </tr>
	                            <tr>
	                                <td align="center">
	                                    <!-- BULLETPROOF BUTTON -->
	                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
	                                        <tr>
	                                            <td align="center" style="padding-top: 25px;" class="padding">
	                                                <table border="0" cellspacing="0" cellpadding="0" class="mobile-button-container">
	                                                    <tr>
	                                                        <td align="center" style="border-radius: 3px;" bgcolor="#000000"><a href="tel:9799354191" target="_blank" style="font-size: 16px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 12px 25px; border: 1px solid #000000; display: inline-block;" class="mobile-button">+91 97993 54191</a></td>
	                                                    </tr>
														
	                                                </table>
	                                            </td>
	                                        </tr>
	                                    </table>
	                                </td>
	                            </tr>
	                        </table>
	                    </td>
	                </tr>
	            </table>
	            <!--[if (gte mso 9)|(IE)]>
	            </td>
	            </tr>
	            </table>
	            <![endif]-->
	        </td>
	    </tr>
	    
	</table>	

	</body>
	</html>
	';
    if ($recaptcha_result['success']) {
        if (sendQuoteMail($email, $subject, $message)) {
            header("location:index.html");
        } else {
            header("location:index.html?not_sent");
        }
    } else {
        
        header("location:index.html");
    }
} 

function sendQuoteMail($to, $subject, $message)
{
	$headers  = "From: info@himanshu75451.github.io\r\n" .
	  "X-Mailer: php\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
	$headers .= "Cc:himanshukalal75451@gmail.com\r\n";

	if (mail($to, $subject, $message, $headers)) {
	    return true;
	} else {
	    return false;
	}
}
