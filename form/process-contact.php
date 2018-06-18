<?php

$to = "m.muzamilejaz@gmail.com";  // Your email here
$from = $_REQUEST['email'];
$name = $_REQUEST['name'];
//$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];
$headers = "From: $from \r\n";

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$subject = "Contact Form from Cleaning Service";

$fields = array();
$fields{"name"} = "Name";
$fields{"email"} = "Email";
//$fields{"phone"} = "Phone";
$fields{"message"} = "Message";

$body = "Here is what was sent: <br/><br/>";
foreach($fields as $a => $b){   
	//$body .= sprintf("%20s:%s\r\n",$b,$_REQUEST[$a]);
	$tempStr = "<b>" . $b . ":</b> " . $_REQUEST[$a] . "<br/><br/>";
	$body .= $tempStr;
}
$send = mail($to, $subject, $body, $headers);

?>
