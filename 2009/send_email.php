<?php
$register_univ_name = $_POST['univ_name'];
$register_email = $_POST['email'];
$register_phone = $_POST['phone'];
$register_events = $_POST['events'];
$register_coordinator = $_POST['coordinator'];
$register_lodging = $_POST['lodging'];
$register_no_of_participants = $_POST['participants'];
$register_comments = $_POST['query'];


if( $register_univ_name == true )
{
	$sender = $register_email;
	$receiver = "titiksha@smvdu.ac.in";
	$client_ip = $_SERVER['REMOTE_ADDR'];
//***********************************************************	
	$email_body = 
	"University: $register_univ_name \n
	 Email: $sender \n\n
	 
	 Contact: $register_coordinator ( $register_contact ) \n\n
	 
	 Events: \n\n
	 
	 $register_events \n\n
	 
	 Lodging requirement: $register_lodging \n
	 No. of Participants: $register_no_of_participants \n\n
	 
	 Query: $register_comments \n
	 
	 IP: $client_ip \n\n
	 
	 Titiksha 2009";		
	
//****************************************************	
	$extra = "From: $sender\r\n" . "Reply-To: $sender \r\n" . "X-Mailer: PHP/" . phpversion();

	
if( mail( $receiver, "Registration Form - $register_univ_name", $email_body, $extra ) ) 
	{
		echo "success=yes";
	}
	else
	{
		echo "success=no";
	}
}
?>