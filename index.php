<?php require_once("config.php"); //Get config file?><!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<html>
	<head>
		<title><?php echo $title;?></title>
		<link rel="stylesheet" type="text/css" href="style/loader.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/mobi.css" media="screen and (max-aspect-ratio: 1/1), screen and (aspect-ratio: 1/1)">
		<link rel="stylesheet" type="text/css" href="style/pc.css" media="screen and (min-aspect-ratio: 1/1)">
		<script type="text/javascript" src="main.js"></script>
	</head>
	<body onload="start();" z-index=0>

		<div id="loader" style="z-index: 100;">
			<!-- This is for when the website loads. This then turns invisable after load -->
			<h1><?php echo $loadingMessage;?></h1>
			<div id="fishSpace">
				<!-- This is for the orbs or fish or something to spawn -->
			</div>
			<script type="text/javascript" src="loader.js"></script>
			<script type="text/javascript">
				genFish(40); 	//Now we await WebAssembly to be standerd in order to be able to have 1000 fish @ 60fps 4k. 
								//(but then again, no effort to C++/JavaScript with Unity for the 3d web)
				tick();			//Tick once to get random positions at the start
			</script>
		</div>

		<div id="popOutWrapper">
			<div id="popOut" style="top:<?php echo ($size/2);?>px;">
				<img id="logo" src="style/imgs/logo.png" alt="<?php echo $title;?>" width="<?php echo $size;?>px">
			</div>
		</div>

		<div id="mainWrapper">
			<!-- Start of picture. Has to pop out slightly out top-->

			<div id="preWrapper" style="height:<?php echo ($size/2);?>px;"><!-- Size --></div>

			<!-- Start of main content -->
			<div class="spanWrapper">
				<h1><?php echo $title;?></h1>
			</div>

			<!-- Self explanatory -->
			<div class="spanWrapper" id="aboutUs">
				<h3>About us</h3>
				<p><?php echo $aboutUs;?></p><br>
			</div>

			<!-- fill out form to contact plus extra space -->
			<div id="bottom">
				<div class="spanWrapper" id="contact">
					<h3>Contact us</h3>
					<form action="send.php" method="POST" id="contactForm">
						<p>Message:</p>
						<textarea name="message" rows="5"></textarea>
						<p>Your Email or phone number:</p>
						<input type="text" name="email" rows="1"></textarea><br>
						<!-- TODO: Made sure that the email/number is valid with at least JS -->
						<input type="submit" value="Send" >
					</form>
				</div>

				<div class="spanWrapper" id="extra">
					<h3>Contact Details</h3>
					<p><?php echo $contact;?></p>
				</div>

			</div>

			<!-- Self explanatory -->
			<div id="footer">
				<h6>Copyright <?php echo date("Y");?></h6>
			</div>

		</div>

	</body>
</html>