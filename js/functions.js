//Create a boolean variable to check for a valid IE instance.
var xmlhttp = false;

//Check if we are using IE.
try {
	//If the javascript version is greater than 5.
	xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
} catch (e) {

	//If not, then use the older active x object.
	try {
		//If we are using IE.
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		//Else we must be using a non-IE browser.
		xmlhttp = false;
	}
}

//If we are using a non-IE browser, create a JavaScript instance of the object.
if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
	xmlhttp = new XMLHttpRequest();
}


function 