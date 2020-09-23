<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('phpmailer/src/Exception.php');
require_once('phpmailer/src/PHPMailer.php');
require_once('phpmailer/src/SMTP.php');


$mail = new PHPMailer(TRUE);
/* ... */

$mail->setFrom("sandy.ielegems@gmail.com", "Luxury Studio");
$mail->addAddress($to);
$mail->Subject = "Password Reset";
$mail->Body = $message;
/* Tells PHPMailer to use SMTP. */
$mail->isSMTP();

/* SMTP server address. */
$mail->Host = 'smtp.gmail.com';

/* Use SMTP authentication. */
$mail->SMTPAuth = TRUE;

/* Set the encryption system. */
$mail->SMTPSecure = 'tls';

/* SMTP authentication username. */
$mail->Username = 'sandy.ielegems@gmail.com';

/* SMTP authentication password. */
$mail->Password = '79.S8nDy_69';

/* Set the SMTP port. */
$mail->Port = 587;

/* Finally send the mail. */
$mail->send();
