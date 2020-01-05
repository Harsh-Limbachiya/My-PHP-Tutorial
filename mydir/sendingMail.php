<!DOCTYPE html>
<html>
<head>  
  <title>sending email</title>
</head>
<body>
  <?php

//sending plain text Email

	$to = 'nlimbachiya207@gmail.com';
	$subject = 'just a try';
	$message = 'This is a trial of mail() using php.';
	$from = 'harshimbachiya98@gmail.com';

 	
 	if(mail($to, $subject, $message)){
	 echo 'your mail is successfully sent';
	 }else{
	   echo 'unable to send the mail';
	    }

//sending html formatted mail
    
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
$message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
 ?>
</body>
</html>

