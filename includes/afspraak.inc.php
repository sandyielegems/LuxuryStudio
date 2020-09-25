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
    var_dump($_POST);

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
    $mail->Body = $date . " om " . $hour . " bericht: " . $message;

    $mail->send();

    if ($mail == true) {
        header("Location: ../index.php?appsend=success");
    }
}


// $mail->Body = $date . " om " . ;
//     $mail->Body = $hour;
//     // $mail->Body = $form_message;
//     $mail->Body = $message;


// $message_sent = false;

// if (isset($_POST['submit-app']) && $_POST['submit-app'] != '') {

//     if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

//         $firstname = $_POST['firstname'];
//         $lastname = $_POST['lastname'];
//         $tel = $_POST['tel'];
//         $mailfrom = $_POST['mail'];
//         $date = $_POST['date'];
//         $hour = $_POST['hour'];
//         // radio buttons > hoe in de mail?
//         $behandeling = $_POST['behandeling'];
//         $message = $_POST['message'];

//         require_once('mail.php');

//         $mail->isSMTP();
//         $mail->Host = 'smtp.gmail.com';
//         $mail->SMTPAuth = TRUE;
//         $mail->SMTPSecure = 'tls';
//         $mail->Username = 'luxury.studio.1840@gmail.com';
//         $mail->Password = 'luxury.studio.1840_KRISTEL';
//         $mail->Port = 587;

//         $mail->setFrom($mailfrom, $firstname, $lastname);
//         $mail->addReplyTo($mailfrom);
//         $mail->addAddress('luxury.studio.1840@gmail.com');
//         $mail->Subject = 'Afspraak aanvraag';
//         $mail->Body = $date;
//         $mail->Body = $hour;
//         $mail->Body = $behandeling;
//         $mail->Body = $message;

//         $mail->send();

//         if ($mail == true) {
//             header("Location: ../index.php?appsend=success");
//         }
//     }
// }
