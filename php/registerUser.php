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

	$query=mysql_query($sql) or die(mysql_error());



	  $to = $email; //Send email to our user
	  $subject = 'Signup | Verification'; //// Give the email a subject 
	  $message = '

	  Thanks for signing up!
	  Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.


	  Please click this link to activate your account:
	  http://www.yourwebsite.com/verify.php?email='.$form['email'].'&hash='.$form['hash'].'

	  '; // Our message above including the link
	  
	  $headers = 'From:noreply@yourwebsite.com' . "\r\n"; // Set from headers
	 // mail($to, $subject, $message, $headers); // Send the email


	  mysql_close();
?>