<?php
$mailto = "akshat@example.com";

$mailSub = "Subject";
$mailMsg = "Message";

$headers[] = 'From: Admin <admin@example.com>';
$headers[] = 'Bcc: soni@example.com';

$mail = mail($mailto, $mailSub, $mailMsg, implode("\r\n", $headers));
echo $mail."\n";
if (!$mail) {
    echo "Mail Not Sent";
} else {
    echo "Mail Sent";
}
echo "\n\n";