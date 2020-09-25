

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // $mailTo = "luxury.studio.1840@gmail.com";
    // $headers = "From: " . $mailFrom;
    // $txt = "U hebt een e-mail ontvangen van " . $name . ".\n\n" . $message;

    // mail($mailTo, $subject, $txt, $headers);
    // header("Location: ../index.php?mailsend=success");
    // echo "Uw bericht is verzonden";
    // print("<script>window.alert('Uw bericht is verzonden.');</script>");

    require_once("../mail.php");

    $mail->setFrom($mailFrom, $name);
    $mail->addAddress("luxury.studio.1840@gmail.com");
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Username = "luxury.studio.1840@gmail.com";
    $mail->Password = "luxury.studio.1840_KRISTEL";
    $mail->Port = 587;
    $mail->send();

    if ($mail == true) {
        header("Location: ../index.php?mailsend=success");
    }
}
