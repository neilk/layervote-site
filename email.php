<?php
if (!isset($_POST['email'])) {
	exit;
}

$signup = preg_replace("([\r\n])", "", $_POST['email']);

$headerInjection = "/(content-type|bcc:|cc:)/i";
if (preg_match($headerInjection, $signup)) {
	exit;
}

$recipients = file('../layervote-recipients.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$subject = "LayerVote signup - $signup";

// compose headers
$headers = "From: webmaster@layervote.com\r\n";
$headers .= "Reply-To: webmaster@layervote.com\r\n";
$headers .= "X-Mailer: PHP/".phpversion();

// compose message
$message = "Email: $signup";
$message = wordwrap($message, 70);

// send email
foreach($recipients as $to) {
	mail($to, $subject, $message, $headers);
}

header( 'Location: http://layervote.com/success.html' ) ;
?>
