<?php
$to      = 'gaurav.neupane.gn@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: nyaupane.gaurav@gmail.com' . "\r\n" .
    'Reply-To: nyaupane.gaurav@gmail.com'. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>