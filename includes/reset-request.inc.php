<?php
if (isset($_POST["reset-request-submit"])) {

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "http://localhost/php/LuxuryStudio/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expires = date("U") + 1800000;

    require 'dbh.inc.php';

    $userEmail = $_POST["email"];

    $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Er is een fout opgetreden";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pwdreset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Er is een fout opgetreden";
        exit();
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    $to = $userEmail;
    $subject = "Reset uw wachtwoord voor Luxury Studio";
    $message = "We hebben een wachtwoord reset aanvraag ontvangen. De link vindt u hieronder. Indien u dit niet aangevraagd hebt, gelieve deze email te negeren.\r\n";
    $message .= "Hier is de reset link: \r\n";
    $message .= $url;
    $headers = "From: Luxury Studio luxury.studio.1840@gmail.com\r\n";
    $headers .= "Reply-To: luxury.studio.1840@gmail.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    require_once('mail.php');

    $mail->setFrom("luxury.studio.1840@gmail.com");
    $mail->addAddress($userEmail, $name);
    $mail->Subject = $subject;
    $mail->Body = $headers . "\r\n" . $message;
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Username = "luxury.studio.1840@gmail.com";
    $mail->Password = "luxury.studio.1840_KRISTEL";
    $mail->Port = 587;
    $mail->send();

    if ($mail == true) {
        header("Location: ../reset-password.php?reset=success");
    }
} else {
    header("Location: ../index.php");
}
