/**
 * Define Functions 
 *
 * @author Akshay Pratap Singh <pratapakshay0@gmail.com>
 */

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


function validateForm(){
	var name=document.forms["login_form"]["username"].value;
	if(name==null || name=="")
		return 0;

	var password=document.forms["login_form"]["password"].value;
	if(password==null || password=="")
		return 0;

	return 1;
}

function resetFields() {
	$("input").val("");
	$(".msg").html("");
}

function sendLoginDetails() {
	var username=document.forms["login_form"]["username"].value;
	var password=document.forms["login_form"]["password"].value;
	if($("#rememberMe").is(':checked')) 
	  var rememberMe=1;
	 else
	  var rememberMe=0;

	var serverPage= "php/adminlogin.php?username="+username+"&password="+password+"&rememberMe="+rememberMe;
    xmlhttp.open("GET", serverPage);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
           if(new String(xmlhttp.responseText)=="true"){
                resetFields();
                window.location.reload();
           }else{
           		$(".msg").html("* Wrong Username or Password")
           }
                
        }
    }
    xmlhttp.send(null);
}

function logoutAdmin(){
	var serverPage= "php/logout.php";
    xmlhttp.open("GET", serverPage);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
           if(new String(xmlhttp.responseText)=="true"){
                window.location.reload();
           }        
        }
    }
    xmlhttp.send(null);
}

function sendQuery(){
	var query=document.forms["query_Box"]["query"].value;
	var serverPage= "php/query.php?query="+query;
	xmlhttp.open("GET", serverPage);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
           if(new String(xmlhttp.responseText)==""){
               console.log("error");
           }else{
           		var obj = jQuery.parseJSON(xmlhttp.responseText);
           		//JSON.stringify(obj)
				console.log(obj);
           }        
        }
    }
    xmlhttp.send(null);
}