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
        	$(".loading-bar").fadeOut(100);
           if(new String(xmlhttp.responseText)==""){
               alert("Oops,Something goes wrong");
           }else{
           		$(".queryResult").show();
           		resetQueryBox();
           		var data = jQuery.parseJSON(xmlhttp.responseText);
           		JSON.stringify(data);
           		printData(data);
           }        
        }else if(xmlhttp.readyState < 4 && xmlhttp.status == 200 ){
        	$(".loading-bar").fadIn(100);
        }
    }
    xmlhttp.send(null);
}

function resetQueryBox() {
	$("#head-content").html("");
	$("#mytable").html("");
}
function printData(data){
	var len="  "+data.length;
	$("#head-content").html("Total Number of Records:<strong>"+len+"</strong><br>");
	var row=0;

	// print the title of table
	var newRow = $('<tr>').appendTo("#mytable");
	$.each(data,function(i,item){
		++row;
		$.each(item,function(k,content){
			if(row==1){
				var title=k.replace(/[_]/g," ");
				title=toTitleCase(title);
				if(title!="Password")
					$("<th>"+title+"</th>").appendTo(newRow);
			}	
		});	
	});


	// print the content of table
	$.each(data,function(i,item){
		newRow =$('<tr>').appendTo("#mytable");
		$.each(item,function(k,content){
			if(toTitleCase(k)!="Password")
			$("<td>"+content+"</td>").appendTo(newRow );
		});
	});
}

function toTitleCase(str)
{
    return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}

function printPage(id)
{
   var html="<html>\n<head>\n<link rel='stylesheet' href='css/print.css'>\n</head>";
   html+="<body>\n<div class='container'>\n<div class='header'>Titiksha 2k13</div>\n<div class='content'>";
   html+= document.getElementById(id).innerHTML;
   html+="</div></div></body></html>";

   var printWin = window.open('','_blank','left=0,top=0,width=1000,height=600,toolbar=0,scrollbars=1,status=0');
   printWin.document.write(html);
   printWin.document.close();
   printWin.focus();
   printWin.print();
   //printWin.close();
}