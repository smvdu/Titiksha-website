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

/*************  Password Strength variables ************************/
var strPassword;  
var charPassword;  
var complexity = $("#complexity");  
var minPasswordLength = 5;  
var baseScore = 0, score = 0;  
  
var num = {};  
num.Excess = 0;  
num.Upper = 0;  
num.Numbers = 0;  
num.Symbols = 0;  
  
var bonus = {};  
bonus.Excess = 3;  
bonus.Upper = 4;  
bonus.Numbers = 5;  
bonus.Symbols = 5;  
bonus.Combo = 0;   
bonus.FlatLower = 0;  
bonus.FlatNumber = 0;  

/*******************************************************************/
function  checkEmail(email){
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
	if( !(email.match(mailformat)) )
    	return false;

    return true;
}
function checkEmailRegistered(email) {
    var serverPage= "php/emailRegistered.php?email="+email;
    xmlhttp.open("GET", serverPage);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
           if(new String(xmlhttp.responseText)=="true"){
                resetFields();
                var warningMessage="* This email-id is already registered.";
                $(".msg-Box").addClass("md-show warning").css("display","block");
                $(".msg-Box > .msg-content").html(warningMessage);
                $(".msg-Box > .msg-close").css("display","block");
           }
                
        }
    }
    xmlhttp.send(null);
}
function validateRegisterForm(){
	var name=document.forms["reg_form"]["name"].value;
	if(name==null || name=="")
		return 0;

	var email=document.forms["reg_form"]["email"].value;
	if(email==null || email=="")
		return 0;

	var college=document.forms["reg_form"]["college"].value;
	if(college==null || college=="")
		return 0;

	var contact=document.forms["reg_form"]["contact"].value;
	if(contact==null || contact=="")
		return 0;

	var password=document.forms["reg_form"]["password"].value;
	if(password==null || password=="")
		return 0;

	var repassword=document.forms["reg_form"]["repassword"].value;
	if(repassword==null || repassword=="")
		return 0;
	
	return 1;
}


function sendRegisterFormDetails() {
	var name=document.forms["reg_form"]["name"].value;
	var email=document.forms["reg_form"]["email"].value;
	var college=document.forms["reg_form"]["college"].value;
	var year=document.forms["reg_form"]["year"].value;
	var contact=document.forms["reg_form"]["contact"].value;
	var gender=$("#reg_form input[type='radio']:checked").val();
	var password=document.forms["reg_form"]["password"].value;

	var serverPage= "php/registerUser.php?name="+toTitleCase(name)+"&email="+email.toLowerCase()+"&college="+toTitleCase(college)+"&year="+year+"&contact="+contact+"&gender="+gender+"&password="+password;
	xmlhttp.open("GET", serverPage);
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if(new String(xmlhttp.responseText)=="true" || new String(xmlhttp.responseText)==""  ){
                resetFields();
                var confirmMessage="You have been successfully registered !.<br> An email has been sent on your registered email-id.";
                $(".msg-Box").addClass("md-show confirmation").css("display","block");
                $(".msg-Box > .msg-content").html(confirmMessage);
                $(".msg-Box > .msg-close").css("display","block");
            }else{
                resetFields();
                var warningMessage="Sorry , Server does not respond .<br> Please try again later.";
                $(".msg-Box").addClass("md-show warning").css("display","block");
                $(".msg-Box > .msg-content").html(warningMessage);
                $(".msg-Box > .msg-close").css("display","block");
            }    
		}
	}
	xmlhttp.send(null);
}

function toTitleCase(str)
{
    return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}

function resetFields() {
	$("form input").val("");
    $("#email_warning").fadeOut(100).html("");
    $("#password_warning").fadeOut(100).html("");
    $("#complexity").fadeOut(100).html("");
}

function checkPasswordStrength()  
{  
	init();

    if (charPassword.length >= minPasswordLength)  
    {  
        baseScore = 50;   
        analyzeString();      
        calcComplexity();         
    }  
    else  
    {  
        baseScore = 0;  
    }  
      
    outputResult();  
}  
function init()  
{  
    strPassword= $("#reg_form input[name='password']").val();  
    charPassword = strPassword.split("");  
          
    num.Excess = 0;  
    num.Upper = 0;  
    num.Numbers = 0;  
    num.Symbols = 0;  
    bonus.Combo = 0;   
    bonus.FlatLower = 0;  
    bonus.FlatNumber = 0;  
    baseScore = 0;  
    score =0;  
}  
function analyzeString ()  
{     
    for (i=0; i<charPassword.length;i++)  
    {  
        if (charPassword[i].match(/[A-Z]/g)) {num.Upper++;}  
        if (charPassword[i].match(/[0-9]/g)) {num.Numbers++;}  
        if (charPassword[i].match(/(.*[!,@,#,$,%,^,&,*,?,_,~])/)) {num.Symbols++;}   
    }  
      
    num.Excess = charPassword.length - minPasswordLength;  
      
    if (num.Upper && num.Numbers && num.Symbols)  
    {  
        bonus.Combo = 25;   
    }  
  
    else if ((num.Upper && num.Numbers) || (num.Upper && num.Symbols) || (num.Numbers && num.Symbols))  
    {  
        bonus.Combo = 15;   
    }  
      
    if (strPassword.match(/^[\sa-z]+$/))  
    {   
        bonus.FlatLower = -15;  
    }  
      
    if (strPassword.match(/^[\s0-9]+$/))  
    {   
        bonus.FlatNumber = -35;  
    }  
}  

function calcComplexity()  
{  
    score = baseScore + (num.Excess*bonus.Excess) + (num.Upper*bonus.Upper) + (num.Numbers*bonus.Numbers) +   
(num.Symbols*bonus.Symbols) + bonus.Combo + bonus.FlatLower + bonus.FlatNumber;   
}  

function outputResult()  
{  
    if ($("#reg_form input[name='password']").val()== "")  
    {   
        complexity.html("Please enter password").addClass("default");  
    }  
    else if (charPassword.length < minPasswordLength)  
    {  
        complexity.html("At least " + minPasswordLength+ " characters please!").addClass("weak");  
    }  
    else if (score<50)  
    {  
        complexity.html("Weak!").addClass("weak");  
    }  
    else if (score>=50 && score<75)  
    {  
        complexity.html("Average!").addClass("strong");  
    }  
    else if (score>=75 && score<100)  
    {  
        complexity.html("Strong!").addClass("stronger");  
    }  
    else if (score>=100)  
    {  
        complexity.html("Secure!").addClass("strongest");  
    }  
} 

function matchPassword() {
    var pass1=$("#reg_form input[name='password']").val();
    var pass2=$("#reg_form input[name='repassword']").val();
    if(pass1==pass2){
        $("#password_warning").css("display","none").html("");
    }else{
        $("#password_warning").css("display","block").html("* Password don't match");
    }
 } 


function validateLoginForm(){
    var email=document.forms["login_form"]["email"].value;
    if(email==null || email=="")
        return 0;

    var password=document.forms["login_form"]["password"].value;
    if(password==null || password=="")
        return 0;

    return 1;
}

function sendLoginDetails(email,password){

    var serverPage= "php/loginUser.php?email="+email+"&password="+password;
    xmlhttp.open("GET", serverPage);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if(new String(xmlhttp.responseText)=="true"){
                resetFields();
                var confirmMessage="Please wait while the page is being reloaded ...";
                $(".msg-Box").addClass("md-show loading").css("display","block");
                $(".msg-Box > .msg-content").html(confirmMessage);
                $(".msg-Box > .msg-close").css("display","none");
                window.location.reload();
                
            }else{
                resetFields();
                $("#warning").fadeIn(100).html("* Wrong email or password");
            }    
        }
    }
    xmlhttp.send(null);

}

function logoutUser() {
    var serverPage= "php/logout.php";
    xmlhttp.open("GET", serverPage);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
           if(new String(xmlhttp.responseText)=="true"){
                window.location.reload();
           }        
        }else if(xmlhttp.readyState < 4 ){
            var confirmMessage="Please wait while the page is being reloaded ...";
            $(".msg-Box").addClass("md-show loading").css("display","block");
            $(".msg-Box > .msg-content").html(confirmMessage);
            $(".msg-Box > .msg-close").css("display","none");
        }
    }
    xmlhttp.send(null);
}


/****************** Branch wise event code ***********************/

var branchCode={ 1:"MEGA" ,11:"All Izz Not Well",12:"Robo-Matrix",13:"Electro-Avtaar",14:"Innovatia Returns",15:"TechRoadies Reloaded", 2:"CSE" , 21:"Ad-Veb",22:"Debuggage",23:"Python-Geek",24:"Kill'em",25:"Lui-Commando",26:"Jumble-Mumble",27:"Online Treasure Hunt",28:"Binary Battles",3:"MECH" ,31:"Design Your Dreams",32:"Conclave",33:"The Machinist",34:"Rush To Assemble-Engine",35:"Cluedo",36:"Future-Tech",37:"Baja De Innovacion",4:"ECE" ,41:"Wavemania",42:"Electro-Quiz",43:"EMO-Express22",44:"Circuit-Bug",45:"Micro-Controller Coding",46:"Circuit-Electronique",47:"Electro Trade",48:"Electo-Maze",5:"ARCH" ,51:"Architectural Symposium",52:"Art Installation",53:"Digi-Art",54:"Face-Painting",55:"Caricature-Making",56:"Poster-Making",57:"Logo-Design",58:"Landscaping",6:"IBT" ,61:"Bio-Tech Quiz",62:"Spell-Correctly",63:"Jumble-Words",64:"Complementation",65:"Show Your Memory",66:"Structure Modelling",67:"Puzzle",7:"GAME",71:"FIFA 11",72:"Counter-Strike",73:"NFS-Most Wanted"};

/****************************************************************/

function checkEventRegistered(branchId,eventId){
   
    var serverPage= "php/eventRegistered.php?branchId="+branchId+"&eventId="+eventId;
    xmlhttp.open("GET", serverPage);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
           if(new String(xmlhttp.responseText)=="true"){
                showEventMessage(" You have already registered for this event");
            }else{ 
                registerEvent(branchId,eventId);
            }
        }
    }
    xmlhttp.send(null);
}

function registerEvent(branchId,eventId){
    var serverPage= "php/registerEvent.php?branchId="+branchId+"&eventId="+eventId;
    xmlhttp.open("GET", serverPage);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
           if(new String(xmlhttp.responseText)=="true"){
                showEventMessage(" You have successfully registered for this event.");
                var bId=Number(branchId);
                var eId=Number(eventId);
                var branchName=branchCode[bId];
                var eventName=branchCode[eId];
                console.log(bId+"-"+eId);
                console.log(branchName+"---"+eventName);
                var selectedId="#reg_"+branchName.toLowerCase();
                $(selectedId).append("<p>"+eventName+"</p>");
           }else{
                showEventMessage(" Sorry , Server Problem please try again.");
           }        
        }
    }
    xmlhttp.send(null);
}

function showEventMessage(content){
    $("#event-message").html(content).fadeIn(800);
    setTimeout(function() {
      $("#event-message").fadeOut(1000,function(){
        $("#event-message").html("");
      });
    }, 2000);
}

function pullUserPersonelData(){
    var serverPage= "php/userPersonelData.php";
    xmlhttp.open("GET", serverPage);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if(new String(xmlhttp.responseText)==""){
               console.log("Oops,Something goes wrong");
            }else{
                var data = jQuery.parseJSON(xmlhttp.responseText);
                JSON.stringify(data);

                $("#user-name").html(toTitleCase(data[0].name));
                $("#user-email-id").html(data[0].email_id.toLowerCase());
                $("#user-college-name").html(toTitleCase(data[0].college_name));
                $("#user-year-of-study").html(data[0].year_of_study);
                $("#user-gender").html(data[0].gender);
                $("#user-phone-number").html(data[0].phone_number);

                pullUserEventData();
            } 
        }
    }
    xmlhttp.send(null);
}

function pullUserEventData(){
    var serverPage= "php/userEventData.php";
    xmlhttp.open("GET", serverPage);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if(new String(xmlhttp.responseText)==""){
               console.log("Oops,Something goes wrong");
            }else{
                var data = jQuery.parseJSON(xmlhttp.responseText);
                JSON.stringify(data);

                $.each(data,function(i,item){
                    var branchId=Number(item.branch_id);
                    var eventId=Number(item.event_id);
                    var branchName=branchCode[branchId];
                    var eventName=branchCode[eventId];
                    var selectedId="#reg_"+branchName.toLowerCase();
                    $(selectedId).append("<p>"+eventName+"</p>");
                });

            }  
        }
    }
    xmlhttp.send(null);
}

function sendNewMobileNumber(mobileNumber) {
    var serverPage= "php/updateMobileNumber.php?mobileNumber="+mobileNumber;
    xmlhttp.open("GET", serverPage);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if(new String(xmlhttp.responseText)=="false"){
                console.log("Oops,Something goes wrong");
            }  
        }
    }
    xmlhttp.send(null);
}
