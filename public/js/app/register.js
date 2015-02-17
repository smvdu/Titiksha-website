$('#button_r').click(function(){

var name= $("#name").val();
var email=$("#email").val();
var pass=$("#password").val();
var repass=$("#repassword").val();
var phone=$('#phone').val();
var coll=$('#college').val();
	if (pass.length<6) {
		$('#register_status').html("Password is less than 6 character");
		return;
	};
	if(pass!=repass)
	{
		$('#register_status').html("Password Don't match");
		return;
	}
		
	$.ajax({
		url :'public/php/tempreg.php',
		data:'na='+encodeURIComponent(name)+'&em='+encodeURIComponent(email)+'&pas='+encodeURIComponent(pass)+'&pho='+encodeURIComponent(phone)+'&col='+encodeURIComponent(coll),
		success:function(data){
			$('#register_status').html(data);
		}
	});
});
/*
$('#button_s').click(function(){
	var email=$("#login_email").val();
	var pass=$("#login_password").val();
		$.ajax({
		url :'public/php/login.php',
		data:'email='+encodeURIComponent(email)+'&pass='+encodeURIComponent(pass),
		success:function(data){
			$('#login_status').html(data);
		}
	});
});
*/

$(document).ready(function() { 
	if(Cookie('em'))
	{
		document.getElementById("logged_in").style.display="block";
		document.getElementById("login_section").style.display="none";
	}
 });

function login_new () {
	email=document.getElementById("login_email").value;
	pass=document.getElementById("login_password").value;
	if(email!=""&&pass!="")
	{
		var xmlhttp=false;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		if(xmlhttp)
		{
			
			xmlhttp.open("GET",'public/php/login.php?email='+email+'&pass='+pass);
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
				{
						if(xmlhttp.responseText=="login")
						{
							document.getElementById("logged_in").style.display="block";
							document.getElementById("login_section").style.display="none";
						}
						else
							alert(""+xmlhttp.responseText);	
				}	
			}
			xmlhttp.send();
		}
	}
	else
	{
		alert("Entries are empty");
	}
}
function Cookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
function disable_button()
{
	if(Cookie('em'))
	{
		var xmlhttp=false;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		if(xmlhttp)
		{			
			xmlhttp.open("GET",'../php/eventRegistered.php');
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					var response=xmlhttp.responseXML;
					var error_message=response.getElementsByTagName("error")[0].childNodes[0].nodeValue;
					if(error_message=="noerror")
					{
						var msg=response.getElementsByTagName("event_id");
						for(i=0;i<msg.length;i++)
						{
							document.getElementById(''+msg[i1].getElementsByTagName("time")[0].childNodes[0].nodeValue)
						}
					}
				}		
			}
			xmlhttp.send();
		}	
	}
}

function logout(){
	var xmlhttp=false;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	if(xmlhttp)
	{
		
		xmlhttp.open("GET",'public/php/logout.php');
		xmlhttp.onreadystatechange=function()
		{
			if(xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				if(xmlhttp.responseText=="done")
					{
						document.getElementById("logged_in").style.display="none";
						document.getElementById("login_section").style.display="block";
					}
			}		
		}
		xmlhttp.send();
	}			
}