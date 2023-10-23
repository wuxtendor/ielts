<?php
require_once 'C:\home\OSPanel\vendor\autoload.php';

$email = $data['email'];
function sendVerificationMail($email, $token)
{
    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
        ->setUsername('sapa1nura@gmail.com')
        ->setPassword('kutpanov198');

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    $body = "<!DOCTYPE html>
<html lang=\"en\">
<head>
	<meta charset=\"UTF-8\">
<title>Verify your email </title>
</head>
<body>
 <div class=\"wrapper\">
 <p>
	Thank you for signing up on our website. Please click on the link below to verify your email
 </p>
    <a href=\"http://localhost/phptest/interval.php?token=$token\">Verify your email</a>
</body>
</html>";
// Create a message
    $message = (new Swift_Message('Email confirmation'))
        ->setFrom(['sapa1nura@gmail.com' => 'Nura'])
        ->setTo($email)
        ->setBody($body, 'text/html');;

    // Send the message
    $result = $mailer->send($message);
}




    function sendPasswordRecoveryEmail($email, $token)
    {
        // Create the Transport
        $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
            ->setUsername('sapa1nura@gmail.com')
            ->setPassword('kutpanov198');

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);

        $body = "<!DOCTYPE html>
<html lang=\"en\">
<head>
	<meta charset=\"UTF-8\">
<title>Recover your password</title>
</head>
<body>
 <div class=\"wrapper\">
 <p>
	In order to recover your password follow the link bellow.
 </p>
    <a href=\"http://localhost/phptest/interval-password.php?password-token=$token\">Verify your email</a>
</body>
</html>";


        $message = (new Swift_Message('Password recovery'))
            ->setFrom(['sapa1nura@gmail.com' => 'Nura'])
            ->setTo($email)
            ->setBody($body, 'text/html');

// Send the message
        $result = $mailer->send($message);
    }
  ?>