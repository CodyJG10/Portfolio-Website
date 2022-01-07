<?php
    $to = 'cody@codygordon.com';
    $name = $_POST['name'];
    $message = $_POST['comments'];; 
    $from =  $_POST['email'];
    
    $content = "From: $from\nName: $name\nMessage: $message";

    if(mail($to, $subject, $content)){
        echo 'Your mail has been sent successfully.';
    } else{
        echo 'Unable to send email. Please try again.';
    }
?>