<?php 
if(isset($_POST["submit"])) {
		// check if the name has been entered
	if(!$_POST['name']) {
		$errName = 'Please enter your name';
	}

	// check if email has been entered and is valid
	if(!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errEmail = 'Please enter a valid email address';
	}

	// check if the message has been entered
	if(!$_POST['message']) {
		$errMessage = 'Please enter your message';
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$from = 'Demo Contact Form';
	$to = 'blessing.omotayo15@yahoo.ca';
	$subject = 'Message from contact Demo';

	$body = "From: $name\n E-Mail: $email\n Message: $message";




	// If there are no errors, send the email
	if (!$errName && !$errEmail && !$errMessage) {
		if (mail(to, subject, body)) {
			$result = '<div>Thank you! I will be in touch.</div>';
			echo "Thank you!";
		}
		else {
			$result = '<div>Sorry, there was an error sending your message. Please try again later.</div>';
		}
	}
}
 ?>
