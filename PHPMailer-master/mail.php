<?php
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;       
//include_once 'dbconnect.php';

  
   
    $emails = $_REQUEST['email'];

//$result1 = mysqli_query($con, "SELECT * FROM website");

$email = array();
//$email =$emails;
//while ($row1 = mysqli_fetch_array($result1))
//
//    foreach($email as $item)
//    {
    
 
     //$mail->isSMTP();
// Set mailer to use SMTP

$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'akarthickraja1793@gmail.com';          // SMTP username
$mail->Password = 'realking'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('akarthickraja1793@gmail.com', 'raja');
//$mail->addReplyTo('qwerty12keyboard@gmail.com', '');

$mail->addAddress($emails);   // Add a recipient
$mail->isHTML(true);
$bodyContent = '<h1>Your Mail Has been Sent</h1>';
$bodyContent .= 'Hai! Welcome';
$mail->Subject= 'Welcome to Startup fire';

$mail->Body   = '<html><head>';
$mail->Body .= '<meta http-equiv="content-type" content="text/html; charset=windows-1252"></head><body>';

$mail->Body .= '<div>Thank you</div>';
$mail->Body .= '</body></html>';

if(!$mail->send()) {
  echo 'Message could not be sent.';
  echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
  echo 'success';
}
     
//}
    




?>