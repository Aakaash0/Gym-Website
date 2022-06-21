<?php

$to_email = "aakashchaurasiya07@gmail.com";
$subject = "FITNESS CLUB";
$body = "Hi, successfully logged in.";
$header = "From: aakashchaurasiya07@gmail.com";

if(mail($to_email, $subject, $body, $header)) {
	echo "Email successfully sent to $to_email...";
} else{
	echo "Email sending failed...";
}

?>