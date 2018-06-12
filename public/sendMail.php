<?php
$to      = 'oneline1821@gmail.com';
$subject = 'Mensaje de prueba';
$message = 'hello Moto';
$headers = 'From: kiramauco@gmail.com.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 