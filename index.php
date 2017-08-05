<?php require_once("config.php"); //Get config file ?><!DOCTYPE html>
<meta charset="UTF-8"> 
<html>
	<head>
		<title><?php echo $title;?></title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/loader.css">
		<link rel="stylesheet" type="text/css" href="style/mobi.css" media="screen and (max-aspect-ratio: 1/1), screen and (aspect-ratio: 1/1)">
		<link rel="stylesheet" type="text/css" href="style/pc.css" media="screen and (min-aspect-ratio: 1/1)">
	</head>
	<body onload="">

		<div id="debug"><!-- Debug won't be here in final version --></div>

		<div id="loader">
			<!-- This is for when the website loads. This then turns invisable after load -->
			<h1><?php echo $loadingMessage;?></h1>
			<div id="fishSpace">
				<!-- This is for the orbs or fish or something to spawn -->
			</div>
			<script type="text/javascript" src="loader.js"></script>
			<script type="text/javascript">
				genFish(40); 	//Now we await WebAssembly to be standerd in order to be able to have 1000 fish @ 60fps 4k. 
								//(but then again effort to C++/JavaScript with Unity for the 3d web)
				tick();			//Tick once to get random positions
			</script>
		</div>

		<div id="mainWrapper">
			<!-- Start of main content -->
			<div class="spanWrapper">
				<h1><?php echo $title;?></h1>
			</div>

			<!-- The logo for the website. Also remember to add alt -->
			<img src="style/imgs/logo.bmp" alt="<?php echo $title;?>">

			<!-- Self explanatory -->
			<div class="spanWrapper">
				<h3>About us</h3>
				<p><?php echo $aboutUs; ?></p>
			</div>

			<!-- Self explanatory -->
			<div class="spawWrapper">
				<h3>Contact us</h3>
				<form action="send.php" method="POST" id="contactForm">
					<input type="" name="">
					<input type="button" onclick="document.getElementById('contactForm').send();">
				</form>
			</div>

			<!-- Self explanatory -->
			<div id="footer">
				<h6>Copyright <?php echo date("Y");?><br></h6>
			</div>

		</div>
	</body>
</html>