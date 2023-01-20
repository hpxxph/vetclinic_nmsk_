<?php

$name = &_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from  = 'vetclini@outbook.com'; 

$email_subject = 'New form Submission'

$email_body = "User Name: $name.\n ".
                "User Email : $visitor_email.\n ".
                    "Subject : $subject.\n ".
                        "User Message : $message.\n ".

$to = 'santanazar123@icloud.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");

?> 