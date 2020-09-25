<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailfrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    require_once('../mail.php');

    $mail->setFrom($mailfrom, $name);
    $mail->addAddress("luxury.studio.1840@gmail.com");
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'luxury.studio.1840@gmail.com';
    $mail->Password = 'luxury.studio.1840_KRISTEL';
    $mail->Port = 587;
    $mail->send();

    if ($mail == true) {
        header("Location: ../index.php?mailsend=success");
    }
}
