//Script for loading images and others.

var loaderID = "loader" 	//Loader Div
var fhSwn = "fishSpace"
var amount = 40;			//How many fish??

function remove() {
	//Removes the loading element
	document.getElementById(loaderID).style.opacity = 0; 	//Set opacity to 0.
	document.getElementById(loaderID).style.zIndex = -999;  //Make sure the element is sent right to the very back of the document.
	document.getElementById(fhSwn).innerHTML = ""; 			//Clear any fish in the sea
	amount = 0;												//No fish left (will stop cycle)
}

function genNum(too) {
	//Generates a random number between 0 and the number "too". 
	//Then rounds the random number down to an int and returns it.
	return Math.floor( (Math.random() * too ) );
}

function conv(nu) {
	//"If you say anything about JavaScript code standards, I'm going to slit your throat" -C3ypt1c.
	//Temporary hack.
	if (nu == 15) return "f";
	if (nu == 14) return "e";
	if (nu == 13) return "d";
	if (nu == 12) return "c";
	if (nu == 11) return "b";
	if (nu == 10) return "a";
	return nu.toString();
}

function genFish(fish) {
	var htmlGen = "";
	for (var i = fish - 1; i >= 0; i--) {
		colorR = conv (genNum(10)+5);  		//Generate random colours for each fish and convert to hex
		colorG = conv (genNum(10)+5);
		colorB = conv (genNum(10)+5);
		color = "#"+colorR+colorG+colorB; 	//Will make more compact in future

		htmlGen = htmlGen + "<div style='background-color:"+color+";' class='fish' id='fish" + i.toString() + "'></div>"; 	
		//Make each fish it's own div
	}
	document.getElementById(fhSwn).innerHTML = htmlGen; 	//Move all the fish into the space
	htmlGen = ""; 											//Free some memory.
}

function tick() {
	for (var i = 0; i < amount; i++) {
		colorR = conv (genNum(10)+5);  		//Generate random colours for each fish and convert to hex
		colorG = conv (genNum(10)+5);		//Will proabaly make it's own function in future
		colorB = conv (genNum(10)+5);
		color = "#"+colorR+colorG+colorB; 	//Will make more compact in future

		fsz = document.getElementById("fish"+i.toString());
		fsz.style.top = Math.floor( Math.random() * 99 ).toString() + "%";
		fsz.style.left = Math.floor( Math.random() * 99 ).toString() + "%";
		fsz.style.backgroundColor = color;
	}
}

genFish(amount); //Generate the fish
tick()

 //Do this until the body has loaded 
setInterval(function(){tick();}, 2000);