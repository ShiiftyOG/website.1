var loaderID = "loader"

function remove() {
	document.getElementById(loaderID).style.opacity = 0; 	//Set opacity to 0.
	document.getElementById(loaderID).style.zIndex = -999;  //Make sure the element is sent right to the very back of the document.
}