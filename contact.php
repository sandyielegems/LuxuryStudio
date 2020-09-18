<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['massage'];

    $mailTo = "sandy.ielegems@gmail.com";
    $headers = "From: " . $mailFrom;
    $txt = "U hebt een e-mail ontvangen van " . $name . ".\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}
