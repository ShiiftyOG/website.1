<?php 

require_once("config.php"); //Get config file 

if ($debug) {
	//Code for debug
}

if ($system == "windows") {
	//Configure like this
	$python = 'python ';
	$file = 'C:/wamp64/www/repo/website.1/email_send.py';
} elseif ($system == "linux") {
	$python = './';
	$file = "email_send.py";
} else {
	//you're fucked
}

$cmd = "$python"."$file '".$_POST['message']."' '".$_POST['email']."' '$yourGmail' '$yourPassword' '$sendTo'";

$a = exec($cmd);

if ( $a == "" && $system == "linux" ) {
	exec("dos2unix $file");
	$a = exec($cmd);
}

?><!DOCTYPE html>
<meta charset="UTF-8">
<html>
	<head>
		<title>Thank you</title>
	</head>
	<body>
	<p>	Output: <?php print_r ( $a ); ?>
		Input: 	<?php echo ( "$python$file" ); ?>
	</p>
		<p>Your message has been sent!<br><a href="/">Click here</a> to go back</p>
	</body>
</html>