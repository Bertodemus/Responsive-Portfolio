<?php 
    $to = 'roberto@robertorubet.com'; 
    $from = $_POST['userEmail']; 
    $full_name = $_POST['userName'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $full_name . " wrote the following:" . "\n\n" . $_POST['userMessage'];
    $message2 = "Here is a copy of your message " . $full_name . "\n\n" . $_POST['userMessage'];
    $message = wordwrap($message, 70, "\r\n");
    $message2 = wordwrap($message2, 70, "\r\n");

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "Mail Sent. Thank you " . $full_name . ", we will contact you shortly.";
?>