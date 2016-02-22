<?php
ob_start();

	if(isset($_POST['email'])) {

		$email_to = "hello@ethicalswitch.com";
		$email_subject = "New Switcher Details";

		function died($error) {
	 
			echo "Sorry, there was a problem with the form:<br /><br /> ";
			echo $error."<br /><br />";
			echo "Please press 'back' on your borowser to back to the form.<br /><br />";
			die();
		}
		 
		if(!isset($_POST['charity-choice']) || !isset($_POST['email'])) {
		 
			died('Please make sure you selected a charity and entered a valid email address.');        
		}

		 
		$email_from 	= $_POST['email']; 						// required
		$charity_choice = $_POST['charity-choice']; 			// required
		$opt_in 		= $_POST['opt-in']; 					// not required
		 
		$error_message = "";
		 
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
		 
			if(!preg_match($email_exp,$email_from)) {
			 
				$error_message .= "The Email Address you entered doesn't seem to be valid!.<br />";
			 }
		 
		  	if(strlen($error_message) > 0 || $email_from = 0) {
		 
				died($error_message);
		 	}
		 
		function clean_string($string) {
	 
		  $bad = array("content-type","bcc:","to:","cc:","href");
		  return str_replace($bad,"",$string);
		}
		 
		$email_message = clean_string($_POST['email']) . "\n" . $_POST['charity-choice'] . "\n" . $_POST['opt-in'] . "\nCompany: Powershop";
		 
		$headers = 	'From: hello@ethicalswitch.com' . "\r\n".
					'Reply-To: hello@ethicalswitch.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();
		 
		@mail($email_to, $email_subject, $email_message, $headers);  
	}

	function redirectTo($newLocation) {
    
      header("Location:" . $newLocation);
      exit;
    }

    redirectTo("http://www.powershop.com.au/ethicalswitch/");
    exit;

   ob_end_flush();

?>