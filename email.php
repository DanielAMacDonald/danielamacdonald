<?php
echo "Made it here2!";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "email";
$mail->Password   = "password";

$mail->IsHTML(true);
$mail->AddAddress("danielamacd@gmail.com", "recipient-name");
$mail->SetFrom("danielamacd@gmail.com", $_REQUEST['name']);
$mail->Subject = $_REQUEST['subject'];
$content = $_REQUEST['message'];

$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  echo "Email sent successfully";
}
header("Location: index.html");
?>