<?php
	
	$url = 'http://www1.campuslogin.com/Contacts/Web/ImportContactData.aspx?nvc=Y&orgid=240&maillistid=240001&CampusID=24005&istest=N';
	
	foreach($_POST as $key=>$value){
		$fields_string .= $key.'='.urlencode($value).'&';
	}
	rtrim($fields_string, '&');
	echo $url.$fields_string;
	
			
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST, count($fields));
	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
	
	$result = curl_exec($ch);
	if (curl_errno($ch)) {
	    $success = false;
    } else {
	    $success = true;
	}
	curl_close($ch);
	
	if ($success){
		header("Location: ../thank-you.html");
	}
?>