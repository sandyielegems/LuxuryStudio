<?php

if (isset($_POST['submit-app'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $tel = $_POST['tel'];
    $mailfrom = $_POST['mail'];
    $date = $_POST['date'];
    $hour = $_POST['hour'];
    // radio buttons > hoe in de mail?
    // $form_message = $_POST['optradio1'];
    // $form_message = $_POST['optradio2'];
    // $form_message = $_POST['optradio3'];
    $message = $_POST['message'];

    require_once('mail.php');

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'luxury.studio.1840@gmail.com';
    $mail->Password = 'luxury.studio.1840_KRISTEL';
    $mail->Port = 587;

    $mail->setFrom($mailfrom, $firstname, $lastname);
    $mail->addReplyTo($mailfrom);
    $mail->addAddress('luxury.studio.1840@gmail.com');
    $mail->addCC($mailfrom);
    $mail->Subject = 'Afspraak aanvraag';
    $mail->Body = $firstname . " " . $lastname . "\r\ntelefoonummer: " . $tel . "\r\ne-mailadres: " . $mailfrom . "\r\nvraagt een afspraak aan op " . $date . " om " . $hour . "\r\n" . "Behandeling: " . $message . "\r\n\r\nOPGELET: dit is een aanvraag, uw afspraak is pas definitief na bevestiging van Luxury Studio.";

    $mail->send();

    if ($mail == true) {
        header("Location: ../index.php?appsend=success");
    }
}
