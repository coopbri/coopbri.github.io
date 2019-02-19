<?php
  $webmaster_email = "brian@briancooper.online";

  $contact_page = "contact.html";
  $error_page = "form-error.html";
  $thankyou_page = "form-success.html";

  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $phone = $_REQUEST['phone'];
  $message = $_REQUEST['message'];

  $msg =
  "First Name: " . $name . "\r\n" .
  "Email: " . $email . "\r\n" .
  "Phone: " . $phone . "\r\n" .
  "Comments: " . $message ;

  /*
  check for email injection (specifically carriage returns)
  this is to minimize injection spam
  */
  function isInjected($str) {
  	$injections = array('(\n+)',
  	'(\r+)',
  	'(\t+)',
  	'(%0A+)',
  	'(%0D+)',
  	'(%08+)',
  	'(%09+)'
  	);
  	$inject = join('|', $injections);
  	$inject = "/$inject/i";
  	if(preg_match($inject,$str)) {
  		return true;
  	}
  	else {
  		return false;
  	}
  }

  // redirect user to the feedback form if they try to directly access it
  if (!isset($_REQUEST['email'])) {
  header("Location: $contact_page");
  }
  // if email injection is detected, redirect to the error page
  elseif (isInjected($email) || isInjected($name)  || isInjected($message) || isInjected($phone)) {
    header("Location: $error_page");
  }
  // send email
  else {
  	mail("$webmaster_email", "Feedback Form Results", $msg);
  	header("Location: $thankyou_page");
  }
?>
