<?php 
if(isset($_POST['submit'])){
    $to = "roberto@robertorubet.com"; 
    $from = $_POST['userEmail']; 
    $full_name = $_POST['userName'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $full_name . " wrote the following:" . "\n\n" . $_POST['userMessage'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['userMessage'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";

    }
?>