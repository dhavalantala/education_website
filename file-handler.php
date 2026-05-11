<?php
$name = $POST['name'];
$visitor_email = $POST['email'];
$subject = $POST['subject'];
$message = $POST['message'];

$email_from = 'info@gmail.com';

$email_subject = 'New from Submission';

$email_body = "User Name: $name .\n".
                "User Email: $visitor_email .\n".
                "Subject : $subject .\n".
                "Message : $message .\n";

$to = "antaladhaval02.adGmail.com"

$headers = "Form: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");

?>