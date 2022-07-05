<?php
/* 
# error log 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
require '../PHPMailer-master/PHPMailerAutoload.php'; // path to php mailer
$mail = new PHPMailer(true);

$subject = "sample";
$message = ''; 
try{
$mail->IsSMTP();
$mail->isHTML(true);
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";

$mail->Host = ""; //smtp host
$mail->Port = '465'; // smpt port
$mail->Username =""; // email user name
$mail->Password =""; // email password
$mail->SetFrom(''); // sent email goes here 

$mail->AddAddress("sample@sample.com", "sample");
$mail->Subject = $subject;
$message .= 'hello World!';// your message will go here

$mail->Body = $message;
if($mail->Send()) {}
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
