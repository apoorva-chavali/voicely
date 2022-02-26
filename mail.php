<?php
$to='apoorvachavali@gmail.com';
$subject='test email';
$message="hi this mail is sent from localhost";
$headers="From:voicelypresc@gmail.com";
$mail_sent=mail($to,$subject,$message,$headers);
if($mail_sent==true)
echo "mail sent";
else
echo "error";
?>