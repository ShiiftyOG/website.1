<?php 

require_once("config.php"); //Get config file 

if ($debug) {
	//Code for debug
}

if ($system == "windows") {
	$python = 'python ';
	$file = 'C:/wamp64/www/repo/website.1/email_send.py';
} elseif ($system == "linux") {
	$python = '';
	$file = "email_send.py";
} else {
	//you're fucked
}

$a ="";
passthru("$python$file", $a);

?><!DOCTYPE html>
<meta charset="UTF-8">
<html>
	<head>
		<title>Thank you</title>
	</head>
	<body>
	<p><?php print_r ( $a ); ?></p>
		<p>Your message has been sent!<br><a href="/">Click here</a> to go back</p>
	</body>
</html>