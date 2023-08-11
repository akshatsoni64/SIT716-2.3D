<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mailto = "akshat@example.com";
$mailSub = "Subject";
$mailMsg = "Message";
$mail = new PHPMailer();
$mail->IsSmtp();
$mail->SMTPDebug = 0;
// $mail->SMTPAuth = true;
// $mail->SMTPSecure = 'ssl';
$mail->Host = "localhost";
$mail->Port = 2525; // or 587
$mail->IsHTML(false);
//$mail ->Username = "asphp64@gmail.com";
//$mail ->Password = "where2Park";
$mail->SetFrom("asphp64@gmail.com");
$mail->addBCC('bcc1@example.com', 'Alex');
$mail->Subject = $mailSub;
$mail->Body = $mailMsg;
$mail->AddAddress($mailto);

if (!$mail->Send()) {
    echo "Mail Not Sent\n\n";
    echo $mail->ErrorInfo;
    echo "\n";
} else {
    echo "Mail Sent";
}
