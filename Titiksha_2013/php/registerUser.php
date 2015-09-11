<?php

/**
 * Registration Page
 *
 * @author Akshay Pratap Singh <pratapakshay0@gmail.com>
 */
	
	require_once('connect.php');

	$name=mysql_real_escape_string($_GET['name']);
	$email=mysql_real_escape_string($_GET['email']);
	$college=mysql_real_escape_string($_GET['college']);
	$year=mysql_real_escape_string($_GET['year']);
	$contact=mysql_real_escape_string($_GET['contact']);
	$gender=mysql_real_escape_string($_GET['gender']);
	$password=mysql_real_escape_string($_GET['password']);
	$password=md5($password);

	$sql="INSERT INTO registered_users(`name`,`email_id`,`college_name`,`year_of_study`,`phone_number`,`gender`,`password`)
			VALUES(
			'".$name."',
			'".$email."',
			'".$college."',
			'".$year."',
			'".$contact."',
			'".$gender."',
			'".$password."')";

	$query=mysql_query($sql) ;
	if(!mysql_error()){



	  $to = $email; //Send email to our user
	  $subject = 'Titiksha | Verification'; //// Give the email a subject 
	  $message = '

	  Thanks for signing up!
	  Your account has been created. You shall be notified about the updates of Titiksha.
	  Login with your email and password for event registration.

	  For any Queries, Contact: Megha Sharma, +91-9086-118089

	  P.S:- In case you forget your password then mail us at titiksha2k13@gmail.com.

	  Regards,
	  Titiksha Organizing Team



	  '; // Our message above including the link
	  
	  $headers = 'From:noreply@titiksha.smvdu.net.in' . "\r\n"; // Set from headers
	 mail($to, $subject, $message, $headers); // Send the email
	 if(!mysql_error())
	 	echo 'true';
	 else
	 	echo 'falseA';
	}else{
		echo 'falseB';
	}
	  mysql_close();
?>