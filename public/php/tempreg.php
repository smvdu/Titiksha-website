<?php
try{

	include("connect.php");
	if(isset($_REQUEST["na"])&&isset($_REQUEST["em"])&&isset($_REQUEST["pas"])&&isset($_REQUEST["pho"])&&isset($_REQUEST["col"]))
	{
		if($_REQUEST["na"]!="" && $_REQUEST["em"]!="" && $_REQUEST["pas"]!="" && $_REQUEST["pho"]!=""&&$_REQUEST["col"])
		{
			$confirm_code=md5(uniqid(rand()));
			$query="Insert into tempaccount (confirm_code,username,password,email,phone,college)values('".$confirm_code."','".strip_tags($_REQUEST["na"])."','".md5(strip_tags($_REQUEST["pas"]))."','".strip_tags($_REQUEST["em"])."','".strip_tags($_REQUEST["pho"])."','".strip_tags($_REQUEST["col"])."')";
                    $result=mysql_query($query)
                    or die("Invalid Entry");
                  echo "Confirmation code has been sent to your email address";
                  	try
                  	{
                        $message="Thankyou for registering in Titksha2k14<br/> your confirmation code is:<br/> http://titiksha.smvdu.net.in/reg.php?em=".$_REQUEST["em"]."&conf=".$confirm_code."<br/> This confirmation code will be valid for only 24 hours";
                  		//mail($_REQUEST["em"],"Confirmation Email : Titksha2k14",$message,"From: Titksha2k14 SMVDU");
						
						require 'PHPMailerAutoload.php';
 
						$mail = new PHPMailer;
						 
						$mail->isSMTP();                                      // Set mailer to use SMTP
						$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
						$mail->SMTPAuth = true;                               // Enable SMTP authentication
						$mail->Username = '';                   // SMTP username
						$mail->Password = '';               // SMTP password
						$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
						$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
						$mail->setFrom('', '');     //Set who the message is to be sent from
						//$mail->addReplyTo('amandeeptheviper@gmail.com', 'First Last');  //Set an alternative reply-to address
						$mail->addAddress($_REQUEST["em"], $_REQUEST["na"]);  // Add a recipient
						$mail->addAddress('');               // Name is optional
						$mail->addCC('');
						$mail->addBCC('');
						$mail->WordWrap = 400;                                 // Set word wrap to 50 characters
						//`$mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
						//$mail->addAttachment('20725.jpg', 'new.jpg'); // Optional name
						$mail->isHTML(true);                                  // Set email format to HTML
						 
						$mail->Subject = 'Confirmation Email : Titksha2k14';
						$mail->Body    = $message;
						$mail->AltBody = $message;
						 
						//Read an HTML message body from an external file, convert referenced images to embedded,
						//convert HTML into a basic plain-text alternative body
						//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
						 
						if(!$mail->send()) {
						   //echo 'Message could not be sent.';
						  // echo 'Mailer Error: ' . $mail->ErrorInfo;
						   exit;
						}
						 
						//echo 'Message has been sent';

					}
					catch(Exception $en)
					{ 
						echo "";
					}
		
		}
			else
			echo "Some Fields are empty";
	}
}
catch(Exception $e)
{
	echo "Invalid Entry";
}
mysql_close($mysql);
?>