<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

                                  
//$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'akarthickraja1793@gmail.com';                 // SMTP username
$mail->Password = 'realking';                            // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;


$mail->setFrom('akarthickraja1793@gmail.com', 'Mailer');
	
$mail->addAddress('jerome@macappstudio.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true); // Set email format to HTML
$bodyContent = '<h1>Your Mail Has been Sent</h1>';
$bodyContent .= 'Hai! Welcome';
$mail->Subject= 'Welcome to india';

$mail->Body   = '<html><head>';
$mail->Body .= '<meta http-equiv="content-type" content="text/html; charset=windows-1252"></head><body>';
$mail->Body .= '</body></html>';



/*$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';*/

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'success';
}


?>








