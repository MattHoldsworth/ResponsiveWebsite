<?php
    $recipient="mattholdsworth90@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["comments"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    if(mail($recipient, $subject, $mailBody, $senderEmail))
    echo "Email sent successfully";
    else
    echo "Sending email failed";
?>
