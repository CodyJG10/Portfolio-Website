<?php
    $to = 'cody@codygordon.com';
    $subject = $_POST['subject'];
    $message = $_POST['comments'];; 
    $from =  $_POST['email'];
    
    $content = "From: $from\nSubject: $subject\nMessage: $message";

    if(mail($to, $subject, $content)){
        echo 'Your mail has been sent successfully.';
    } else{
        echo 'Unable to send email. Please try again.';
    }
?>