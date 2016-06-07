<?php

	$to = "info@nhit.ca";
	$subject = "B2B Web Lead: ".$_POST['FirstName']." ".$_POST['LastName'];
	$headers = "From: NH Web Leads <noreply@nhit.ca> \r\n";
	$headers .= "Cc: jeff@cavera.ca";

	$message = "You've received a new lead! Information contained below, should be entered into Dynamics CRM manually.\r\n\r\n\r\n";

	foreach($_POST as $key=>$value){
		$message .= $key.': '.urldecode($value)."\r\n\r\n";
	}



	if ( mail($to, $subject, $message, $headers) ) {
	    $success = true;
    } else {
	    $success = false;
	}

	header("Location: ../thank-you.html");
?>
