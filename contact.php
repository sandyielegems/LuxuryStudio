<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "sandy.ielegems@gmail.com";
    $headers = "From: " . $mailFrom;
    $txt = "U hebt een e-mail ontvangen van " . $name . ".\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php#contact?mailsend");
    // echo "Uw bericht is verzonden";
    // echo "<script type='text/javascript'>alert('Uw bericht is verstuurd');</script>";
}
