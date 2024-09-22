<?php

$to = "bronabinn@gmail.com";
$subject = "Hello! This is a test email sent by PHP";
$from = "nabinpoudel2061@gmail.com";
$message = "Hello! this is the mail from php";
if(mail($to,$subject,$message))
{
    echo "Mail Sent.";
}


?>

